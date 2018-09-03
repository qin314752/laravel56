<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Shop;

class ShopMember extends Model
{
    protected $table = 'shop_member';
    protected $primaryKey = 'tbid';
}
