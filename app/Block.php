<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
    //
    public function getFullPath(){
        
        return $this->path . '/' .$this->slug;
    }


    public function partials()
    {
        return $this->belongsToMany('App\Partial');
    }

    public function getBySlug($slug)
    {
        return $this->where('slug' , $slug)->first();
    }

}
