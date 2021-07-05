<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modelCalc extends Model
{
    protected $fillable = ['nome', 'nota1', 'nota2', 'media'];
}
