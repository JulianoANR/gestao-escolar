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
        Schema::create('curriculos', function (Blueprint $table) {
            $table->id();
            $table->string('serie');
            $table->integer('bimestre');
            $table->string('linguagem')->nullable();
            $table->string('codigo');
            $table->longText('descricao');
            $table->string('objeto_conhecimento')->nullable();
            $table->integer('disciplina_id');
            $table->string('nivel_ensino');
            $table->integer('origem');
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
        Schema::dropIfExists('curriculos');
    }
};