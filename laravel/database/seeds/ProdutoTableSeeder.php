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
      for ($i=0; $i < 20; $i++) {
        Produto::create([
          'usuario_id'=>2,
          'categoria_id'=>1,
          'titulo'=>'Usuario 2 Pulseira',
          'descricao'=>'Pulseira com detalhes em aço, com pulseira ajustavel',
          'urlimg'=>'../img/categorias/anuncios/acessorio/6.jpg',
          'Valor'=>'15,00',
          'estado'=>'NOVO',
          'quantidade'=>'2',
          'habilitado'=>'S',
        ]);

        Produto::create([
          'usuario_id'=>1,
          'categoria_id'=>1,
          'titulo'=>'Usuario 1 Carteira Masculina',
          'descricao'=>'Botar Moeda, Porta Cartão e Um chaveiro Pendrive',
          'urlimg'=>'../img/categorias/anuncios/acessorio/10.jpg',
          'Valor'=>'20,00',
          'estado'=>'SEMI-NOVO',
          'quantidade'=>'2',
          'habilitado'=>'S',
        ]);

        Produto::create([
          'usuario_id'=>3,
          'categoria_id'=>1,
          'titulo'=>'Usuario 3 - Pulseira Feminina',
          'descricao'=>'Com detalhes em Aço Inox',
          'urlimg'=>'../img/categorias/anuncios/acessorio/4.jpg',
          'Valor'=>'15,00',
          'estado'=>'NOVO',
          'quantidade'=>'2',
          'habilitado'=>'S',
        ]);

        Produto::create([
          'usuario_id'=>1,
          'categoria_id'=>2,
          'titulo'=>'Usuario 1 - Carro',
          'descricao'=>'Descrição do Produto: Manutenção em Dia, IPVA 2017 pago, Tanque com 40L autonomia',
          'urlimg'=>'../img/categorias/anuncios/automotivo/5.jpg',
          'Valor'=>'20.500,00',
          'estado'=>'10.000km Rodado',
          'quantidade'=>'1',
          'habilitado'=>'S',
        ]);

        Produto::create([
          'usuario_id'=>3,
          'categoria_id'=>2,
          'titulo'=>'Usuario 3 - Carro CrossFox',
          'descricao'=>'IPVA 2017 Pago, Automatico, Manutenção em dia',
          'urlimg'=>'../img/categorias/anuncios/automotivo/8.jpg',
          'Valor'=>'30.500,00',
          'estado'=>'10.000km Rodado',
          'quantidade'=>'1',
          'habilitado'=>'S',
        ]);

        Produto::create([
          'usuario_id'=>2,
          'categoria_id'=>2,
          'titulo'=>'Usuario 2 - Moto',
          'descricao'=>'Descrição do Produto Com informações relevantes para os interessados no produto',
          'urlimg'=>'../img/categorias/anuncios/automotivo/14.jpg',
          'Valor'=>'6.500,00',
          'estado'=>'5.000km Rodado',
          'quantidade'=>'2',
          'habilitado'=>'S',
        ]);

        Produto::create([
          'usuario_id'=>1,
          'categoria_id'=>3,
          'titulo'=>'Usuario 1 - Celular',
          'descricao'=>'Descrição do Produto Com informações relevantes para os interessados no produto. Ex. Risco na tela, Com nota Fiscal.',
          'urlimg'=>'../img/categorias/anuncios/eletronico/2.jpg',
          'Valor'=>'500,00',
          'estado'=>'SEMI-NOVO',
          'quantidade'=>'2',
          'habilitado'=>'S',
        ]);

        Produto::create([
          'usuario_id'=>2,
          'categoria_id'=>3,
          'titulo'=>'Usuario 3 - Aparelho de Som',
          'descricao'=>'Descrição do Produto Ex. Bom volume esterio, entrada para SD e Pendrive.',
          'urlimg'=>'../img/categorias/anuncios/eletronico/28.jpg',
          'Valor'=>'150,00',
          'estado'=>'SEMI-NOVO',
          'quantidade'=>'2',
          'habilitado'=>'S',
        ]);

        Produto::create([
          'usuario_id'=>1,
          'categoria_id'=>4,
          'titulo'=>'Usuario 4 - Fogão',
          'descricao'=>'Descrição do Produto. Ex. 5 Bocas Acendimento Eletrico.',
          'urlimg'=>'../img/categorias/anuncios/eletrodomestico/3.jpg',
          'Valor'=>'450,00',
          'estado'=>'SEMI-NOVO',
          'quantidade'=>'2',
          'habilitado'=>'S',
        ]);

        Produto::create([
          'usuario_id'=>1,
          'categoria_id'=>4,
          'titulo'=>'Usuario 4 - Geladeira FrosFree',
          'descricao'=>'Descrição do Produto. Ex. Compartimento superior, luz interna, Painel de controle digital, descongelamento automatizado',
          'urlimg'=>'../img/categorias/anuncios/eletrodomestico/20.jpg',
          'Valor'=>'900,00',
          'estado'=>'SEMI-NOVO',
          'quantidade'=>'2',
          'habilitado'=>'S',
        ]);

        Produto::create([
          'usuario_id'=>2,
          'categoria_id'=>4,
          'titulo'=>'Usuario 4 - TV LCD',
          'descricao'=>'Descrição do Produt. Ex. Entrada USB, entrada para TV a Cabo.',
          'urlimg'=>'../img/categorias/anuncios/eletrodomestico/26.jpg',
          'Valor'=>'700,00',
          'estado'=>'NOVO',
          'quantidade'=>'2',
          'habilitado'=>'S',
        ]);

        Produto::create([
          'usuario_id'=>2,
          'categoria_id'=>5,
          'titulo'=>'Usuario 4 - Casa',
          'descricao'=>'Descrição do Produto Ex. Boa localização e Garagem para 2 carros.',
          'urlimg'=>'../img/categorias/anuncios/imovel/12.jpg',
          'Valor'=>'50.500,00',
          'estado'=>'Localizada Bairro Central',
          'quantidade'=>'2',
          'habilitado'=>'S',
        ]);

        Produto::create([
          'usuario_id'=>1,
          'categoria_id'=>5,
          'titulo'=>'Usuario 4 - Apartamentos',
          'descricao'=>'Descrição do Produt. Ex. 2 Suite, Banheiros e Area de serviço. Mensalidade a Combinar.',
          'urlimg'=>'../img/categorias/anuncios/imovel/21.jpg',
          'Valor'=>'700,00',
          'estado'=>'Localização Bairro Alvorada',
          'quantidade'=>'2',
          'habilitado'=>'S',
        ]);
      }

    }
}
