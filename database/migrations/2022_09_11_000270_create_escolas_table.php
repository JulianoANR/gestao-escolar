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
            $table->id();
            $table->string('nome')->index();
            $table->string('sed_cod_escola')->nullable()->index();
            $table->integer('cie')->unique()->index();
            $table->string('email')->nullable();
            $table->string('telefone_1')->nullable();
            $table->string('telefone_2')->nullable();
            $table->enum('segmento', ['EMEI', 'EMEF', 'CEI', 'EMEI/EMEF']);
            
            $table->string('cep')->nullable();
			$table->string('endereco')->nullable();
			$table->string('numero')->nullable();
			$table->string('bairro')->nullable();
			$table->string('complemento')->nullable();
			$table->string('latitude')->nullable();
			$table->string('longitude')->nullable();

            $table->string('observacao')->nullable();
            $table->timestamps();

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
