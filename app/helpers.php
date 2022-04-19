<?php

use App\Models\Menu;
use Illuminate\Support\Facades\Auth;

if (!function_exists('menus_helper')) {
    function menus_helper()
    {
        $menus = Menu::select('menu_name', 'menu_link', 'menu_icon')->where('menu_status', 1)->get();
        return $menus;
    }
}
?>


