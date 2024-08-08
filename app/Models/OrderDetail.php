<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function orders()
    {
        return $this->belongsTo(Order::class, 'order_id', 'id');
    }

    public function menus()
    {
        return $this->belongsTo(Menu::class, 'menu_id', 'id');
    }
}
