<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $fillable = ['judul', 'slug', 'foto', 'konten', 'kategori_id', 'user_id'];
    public $timestamps = true;

    public function kategori()
    {
        return $this->belongsTo('App\Kategori', 'kategori_id');
    }

    public function genre()
    {
        return $this->belongsTo('App\Genre', 'genre_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function tag()
    {
        return $this->belongsToMany('App\Tag', 'artikel_tag', 'artikel_id', 'tag_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
