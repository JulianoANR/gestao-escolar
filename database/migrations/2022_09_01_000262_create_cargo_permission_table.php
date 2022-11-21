<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCargoPermissionTable extends Migration
{
    public function up()
    {
        Schema::create('cargo_permission', function (Blueprint $table) {
            $table->foreignId('cargo_id')->references('id')->on('cargos')->cascadeOnDelete();
            $table->foreignId('permission_id')->references('id')->on('permissions')->cascadeOnDelete();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cargo_permission');
    }
}
