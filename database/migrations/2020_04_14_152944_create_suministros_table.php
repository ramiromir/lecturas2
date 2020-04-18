<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuministrosTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('suministros', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('nus');
            $table->string('nombre');
            $table->string('seriemedidor');
            $table->string('municipio');
            $table->string('area');
            $table->string('direccion');
            $table->string('categoria');
            $table->bigInteger('lecturaprevista');
            $table->bigInteger('kwhpromedio');
            $table->bigInteger('kwhmesanterior');
            $table->bigInteger('lecturaanterior');
            $table->decimal('multiplicador');
            $table->decimal('xlongitud');
            $table->decimal('ylatitud');
            $table->bigInteger('cuenta');
            $table->bigInteger('lecturaprevsivoltea');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('suministros');
    }

}
