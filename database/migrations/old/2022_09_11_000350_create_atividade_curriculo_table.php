<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAtividadeCurriculoTable extends Migration {
    public function up() {
        Schema::create('atividade_curriculo', function (Blueprint $table) {
            $table->id();
            $table->foreignId('curriculo_id')->references('id')->on('curriculos');
            $table->foreignId('atividade_id')->references('id')->on('atividades');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down() {
        Schema::dropIfExists('atividade_curriculo');
    }
}
