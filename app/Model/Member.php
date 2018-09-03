<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Shop;
class Member extends Model
{
    protected $table = 'member';
    protected $primaryKey = 'tbid';
     public function shop()
    {
        return $this->belongsToMany('App\Model\Shop','member_shop','member_id','shop_id');
        
    }
}
