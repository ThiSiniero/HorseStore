<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LojaModel extends Model
{
    protected $fillable = ['nome', 'idade', 'email', 'tel', 'cep' ,'nome_animal', 'raca_animal', 'idade_animal', 'cor_animal', 'sexo_animal'];
}
