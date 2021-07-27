<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegraUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regra_users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_regra');
            $table->timestamps();
        });

        Schema::table('regra_users', function (Blueprint $table) {
           /**
            * Aqui estamos alterando a tabela e
            * colocando uma chave estrangeira no
            * campo que armazena o ID do usuário
            */
            $table->foreign('id_usuario')->references('id')->on('users')->onDelete('cascade');

            /**
            * Aqui estamos alterando a tabela e
            * colocando uma chave estrangeira no
            * campo que armazena o ID da regra
            */
            $table->foreign('id_regra')->references('id')->on('regras')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('regra_users');
    }
}
