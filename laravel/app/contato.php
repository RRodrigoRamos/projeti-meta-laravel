<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contato extends Model
{
  protected $fillable = [
    'contato','whats','tipoEndereco','endereco','cep','numero_casa','cidade','bairro',
  ];

}
