<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSondagemAlunosTable extends Migration
{
    public function up()
    {
        Schema::create('sondagem_alunos', function (Blueprint $table) {
            $table->id();
            // $table->integer('sala_id')->unsigned();
            // $table->integer('aluno_id')->unsigned();
            $table->integer('bimestre');
            $table->string('aspecto');
            // $table->integer('situacao')->unsigned();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('sondagem_alunos', function (Blueprint $table) {
            $table->foreignId('aluno_id')->references('id')->on('alunos')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('sala_id')->references('id')->on('salas')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('situacao')->references('id')->on('tipo_sondagem')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('sondagem_alunos');
    }
}
