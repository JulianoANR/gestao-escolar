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
        Schema::create('salas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('escola_id')->references('id')->on('escolas')->onUpdate('cascade')->onDelete('cascade');
            // $table->string('descNomeAbrevEscola');
            $table->foreignId('tipo_ensino_id')->references('id')->on('tipo_ensinos')->onUpdate('cascade')->onDelete('cascade');
            // $table->string('codEscola');//*
            // $table->string('codUnidade');//*
            // $table->string('descTipoEnsino');
            // $table->string('SerieAno');//* dependendo do tipo de ensino
            $table->foreignId('serie_id')->references('id')->on('tipo_series')->onUpdate('cascade')->onDelete('cascade');
            // $table->string('turmaSed'); //*
            $table->string('turma');
            $table->foreignId('turno_id')->references('id')->on('tipo_turnos')->onUpdate('cascade')->onDelete('cascade');
            // $table->string('descricaoTurno');//*
            $table->string('horario_inicio');//*
            $table->string('horario_fim');//*
            $table->string('data_inicio_aula');//*
            $table->string('data_fim_aula');//*
            $table->string('cod_duracao');//* (identificador_semestres)
            // $table->string('qtdAtualAlunos');
            // $table->string('qtdDigitadosAlunos');
            // $table->string('qtdEvadidosAlunos');
            // $table->string('qtdNComAlunos');
            // $table->string('qtdOutrosAlunos');
            // $table->string('qtdTransferidosAlunos');
            // $table->string('qtdRemanejadosAlunos');
            // $table->string('qtdCessadosAlunos');
            // $table->string('qtdReclassificadosAlunos');
            // $table->string('nrCapacidadeFisicaMaxAlunos');
            // $table->integer('vagas_limite')->nullable(true);
            // $table->string('nivel_ensino');
            // $table->string('periodo')->nullable(true);
            $table->string('observacao')->default("Sem observações.")->nullable();
            $table->timestamps();
            $table->softDeletes();

            

            // Schema::table('salas', function (Blueprint $table) {
            // $table->foreign('escola_id')->references('id')->on('escolas')->onUpdate('cascade')->onDelete('cascade');
            // });
            // SED
            // $table->string('codEscola');//*
            // $table->string('codUnidade');//*
            // $table->string('descNomeAbrevEscola');
            // $table->string('codTipoEnsino');//* (EJA - Infantil - Fundamental)
            // $table->string('descTipoEnsino');
            // $table->string('anoLetivo');//*
            // $table->string('numClasse'); 
            // $table->string('codSerieAno');//* dependendo do tipo de ensino
            // $table->string('turmaSed'); //*
            // $table->string('codTurno');//*
            // $table->string('descricaoTurno');//*
            // $table->string('codHabilitacao');
            // $table->string('codTipoClasse');
            // $table->string('numeroSala');//* dependendo do tipo de ensino
            // $table->string('horarioInicio');//*
            // $table->string('horarioFim');//*
            // $table->string('dataInicioAula');//*
            // $table->string('dataFimAula');//*
            // $table->string('codDuracao');//* (identificador_semestres)
            // $table->string('qtdAtual');
            // $table->string('qtdDigitados');
            // $table->string('qtdEvadidos');
            // $table->string('qtdNCom');
            // $table->string('qtdOutros');
            // $table->string('qtdTransferidos');
            // $table->string('qtdRemanejados');
            // $table->string('qtdCessados');
            // $table->string('qtdReclassificados');
            // $table->string('nrCapacidadeFisicaMax');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('salas');
    }
};
