<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
        protected $fillable = ['nama', 'slug'];
        public $timestamps = true;
        public function artikel()
        {
            return $this->hasMany('App\Artikel', 'genre_id');
        }
    
        public function getRouteKeyName()
        {
            return 'slug';
        }
    
    //     public static function boot()
    // {
    //     parent::boot();
    //     self::deleting(function ($genre) {
    //         // mengecek apakah artikel tercantum dengan genre tersebut
    //         if ($genre->artikel->count() > 0) {
    //             // menyiapkan pesan error
    //             $html = 'genre tidak bisa dihapus karena masih memiliki artikel ';
    //             $html .= '<ul>';
    //             foreach ($genre->artikel as $data) {
    //                 $html .= "$data->judul";
    //             }
    //             $html .= '</ul>';
    //             Session::flash("flash_notification", [
    //                 "level" => "danger",
    //                 "message" => $html
    //             ]);
    //             // membatalkan proses penghapusan
    //             return false;
    //         }
    //     });
    //     }
    }
    