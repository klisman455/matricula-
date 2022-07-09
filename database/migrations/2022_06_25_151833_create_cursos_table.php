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
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_curso');
            $table->string('ciclo');
            $table->integer('creditos');
            $table->integer('cantidad_alumnos');
            $table->string('horario');
            $table->foreignId("id_profesor")->constrained("profesors");
            $table->foreignId("id_mallacurricular")->constrained("malla_curriculars");
            $table->foreignId("id_carrera")->constrained("Carreras");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cursos');
    }
};
