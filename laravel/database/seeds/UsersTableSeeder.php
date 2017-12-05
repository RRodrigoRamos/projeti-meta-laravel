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
          'cpf'=>'854.319.742-20',
          'data_nasc'=>'1990-02-19',
        ]);

        User::create([
          'email'=>'teste1@gmail.com',
          'name'=>'Usuario1',
          'password'=>bcrypt('222'),
          'sexo'=>'M',
          'cpf'=>'040.212.545-00',
          'data_nasc'=>'1992-05-04',
        ]);

        User::create([
          'email'=>'teste2@hotmail.com',
          'name'=>'Usuario2',
          'password'=>bcrypt('333'),
          'sexo'=>'F',
          'cpf'=>'001.211.115-12',
          'data_nasc'=>'1992-05-04',
        ]);

        User::create([
          'email'=>'teste3@hotmail.com',
          'name'=>'Usuario3',
          'password'=>bcrypt('444'),
          'sexo'=>'F',
          'cpf'=>'661.551.885-90',
          'data_nasc'=>'1995-04-03',
        ]);
    }
}
