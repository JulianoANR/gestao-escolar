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
            $table->integer('peso_atividade');
            $table->boolean('programada');
            $table->foreignId('professor_id')->constrained('users');
            $table->foreignId('disciplina_id')->constrained('disciplinas');
            $table->foreignId('sala_id')->constrained('salas');
            $table->foreignId('tipo_programada_id')->nullable()->constrained('tipo_programada');
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
