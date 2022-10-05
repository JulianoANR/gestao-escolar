<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoAvaliacoesTable extends Migration
{
    public function up()
    {
        Schema::create('tipo_avaliacoes', function (Blueprint $table) {
            $table->id();
            $table->string('descricao');
            $table->string('icon'); //classe do awesome icons
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tipo_avaliacoes');
    }
}
