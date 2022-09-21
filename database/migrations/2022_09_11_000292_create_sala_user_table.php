<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalaUserTable extends Migration {
    public function up() {
        Schema::create('sala_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('sala_id')->references('id')->on('salas')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('escola_id')->references('id')->on('escolas')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('disciplina_id')->references('id')->on('disciplinas')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('tipo_professor_id')->references('id')->on('tipo_professor')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });

        
        
    }

    public function down() {
        Schema::dropIfExists('sala_user');
    }
}
