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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('rg');
            $table->integer('digito')->nullable(true);
            $table->string('cpf');
            $table->string('matricula')->unique();
            $table->date('data_nascimento');
            $table->string('email')->unique();
            $table->foreignId('cargo_id')->references('id')->on('cargos')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreignId('escola_id')->references('id')->on('escolas')->onUpdate('cascade')->onDelete('cascade');            $table->timestamp('email_verified_at')->nullable(true);
            // $table->boolean('autoload_graphic')->default(true); //Desabilita carregamento dos graficos na dashboard
            $table->string('profile_path_image')->nullable(true);
            $table->string('password');
            $table->string('observacao')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });

        // Schema::table('users', function (Blueprint $table) {
        // });
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
