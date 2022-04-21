<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use App\Repository\MenuRepository;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     private $menu;

     public function __construct(MenuRepository $menu)
     {
        $this->menu = $menu;
     }
    public function index()
    {
        $menus = $this->menu->all();
        return view('admin.menus.index', ['menus' => $menus]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'menu_name' => 'nullable|string|max:255',
            'menu_controller' => 'nullable|string|max:255',
            'menu_link' => 'nullable|string|max:255',
            'menu_icon' => 'nullable|string|max:255',
            'menu_status' => 'nullable|string|max:255',
            'order' => 'required|integer'
        ];

        $validate = $request->validate($rules);
        $create = Menu::create($validate);
        if($create)
        {
            session()->flash('success', 'Menu created Successfully');
            return back();
        }
        else{
            session()->flash('danger', 'Post could not created');
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menu = $this->menu->findById($id);
        $menu->delete();
        session()->flash('message', 'Menu Records deleted successfully');
        return back();
    }
}
