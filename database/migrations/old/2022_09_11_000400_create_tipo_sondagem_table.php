<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoSondagemTable extends Migration
{
    public function up()
    {
        Schema::create('tipo_sondagem', function (Blueprint $table) {
            $table->id();
            $table->string('descricao');
            $table->string('aspecto');
            $table->timestamps();
            $table->softDeletes();
        });
    }


    public function down()
    {
        Schema::dropIfExists('tipo_sondagem');
    }
}
/*
INSERT INTO `tipo_sondagem`(`id`, `descricao`, `aspecto`) VALUES ('1','Garatuja','escrita'),('2','Unigráfico','escrita'),('3','Intrafigural','escrita'),('4','Interfigural','escrita'),('5','Silábico sem valor sonoro','escrita'),('6','Silábico com valor sonoro','escrita'), ('7','Silábico Alfabético','escrita'),('8','Alfabético','escrita');
INSERT INTO `tipo_sondagem`(`id`, `descricao`, `aspecto`) VALUES ('9','Rabiscação ou garatuja desordenada','desenho'),('10','Garatuja ordenada','desenho'),('11','Pré esquema','desenho'),('12','Esquema','desenho'),('13','Realismo','desenho');
*/