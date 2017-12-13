<?php

namespace App\Http\Controllers;

use DB;
use App\User;
use App\Produto;
use App\Contato;
use App\Categoria;
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
    public function index(Request $requisicao)
    {
      $produtos = DB::select('select * from produtos order by rand() asc limit 9');
      return view('categorias.produtos',['produtos' => $produtos]);
    }


    public function acessorios(Request $request)
    {
        $produtos = DB::select('select * from produtos where categoria_id=1 order by rand() limit 9');
      $paginas = Produto::where('categoria_id','=', 1)->paginate(9);

      return view('categorias.acessorios',[
        'produtos' => $produtos,
        'paginas' => $paginas,
      ]);
    }

    public function automotivos(Request $request)

    {
      $produtos = DB::select('select * from produtos where categoria_id=2 order by rand() limit 9');
      $categorias = Produto::where('categoria_id','=', 2)->paginate(9);

      return view('categorias.automotivos',[
        'produtos' => $produtos,
        'categorias' => $categorias,
      ]);
    }

    public function eletronicos(Request $request)

    {
      $produtos = DB::select('select * from produtos where categoria_id=3 order by rand() limit 9');
      $categorias = Produto::where('categoria_id','=', 3)->paginate(9);

      return view('categorias.eletronicos',[
        'produtos' => $produtos,
        'categorias' => $categorias,
      ]);
    }

    public function eletrodomesticos(Request $request)

    {
      $produtos = DB::select('select * from produtos where categoria_id=4 order by rand() limit 9');
      $categorias = Produto::where('categoria_id','=', 3)->paginate(9);

      return view('categorias.eletrodomesticos',[
        'produtos' => $produtos,
        'categorias' => $categorias,
      ]);

    }

    public function imoveis(Request $request)

    {
      $produtos = DB::select('select * from produtos where categoria_id=5 order by rand() limit 9');
      $categorias = Produto::where('categoria_id','=', 3)->paginate(9);

      return view('categorias.imoveis',[
        'produtos' => $produtos,
        'categorias' => $categorias,
      ]);
    }

    public function cadastrarProduto(Request $request)

    {

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

//       public function show($id) {
// $users = DB::select('select * from student where id = ?',[$id]) ;
// return view('stud_update',['users'=>$users]) ;
// }
// public
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
