<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAulasPrevistasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aulas_previstas', function (Blueprint $table) {
            $table->id();
            // $table->integer('sala_id')->unsigned();
            // $table->integer('disciplina_id')->unsigned();
            $table->integer('previsao_bimestre1')->nullable();
            $table->integer('previsao_bimestre2')->nullable();
            $table->integer('previsao_bimestre3')->nullable();
            $table->integer('previsao_bimestre4')->nullable();
            $table->string('observacao')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('aulas_previstas', function (Blueprint $table) {
            $table->foreignId('sala_id')->references('id')->on('salas')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('disciplina_id')->references('id')->on('disciplinas')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aulas');
    }
}
