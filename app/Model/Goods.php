<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Shop;
use App\Model\Order;
class Goods extends Model
{
    protected $table = 'goods';
    protected $primaryKey = 'tbid';
     public function shop() {
        return $this->belongsTo('App\Shop','shop_id');
    }
    public function goods_id()
    {
        return $this->morphMany(Order::class, 'class');
    }
}
