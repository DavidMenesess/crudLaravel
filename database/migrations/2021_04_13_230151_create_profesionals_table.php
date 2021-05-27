<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfesionalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profesionals', function (Blueprint $table) {
            $table->id();

            $table->integer('NumDocumento');
            $table->string('Nombre',30);
            $table->string('Apellido',30);
            $table->string('Habilidades',255);
            $table->integer('Salario');
            $table->boolean('Disponible');

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
        Schema::dropIfExists('profesionals');
    }
}
