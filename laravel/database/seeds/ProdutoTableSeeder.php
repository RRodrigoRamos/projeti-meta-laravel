<?php

use Illuminate\Database\Seeder;
use App\Produto;

class ProdutoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for ($i=0; $i < 30; $i++) {
        Produto::create([
          'usuario_id'=>1,
          'categoria_id'=>1,
          'titulo'=>'Fogão CONSUL Eletrico',
          'descricao'=>'Auto Limpante, Acendimento Automatico, 5 Bocas luz interna no Forno',
          'urlimg'=>'img/categorias/anuncios/eletrodomestico/4.jpg',
          'Valor'=>'600,00',
          'estado'=>'SEMI-NOVO',
          'quantidade'=>'2',
          'habilitado'=>'S',
        ]);

        Produto::create([
          'usuario_id'=>2,
          'categoria_id'=>2,
          'titulo'=>'Produto Cadastrado',
          'descricao'=>'Descrição do Produto Com informações relevantes para os interessados no produto',
          'urlimg'=>'img/categorias/anuncios/eletrodomestico/4.jpg',
          'Valor'=>'500,00',
          'estado'=>'SEMI-NOVO',
          'quantidade'=>'2',
          'habilitado'=>'S',
        ]);

        Produto::create([
          'usuario_id'=>1,
          'categoria_id'=>1,
          'titulo'=>'Produto Cadastrado',
          'descricao'=>'Descrição do Produto Com informações relevantes para os interessados no produto',
          'urlimg'=>'img/categorias/anuncios/eletrodomestico/4.jpg',
          'Valor'=>'500,00',
          'estado'=>'SEMI-NOVO',
          'quantidade'=>'2',
          'habilitado'=>'S',
        ]);

        Produto::create([
          'usuario_id'=>1,
          'categoria_id'=>1,
          'titulo'=>'Produto Cadastrado',
          'descricao'=>'Descrição do Produto Com informações relevantes para os interessados no produto',
          'urlimg'=>'img/categorias/anuncios/eletrodomestico/4.jpg',
          'Valor'=>'500,00',
          'estado'=>'SEMI-NOVO',
          'quantidade'=>'2',
          'habilitado'=>'S',
        ]);

        Produto::create([
          'usuario_id'=>1,
          'categoria_id'=>1,
          'titulo'=>'Produto Cadastrado',
          'descricao'=>'Descrição do Produto Com informações relevantes para os interessados no produto',
          'urlimg'=>'img/categorias/anuncios/eletrodomestico/4.jpg',
          'Valor'=>'500,00',
          'estado'=>'SEMI-NOVO',
          'quantidade'=>'2',
          'habilitado'=>'S',
        ]);
      }

    }
}
