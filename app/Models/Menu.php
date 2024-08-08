<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function menucategories()
    {
        return $this->belongsTo(MenuCategory::class, 'menu_category_id', 'id');
    }
}
