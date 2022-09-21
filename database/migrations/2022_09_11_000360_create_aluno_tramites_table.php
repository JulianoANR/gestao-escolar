<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlunoTramitesTable extends Migration {
    public function up() {

        Schema::create('aluno_tramites', function (Blueprint $table) {
            $table->id();
            // $table->integer('user_id')->unsigned();
            // $table->integer('escola_id')->unsigned();
            // $table->integer('aluno_id')->unsigned();
            $table->string('situacao');
            $table->string('aluno_ra');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('aluno_tramites', function (Blueprint $table) {
            $table->foreignId('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('escola_id')->references('id')->on('escolas')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('aluno_id')->references('id')->on('alunos')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    public function down() {
        Schema::table('aluno_tramites', function (Blueprint $table) {
            Schema::dropIfExists('aluno_tramites');
        });
    }
}