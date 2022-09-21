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
        Schema::create('tipo_necessidades_especiais', function (Blueprint $table) {
            $table->id();
            // $table->integer('identificador_necessidade_especial_id');
            $table->integer('sed_id');
            $table->string('descricao');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('tipo_necessidades_especiais', function (Blueprint $table) {
            $table->foreignId('identificador_necEspecial_id')->references('id')->on('identificador_necEspeciais')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipo_necessidades_especiais');
    }
};
