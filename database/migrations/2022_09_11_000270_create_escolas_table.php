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
        Schema::create('escolas', function (Blueprint $table) {
            // Gestao
            $table->id();
            $table->string('cod_escola');
            $table->string('nome');
            $table->string('email');
            $table->integer('cie')->unique();
            $table->foreignId('tipo_ensino_id')->references('id')->on('tipo_ensinos')->onUpdate('cascade')->onDelete('cascade');
            $table->string('cep');
            $table->string('endereco');
            $table->string('numero');
            $table->string('bairro');
			$table->string('complemento');
			$table->string('cod_municipio');
			$table->string('desc_municipio');
            $table->string('regiao');
            $table->string('telefone');
			$table->string('cod_diretoria');
			$table->string('desc_nom_diretoria');
            $table->string('observacao')->default("Sem observações.")->nullable(true);
            $table->timestamps();
            $table->softDeletes();

            // SED
            // $table->string('codEscola');
			// $table->string('descNomeEscola');
			// $table->string('codDiretoria');
			// $table->string('descNomeDiretoria');
			// $table->string('tipoLogradouro');
			// $table->string('descEndereco');
			// $table->string('numeroSed');
			// $table->string('descBairro');
			// $table->string('descComplemento');
			// $table->string('codMunicipio');
			// $table->string('descMunicipio');
			// $table->string('latitude');
			// $table->string('longitude');
			// $table->string('codRedeEnsino');
			// $table->string('nomeRedeEnsino');
			// $table->string('codDistrito');
			// $table->string('cepSed');
			// $table->string('nomeDistrito');
            // $table->string('codUnidade');
            // $table->string('descNomeUnidade');
            // $table->string('ddd');
            // $table->string('telefoneSed');
            // $table->string('numSalas');
            // $table->timestamps();
            // $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('escolas');
    }
};
