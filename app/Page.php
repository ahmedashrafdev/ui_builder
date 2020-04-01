<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    //

    public function blocks()
    {
        return $this->belongsToMany('App\Block')->withPivot('ordering')
        ->orderBy('block_page.ordering');;
    }
}
