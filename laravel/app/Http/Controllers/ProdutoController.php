<?php

namespace App\Http\Controllers;

use DB;
use App\Produto;
use App\User;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)

    {
      $produtos = DB::select('select * from produtos order by rand() asc limit 9');
      return view('produtos',['produtos' => $produtos]);

      // $user = DB::select('select * from users');
      // return view('produtos',['users' => $users]);

      // $produto = Produto::all();
      // dd($produto);
      // // return redirect()->route('home')->with( alert()->success('Produtos Pesquisados com sucesso!'));
    }

    public function acessorios(Request $request)

    {
      $produtos = DB::select('select * from produtos where categoria_id=1 order by rand() limit 9');
      return view('acessorios',['produtos' => $produtos]);

      // $user = DB::select('select * from users');
      // return view('produtos',['users' => $users]);

      // $produto = Produto::all();
      // dd($produto);
      // // return redirect()->route('home')->with( alert()->success('Produtos Pesquisados com sucesso!'));
    }

    public function automotivos(Request $request)

    {
      $produtos = DB::select('select * from produtos where categoria_id=2 order by rand() limit 9');
      return view('automotivos',['produtos' => $produtos]);

      // $user = DB::select('select * from users');
      // return view('produtos',['users' => $users]);

      // $produto = Produto::all();
      // dd($produto);
      // // return redirect()->route('home')->with( alert()->success('Produtos Pesquisados com sucesso!'));
    }

    public function eletronicos(Request $request)

    {
      $produtos = DB::select('select * from produtos where categoria_id=3 order by rand() limit 9');
      return view('eletronicos',['produtos' => $produtos]);

      // $user = DB::select('select * from users');
      // return view('produtos',['users' => $users]);

      // $produto = Produto::all();
      // dd($produto);
      // // return redirect()->route('home')->with( alert()->success('Produtos Pesquisados com sucesso!'));
    }

    public function eletrodomesticos(Request $request)

    {
      $produtos = DB::select('select * from produtos where categoria_id=4 order by rand() limit 9');
      return view('eletrodomesticos',['produtos' => $produtos]);

      // $user = DB::select('select * from users');
      // return view('produtos',['users' => $users]);

      // $produto = Produto::all();
      // dd($produto);
      // // return redirect()->route('home')->with( alert()->success('Produtos Pesquisados com sucesso!'));
    }

    public function imoveis(Request $request)

    {
      $produtos = DB::select('select * from produtos where categoria_id=5 order by rand() limit 9');
      return view('imoveis',['produtos' => $produtos]);

      // $user = DB::select('select * from users');
      // return view('produtos',['users' => $users]);

      // $produto = Produto::all();
      // dd($produto);
      // // return redirect()->route('home')->with( alert()->success('Produtos Pesquisados com sucesso!'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
      $produto = Produto::all();
      dd($produto);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function edit(produto $produto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, produto $produto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function destroy(produto $produto)
    {
        //
    }
}
