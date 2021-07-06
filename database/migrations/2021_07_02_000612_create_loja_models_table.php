<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLojaModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loja_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome', 150);
            $table->float('idade', 100,0);
            $table->string('email', 100);
            $table->float('tel', 100,0);
            $table->float('cep', 100,0);
            $table->string('nome_animal', 150);
            $table->string('raca_animal', 150);
            $table->float('idade_animal', 100,0);
            $table->string('cor_animal', 150);
            $table->string('sexo_animal', 150);
            $table->binary('img_animal', 250);
            $table->timestamps();
        });
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loja_models');
    }
}
