<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function images(){
		 return $this->hasMany('App\ProductImage');
	 }
	 public function orders()
    {
        return $this->belongsToMany('App\Models\Order', 'order__lists', 'order_id', 'product_id')->withTimestamps();;
    }
}
