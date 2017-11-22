<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;

class InicioController extends Controller
{
    public function index()
    {
    	$menus = Menu::orderBy('ordem', 'desc')->get();

    	return view('inicio', [
    		'menus' => $menus
    	]);
    }
}
