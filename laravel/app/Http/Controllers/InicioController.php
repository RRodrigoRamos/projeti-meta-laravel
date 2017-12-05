<?php

namespace App\Http\Controllers;

use DB;
use App\Categoria;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InicioController extends Controller
{
    public function index(Request $request)
    {
    	$menus = Categoria::all();
    	return view('template', ['menus' => $menus]);

        // dar pra fazer o menu dinamico na view de inicio buscar essas informações do bando
    }
}
