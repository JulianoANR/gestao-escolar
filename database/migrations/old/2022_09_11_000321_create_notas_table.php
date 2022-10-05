<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotasTable extends Migration {
    public function up() {
        Schema::create('notas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('aluno_id')->references('id')->on('alunos')->onUpdate('cascade')->onDelete('cascade');
            $table->string('aluno_nome');
            $table->integer('aluno_numero');
            $table->foreignId('sala_id')->references('id')->on('salas')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('disciplina_id')->references('id')->on('disciplinas')->onUpdate('cascade')->onDelete('cascade');
            $table->float('bimestre_1')->default(0);
            $table->float('bimestre_2')->default(0);
            $table->float('bimestre_3')->default(0);
            $table->float('bimestre_4')->default(0);
            $table->float('conceito_final')->default(0);
            $table->integer('repo_bimestre_1')->nullable(true);
            $table->integer('repo_bimestre_2')->nullable(true);
            $table->integer('repo_bimestre_3')->nullable(true);
            $table->integer('repo_bimestre_4')->nullable(true);
            $table->integer('repo_conceito_final')->nullable(true);
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('notas');
    }
}
