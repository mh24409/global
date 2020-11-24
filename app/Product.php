<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use SebastianBergmann\Type\Type;

class Product extends Model

{
    protected $table = "products";

    public function producttype (){
        return $this->belongsTo('App\Type','typeId');
    }
    public function productuser (){
        return $this->belongsTo('App\User','user_id');
    }
    
    
}
