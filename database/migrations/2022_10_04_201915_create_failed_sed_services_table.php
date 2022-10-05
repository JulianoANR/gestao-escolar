<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Query\Expression;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('failed_sed_services', function (Blueprint $table) {
            $table->id();
            $table->json('request')->default(new Expression('(JSON_ARRAY())'));
            $table->json('last_error_log')->default(new Expression('(JSON_ARRAY())'));
            // Marca o numero de tentativas, o sistema tentara executar 3 vezes, se não conseguir, uma notificação sera enviada ao suporte
            $table->integer('tries')->default(0);
            $table->ipAddress('user_ip')->nullable();
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
        Schema::dropIfExists('failed_sed_services');
    }
};
