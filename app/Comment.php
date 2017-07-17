<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    function comments(){
    	return $this->belongsTo('App\Comment', 'blog_id', 'id');
    }
}
