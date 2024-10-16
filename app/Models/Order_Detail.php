<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_Detail extends Model
{
    protected $table = 'order_detail';

    public function order() {
        return $this->belongsTo('App\Models\Order');
    }
}
