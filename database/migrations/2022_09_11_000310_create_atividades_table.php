<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateAtividadesTable extends Migration {
    public function up() {
        Schema::create('atividades', function (Blueprint $table) {
            $table->id();
            $table->date('data');
            $table->string('disciplina');
            // $table->integer('id_professor')->unsigned();
            // $table->integer('id_sala')->unsigned();
            // $table->integer('id_escola')->unsigned();
            $table->integer('peso_atividade')->nullable(true);
            $table->boolean('programada');
            $table->integer('bimestre')->nullable(true);
            $table->string('observacao', 3000)->default("Sem observações.")->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('atividades', function (Blueprint $table) {
            $table->foreignId('professor_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('sala_id')->references('id')->on('salas')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('escola_id')->references('id')->on('escolas')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    public function down() {
        Schema::dropIfExists('atividades');
    }
}