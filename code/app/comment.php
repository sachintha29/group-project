<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    protected $fillable = ['body', 'user_id', 'parent_id', 'post_id'];

    public function post () {
        return $this->belongsTo(Post::class);
    }
    
    public function user () {
        return $this->belongsTo(User::class);
    }
}