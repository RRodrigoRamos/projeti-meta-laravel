<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
  protected $fillable = [
    'contato',
    'whats',
    'tipoEndereco',
    'endereco',
    'cep',
    'numero_casa',
    'cidade',
    'bairro',
    'user_id'
  ];

}
