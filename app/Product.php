<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function types()
    {
    	return $this->hasMany('App\Type');
    }

    public function getPriceAttribute($value){
        $discount=$value*($this->discount / 100);
        $final_price=$value-$discount;
        return number_format($final_price,2);
    }
}
