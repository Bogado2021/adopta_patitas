<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMascotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mascotas', function (Blueprint $table) {
            $table->id();

            $table->string('animal');
            $table->string('sexo');
            $table->string('tamaño');
            $table->integer('edad')->nullable();
            $table->string('vacuna');
            $table->string('enfermedad');
            $table->string('esterilizado');
            $table->string('desparasitado');
            $table->string('descripcion');
            $table->string('foto');

            
            $table->string('rol')->nullable();
            $table->string('estado')->nullable();

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
        Schema::dropIfExists('mascotas');
    }
}
