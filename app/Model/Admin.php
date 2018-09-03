<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasRelationship;
use App\Model\User;
use App\Model\Shop;
use App\Model\Goods;

class Admin extends Model
{
    protected $table = 'admin';
    protected $primaryKey = 'admin_id';

    public function user()
    {
        return $this->belongsTo('App\Shop', 'admin_id','admin_id')->withDefault([  'name' => 'Guest Author',]);
        // return $this->hasOne('App\Phone');
    }
     public function lists()
    {
        return $this->hasManyThrough('App\Goods', 'App\Shop','admin_id','shop_id');
    }
    
}
