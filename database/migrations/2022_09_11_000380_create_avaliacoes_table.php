<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvaliacoesTable extends Migration
{
    public function up()
    {
        Schema::create('avaliacoes', function (Blueprint $table) {
            $table->id();
            $table->date('data');
            $table->integer('disciplina_id')->unsigned();
            $table->integer('sala_id')->unsigned();
            $table->integer('professor_id')->unsigned();
            $table->integer('bimestre');
            $table->integer('peso');
            $table->integer('tipo_id');
            //$table->integer('desing')->unsigned()->nullable();
            $table->string('descricao', 1000)->nullable();
            $table->string('observacao', 3000)->default('Sem Observações')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        // Schema::table('avaliacoes', function (Blueprint $table) {
        //     $table->foreign('professor_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        //     $table->foreign('disciplina_id')->references('id')->on('disciplinas')->onUpdate('cascade')->onDelete('cascade');
        //     $table->foreign('sala_id')->references('id')->on('salas')->onUpdate('cascade')->onDelete('cascade');
        //     $table->foreign('tipo_id')->references('id')->on('tipo_avaliacao')->onUpdate('cascade')->onDelete('cascade');
        // });
    }

    public function down()
    {
        Schema::dropIfExists('avaliacoes');
    }
}
