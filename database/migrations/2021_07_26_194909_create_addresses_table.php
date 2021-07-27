<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('logradouro'); //campo para armazenar o a rua, avenida, alameda etc
            $table->string('numero'); //campo para armazenar o numero da casa, prédio, galpão etc
            $table->string('bairro'); //campo para armazenar o bairro
            $table->string('cidade'); //campo para armazenar a cidade
            $table->string('estado'); //campo para armazenar o estado
            $table->unsignedBigInteger('id_usuario'); //ID do usuario, a quem pertence o endereço
            $table->timestamps();

            $table->index('cidade');
        });

        Schema::table('addresses', function (Blueprint $table){
           /**
            * Aqui estamos alterando a tabela e
            * colocando uma chave estrangeira no
            * campo que armazena o ID do usuário
            */
            $table->foreign('id_usuario')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
    }
}
