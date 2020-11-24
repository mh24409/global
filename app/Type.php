<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $table = "types";

    public function typesproduct (){
        return $this->hasMany('App\Product','typeId');
    }
}
