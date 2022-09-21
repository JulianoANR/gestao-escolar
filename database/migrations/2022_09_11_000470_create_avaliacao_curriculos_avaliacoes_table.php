<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvaliacaoCurriculosAvaliacoesTable extends Migration
{
    public function up() {
        Schema::create('avaliacao_curriculo', function (Blueprint $table) {
            $table->id();
            // $table->integer('curriculo_id')->unsigned();
            // $table->integer('avaliacao_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('avaliacao_curriculo', function (Blueprint $table) {
            $table->foreignId('curriculo_id')->references('id')->on('curriculos')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('avaliacao_id')->references('id')->on('avaliacoes')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    public function down() {
        Schema::dropIfExists('avaliacao_curriculo');
    }
}
