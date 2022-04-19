<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'menu_name',
        'menu_controller',
        'menu_link',
        'menu_icon',
        'menu_status',
        'order'
    ];
    public function scopeMenu($query)
    {
        return $query->orderBy('order', 'asc')->orderBy('menu_name', 'asc');
    }
}
