<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atividades', function (Blueprint $table) {
            $table->id();
            $table->date('data');
            $table->string('titulo', 100);
            $table->integer('disciplina_id');
            $table->string('conteudo', 1500);
            $table->integer('peso_atividade')->default('1');
            $table->boolean('programada');
            $table->integer('bimestre')->nullable(true);
            $table->string('observacao', 5000)->default('Sem observações')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('atividades');
    }
};
