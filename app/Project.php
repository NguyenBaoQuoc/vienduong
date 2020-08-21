<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $guarded = [];

    public function post(){
        return $this->belongsTo(Post::class, 'post_id');
    }

    protected $casts = ['system' => 'array'];
}
