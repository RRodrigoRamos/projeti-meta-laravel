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
        'titulo'=>'Acessórios',
        'descricao'=>'Produtos relacionado a Acessórios',
        'ordem'=>'1',
        'link'=>'/acessorio',
        'habilitado'=>'s',
        ]);

        Categoria::create([
        'titulo'=>'Automotivos',
        'descricao'=>'Produtos relacionado veiculos',
        'ordem'=>'2',
        'link'=>'/automotivos',
        'habilitado'=>'s',
        ]);

        Categoria::create([
        'titulo'=>'Eletrônicos',
        'descricao'=>'Produtos relacionado a Eletrônicos',
        'ordem'=>'3',
        'link'=>'/eletronicos',
        'habilitado'=>'s',
        ]);

        Categoria::create([
        'titulo'=>'EletrôEletrônicos',
        'descricao'=>'Produtos relacionado a EletrôDomestico diversos',
        'ordem'=>'4',
        'link'=>'/eletroeletronicos',
        'habilitado'=>'s',
        ]);

        Categoria::create([
        'titulo'=>'Imóveis',
        'descricao'=>'Produtos relacionado a Imoveis e Propriedades',
        'ordem'=>'5',
        'link'=>'/imoveis',
        'habilitado'=>'s',
        ]);
    }
}
