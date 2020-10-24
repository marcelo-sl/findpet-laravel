<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->string('raca', 50);
            $table->char('sexo', 1);
            $table->text('descricao')->nullable();
            $table->string('imagem', 100)->nullable();
            $table->timestamps();

            $table->unsignedBigInteger('especie_id');
            $table->unsignedBigInteger('situacao_id');
            $table->unsignedBigInteger('contato_id');
            $table->unsignedBigInteger('porte_id');

            $table->foreign('especie_id')->references('id')->on('especies');
            $table->foreign('situacao_id')->references('id')->on('situacoes');
            $table->foreign('contato_id')->references('id')->on('contatos');
            $table->foreign('porte_id')->references('id')->on('portes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pets');
    }
}
