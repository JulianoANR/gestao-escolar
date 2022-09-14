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
        Schema::create('sed_access_token', function (Blueprint $table) {
            Schema::create('sed_access_token', function (Blueprint $table) {
                $table->id();
                $table->string('sistema', 255);
                $table->string('token', 500);
                $table->timestamps();
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sed_access_token');
    }
};
