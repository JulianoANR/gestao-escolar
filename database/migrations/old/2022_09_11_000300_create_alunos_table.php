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
        Schema::create('alunos', function (Blueprint $table) {
            $table->id();
            $table->string('cpf');
            $table->string('ra');
            $table->string('digito');
            $table->string('nome');
            $table->string('situacao');
            $table->foreignId('escola_id')->references('id')->on('escolas')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('sala_id')->references('id')->on('salas')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('num_chamada');
            $table->string('dt_nascimento');
            $table->date('dt_matricula');
            $table->string('cor_raca');//*
            $table->string('sangue')->default('Não informado');
            $table->string('religiao')->nullable(true);
            $table->string('sexo')->nullable(true);
            $table->boolean('deficiencia')->nullable();
            $table->string('cod_necessidade');
            $table->string('observacao')->nullable();
            $table->timestamps();
            $table->softDeletes();
    //SED
    //DADOS PESSOAIS
        // $table->string('nomeAluno');//*
        // $table->string('nomeMae');//*
        // $table->string('nomePai');
        // $table->string('nomeSocial');
        // $table->string('nomeAfetivo');
        // $table->date('dataNascimento');//*
        // $table->string('corRaca');//*
        // $table->string('sexo');//*
        // $table->string('bolsaFamilia');
        // $table->string('quilombola') ;
        // $table->string('possuiInternet');//*
        // $table->string('possuiNotebookSmartphoneTablet');//*
        // $table->string('tipoSanguineo');
        // $table->string('doadorOrgaos') ;
        // $table->string('numeroCNS') ;
        // $table->string('email') ;
        // $table->string('nacionalidade') ;//*
        // $table->string('nomeMunNascto') ;//* quando nacionalidade igual a 1
        // $table->string('uFMunNascto') ;//* quando nacionalidade igual a 1
        // $table->string('codMunNasctoDNE') ;
        // $table->date('dataEntradaPais') ;//* quando nacionalidade igual a 2
        // $table->string('codPaisOrigem') ;//*
        // $table->string('paisOrigem') ;//*
    //DOCUMENTOS
        // $table->string('numDoctoCivil');
        // $table->string('digitoDoctoCivil');
        // $table->string('uFDoctoCivil');
        // $table->string('dataEmissaoDoctoCivil');
        // $table->string('dataEmissaoCertidaoDoc');
        // $table->string('numNIS');
        // $table->string('codINEP');
        // $table->string('cpf');
        // $table->string('justificativaDocumentos');
    //CERTIDAO NOVA
        // $table->string('certMatr01');//* quando informado
        // $table->string('certMatr02');//*
        // $table->string('certMatr03');//*
        // $table->string('certMatr04');//*
        // $table->string('certMatr05');//*
        // $table->string('certMatr06');//*
        // $table->string('certMatr07');//*
        // $table->string('certMatr08');//*
        // $table->string('certMatr09');//*
        // $table->string('dataEmissaoCertidaoNova');//*
    //CERTIDAO ANTIGA
        // $table->string('numCertidao'); //* quando informado
        // $table->string('livro');
        // $table->string('folha');
        // $table->string('distribuicaoCertidao');
        // $table->string('municipioComarca');
        // $table->string('uFComcarca');
        // $table->string('dataEmissaoCertidaoAntiga');
    //ENDERECO RESIDENCIAL
        // $table->string('logradouro'); //*
        // $table->string('numeroRes');//*
        // $table->string('bairro');//*
        // $table->string('nomeCidade');//*
        // $table->string('uFCidade');//*
        // $table->string('complementoRes');
        // $table->string('cep');//*
        // $table->string('areaLogradouro');//*
        // $table->string('codLocalizacaoDiferenciada');
        // $table->string('codMunicipioDNE');
        // $table->string('latitude');//*
        // $table->string('longitude');//*
    //ENDERECO INDICATIVO
        // $table->string('logradouro');
        // $table->string('numeroInd');
        // $table->string('bairro');
        // $table->string('nomeCidade');
        // $table->string('uFCidade');
        // $table->string('latitude');
        // $table->string('longitude');
        // $table->string('cep');
    //TELEFONES
        // $table->string('dddNumero');
        // $table->string('numero');
        // $table->string('tipoTelefone');
        // $table->string('descTipoTelefone');
        // $table->string('sms');
        // $table->string('complementoTel');
    //DEFICENCIA
        // $table->string('codNecessidade');
        // $table->string('mobilidadeReduzida');
        // $table->string('tipoMobilidadeReduzida');
        // $table->string('cuidador');
        // $table->string('tipoCuidador');
        // $table->string('profSaude');
        // $table->string('tipoProfSaude');
    //RECURSO AVALIACAO
        // $table->string('guiaInterprete');
        // $table->string('interpreteLibras');
        // $table->string('leituraLabial');
        // $table->string('nenhum');
        // $table->string('provaAmpliada');
        // $table->string('tamanhoFonte');
        // $table->string('provaBraile');
        // $table->string('auxilioTranscricao');
        // $table->string('auxilioLeitor');
        // $table->string('arovaVideoLibras');
        // $table->string('cdAudioDefVisual');
        // $table->string('provaLinguaPortuguesa');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
