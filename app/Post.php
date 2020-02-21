<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    //
    use SoftDeletes;
    Protected $dates = ['deleted_at'];
    protected $fillable = ['title', 'excerpt', 'content'];

    public function path() {
        return route('posts.show', $this);
    }

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function tags() {
        return $this->belongsToMany('App\Tag')->withTimestamps();
    }
}
