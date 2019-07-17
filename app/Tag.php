<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['nama_tag', 'slug'];
    public $timestamps = true;

    public function artikel()
    {
        return $this->hasMany('App\Artikel', 'tag_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public static function boot()
    {
        parent::boot();
        self::deleting(function ($tag) {
            // mengecek apakah artikel tercantum dengan tag tersebut
            if ($tag->artikel->count() > 0) {
                // menyiapkan pesan error
                $html = 'tag tidak bisa dihapus karena masih memiliki artikel ';
                $html .= '<ul>';
                foreach ($tag->artikel as $data) {
                    $html .= "$data->judul";
                }
                $html .= '</ul>';
                Session::flash("flash_notification", [
                    "level" => "danger",
                    "message" => $html
                ]);
                // membatalkan proses penghapusan
                return false;
            }
        });
    }
}
