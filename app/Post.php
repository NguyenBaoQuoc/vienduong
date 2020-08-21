<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];

    public function projects(){
        return $this->hasMany(Project::class);
    }

    

    
}
