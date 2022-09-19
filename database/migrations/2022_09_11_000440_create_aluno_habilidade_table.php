<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlunoHabilidadeTable extends Migration {
    public function up() {
        Schema::create('aluno_habilidade', function (Blueprint $table) {
            $table->id();
            // $table->integer('aluno_id')->unsigned();
            // $table->integer('habilidade_id')->unsigned();
            $table->boolean('situacao');
            $table->integer('bimestre');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('aluno_habilidade', function (Blueprint $table) {
            $table->foreignId('aluno_id')->references('id')->on('alunos')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('habilidade_id')->references('id')->on('habilidades')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    public function down() {
        Schema::dropIfExists('aluno_habilidade');
    }
}