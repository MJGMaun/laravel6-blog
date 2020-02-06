<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    //
    use SoftDeletes;
    Protected $dates = ['deleted_at'];
    protected $fillable = ['title', 'content'];

    public function path() {
        return route('posts.show', $this);
    }
}
