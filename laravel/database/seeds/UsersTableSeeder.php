<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
          'email'=>'rodrigo@gmail.com',
          'name'=>'RodrigoRamos',
          'password'=>bcrypt('123'),
          'sexo'=>'M',
          'cpf'=>'000.000.00',
          'data_nasc'=>'2010-05-04',
        ]);
    }
}
