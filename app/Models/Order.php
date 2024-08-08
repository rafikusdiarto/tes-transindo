<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function userDetails()
    {
        return $this->belongsTo(UserDetail::class, 'customer_id', 'user_id');
    }
    public function merchants()
    {
        return $this->belongsTo(UserDetail::class, 'merchant_id', 'id');
    }

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class, 'order_id', 'id');
    }
}
