<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	protected $guarded = [];
   public function products()
    {
        return $this->belongsToMany('App\Product', 'order__lists', 'order_id' ,'product_id')->withTimestamps();;
    }
}
