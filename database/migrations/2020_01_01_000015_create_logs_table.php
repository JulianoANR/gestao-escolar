<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogsTable extends Migration {
    public function up() {
        Schema::create('logs', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user')->unsigned();
            $table->string('user_cargo');
            $table->string('acao');
            $table->string('objeto');
            $table->integer('id_objeto');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('logs');
    }
}
