<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Model\Phone;
use App\Model\Goods;
use App\Model\Order;

class Shop extends Authenticatable
{
    protected $table = 'shop';
    protected $primaryKey = 'tbid';
  /**
     * 获取关联到用户的手机
     */
    // public function phoness()
    // {
    //     return $this->hasOne('App\Admin', 'admin_id','admin_id');
    // }
    //  public function goods() {
    //     return $this->hasMany('App\Goods','shop_id','tbid');
    // }

    // public function member() {
    //     return $this->belongsTo('App\member');

    // }
     public function shop()
    {
        return $this->morphMany('App\Model\Order', 'class');
    }



}
