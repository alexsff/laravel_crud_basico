<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('nome'); // este campo espera um texto
            $table->decimal('custo',19,2); //este campo espera um número do tipo descimal
            $table->decimal('preco',19,2); //este campo espera um número do tipo descimal
            $table->integer('quantidade'); //este campo espera um número do tipo inteiro
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
        Schema::dropIfExists('produtos');
    }
}
