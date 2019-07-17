<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;

class Tag extends Model
{
    protected $fillable = ['nama_tag', 'slug', 'artikel_id', 'tag_id'];
    public $timestamps = true;

    public function artikel()
    {
        return $this->belongstoMany('App\Kategori', 'artikel_tag', 'tag_id', 'artikel_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public static function boot()
    {
        parent::boot();
        self::deleting(function ($tag) {
            // mengecek apakah artikel masih terhubung
            if ($tag->artikel->count() > 0) {
                // menyiapkan pesan error
                $html = 'Tag tidak bisa dihapus karena masih memiliki artikel ';
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
