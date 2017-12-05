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
      for ($i=0; $i < 10; $i++) {
        Contato::create([
          'contato'=>'96-99102-9214',
          'whats'=>'91-99100-0097',
          'tipoEndereco'=>'Casa',
          'endereco'=>'Av.: Raimundo dos Santos',
          'cep'=>'68908-799',
          'numero_casa'=>'1311',
          'cidade'=>'Macapá',
          'bairro'=>'Jardim Marco Zero',
          'user_id'=>1,
        ]);

        Contato::create([
          'contato'=>'96-99102-9214',
          'whats'=>'91-99199-9897',
          'tipoEndereco'=>'Apartamento',
          'endereco'=>'Av.: Raimundo Nely de Matos',
          'cep'=>'68909-792',
          'numero_casa'=>'2310',
          'cidade'=>'Macapá',
          'bairro'=>'Novo Horizonte',
          'user_id'=>2,
        ]);

        Contato::create([
          'contato'=>'96-98109-2233',
          'whats'=>'91-98109-0007',
          'tipoEndereco'=>'Apartamento',
          'endereco'=>'Av.: Henrique Galucia',
          'cep'=>'68909-612',
          'numero_casa'=>'3313',
          'cidade'=>'Macapá',
          'bairro'=>'Jardim I',
          'user_id'=>3,
        ]);

        Contato::create([
          'contato'=>'96-99122-2224',
          'whats'=>'91-99112-9090',
          'tipoEndereco'=>'Casa',
          'endereco'=>'Av.: Raimunda Cabiperibe',
          'cep'=>'68909-511',
          'numero_casa'=>'1300',
          'cidade'=>'Macapá',
          'bairro'=>'Jardim II',
          'user_id'=>4,
        ]);
      }

    }
}
