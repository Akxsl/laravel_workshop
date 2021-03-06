<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
	protected $fillable = ['title', 'link', 'post_id'];

        public function posts(){
                return $this->belongsTo(Post::class);
        }
}
