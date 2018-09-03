<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $primaryKey = 'tbid';
    public function imageable()
    {
        return $this->morphTo();
    }




}
