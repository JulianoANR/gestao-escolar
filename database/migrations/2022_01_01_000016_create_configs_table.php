<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfigsTable extends Migration {
    public function up() {
        Schema::create('configs', function (Blueprint $table) {
            $table->id();
            $table->string('descricao');
            $table->boolean('status')->dafault(false);
            $table->string('escopo')->nullable(true);
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('configs');
    }
}
