<?php

use Illuminate\Database\Seeder;
use App\Banner;

class BannerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Banner::create([
      'descricao'=>'Produto Promoção',
      'habilitado'=>'s',
      ]);
    }
}
