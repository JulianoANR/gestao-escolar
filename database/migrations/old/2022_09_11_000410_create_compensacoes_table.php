<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompensacoesTable extends Migration {
    public function up() {
        Schema::create('compensacoes', function (Blueprint $table) {
            $table->id();
            // $table->integer('disciplina_id')->unsigned();
            // $table->integer('aluno_id')->unsigned();
            $table->integer('compensacao')->nullable();
            $table->integer('bimestre');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('compensacoes', function (Blueprint $table) {
            $table->foreignId('disciplina_id')->references('id')->on('disciplinas')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('aluno_id')->references('id')->on('alunos')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    public function down() {
        Schema::dropIfExists('compensacoes');
    }
}
