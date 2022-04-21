<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->truncate();
        $rows = [
            [
            'menu_name' => 'Menu',
            'menu_controller' => 'MenuController',
            'menu_link' => 'menus',
            'menu_icon' => '<i class="fa fa-list" aria-hidden="true"></i>',
            'menu_status' => '1',
            'order' => '1'
            ],

            [
                'menu_name' => 'Faculty',
                'menu_controller' => 'FacultyController',
                'menu_link' => 'faculty',
                'menu_icon' => '<i class="fa fa-newspaper-o" aria-hidden="true"></i>',
                'menu_status' => '1',
                'order' => '1'
            ],

        ];
        DB::table('menus')->insert($rows);
    }
}
