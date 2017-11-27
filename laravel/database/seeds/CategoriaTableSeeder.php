<?php

use Illuminate\Database\Seeder;
use App\Categoria;

class CategoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::create([
        'descricao'=>'Acessorio',
        'ordem'=>'1',
        'link'=>'/acessorio',
        'habilitado'=>'s',
        ]);

        Categoria::create([
        'descricao'=>'Automotivo',
        'ordem'=>'2',
        'link'=>'/automotivos',
        'habilitado'=>'s',
        ]);

        Categoria::create([
        'descricao'=>'Eletrônicos',
        'ordem'=>'3',
        'link'=>'/eletronicos',
        'habilitado'=>'s',
        ]);

        Categoria::create([
        'descricao'=>'EletroEletronicos',
        'ordem'=>'4',
        'link'=>'/eletroeletronicos',
        'habilitado'=>'s',
        ]);

        Categoria::create([
        'descricao'=>'Imovéis',
        'ordem'=>'5',
        'link'=>'/eletroeletronicos',
        'habilitado'=>'s',
        ]);
    }
}
