<?php

use Illuminate\Database\Seeder;
use App\Contato;

class ContatoTableSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for ($i=0; $i < 50; $i++) {
        Contato::create([
          'contato'=>'96-99102-9214',
          'whats'=>'91-99199-9897',
          'tipoEndereco'=>'Apartamento',
          'endereco'=>'Av.: Raimundo Nely de Matos',
          'cep'=>'68909-792',
          'numero_casa'=>'2310',
          'cidade'=>'Macapá',
          'bairro'=>'Novo Horizonte',
          'user_id'=>1,
        ]);
      }

    }
}
