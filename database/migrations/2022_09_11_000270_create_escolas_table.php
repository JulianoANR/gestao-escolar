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
            $table->string('nome')->index();
            $table->string('email')->nullable();
            $table->integer('cie')->unique()->index();

            // $table->string('cep');
            // $table->string('endereco');
            // $table->string('numero');
            // $table->string('bairro');
			// $table->string('complemento');
            // $table->string('regiao');
            $table->string('tipoLogradouro');
			$table->string('descEndereco');
			$table->string('numeroSed');
			$table->string('descBairro');
			$table->string('descComplemento');
			$table->string('codMunicipio');
			$table->string('descMunicipio');
			$table->string('latitude');
			$table->string('longitude');

            $table->string('sed_cod_escola')->index();
            $table->string('observacao')->nullable();
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
