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
      for ($i=0; $i < 50; $i++) {
        Produto::create([
          'usuario_id'=>1,
          'categoria_id'=>1,
          'titulo'=>'Nome Meu Produto',
          'descricao'=>'Descrição do Produto Com informações relevantes para os interessados no produto',
          'Valor'=>'108.00',
          'estado'=>'SEMI-NOVO',
          'quantidade'=>'2',
          'habilitado'=>'S',
        ]);
      }

    }
}
