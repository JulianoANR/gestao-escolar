<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHabilidadesTable extends Migration {
    public function up() {
        Schema::create('habilidades', function (Blueprint $table) {
            $table->id();
            $table->string('descricao');
            $table->string('serie');
            $table->string('tipo');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down() {
        Schema::dropIfExists('habilidades');
    }
}