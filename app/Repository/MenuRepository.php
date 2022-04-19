<?php

namespace App\Repository;

use App\Models\Menu;


class MenuRepository{

     /**
     * @var Menu
     */

     private $menu;

     public function __construct(Menu $menu)
     {
        $this->menu = $menu;
     }

     public function all(){

      $menus = $this->menu->menu()->orderBy('id', 'ASC')->get();
      return $menus;

     }

     public function findById($id){

        $news = $this->news->find($id);
        return $news;
     }

}

?>
