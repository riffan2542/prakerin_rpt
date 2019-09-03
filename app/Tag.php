<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;

class Tag extends Model
{
    protected $fillable = ['nama_tag', 'slug'];
    public $timestamps = true;

    public function artikel()
    {
        return $this->belongsToMany('App\Artikel', 'artikel_tag', 'tag_id', 'artikel_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

}
