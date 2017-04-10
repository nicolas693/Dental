<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('Paciente', function (Blueprint $table) {
          $table->String('rut')->primary();

          $table->String('Nombre')->length(15);
          $table->String('Paterno')->length(15);
          $table->String('Materno')->length(15);
          $table->String('Fecha_Ingreso')->length(10);
          $table->String('Genero')->length(6);
          $table->String('Fecha_Nacimiento')->length(10);
          $table->Integer('Telefono_Casa')->lenght(10);
          $table->Integer('Telefono_Movil')->lenght(10);
          $table->String('Calle')->length(25);
          $table->Integer('Numero_Calle')->lenght(4);
          $table->String('Pais')->length(15);
          $table->String('Region')->length(45);
          $table->String('Comuna')->length(15);
          $table->String('Cobertura_Medica')->length(30);
          $table->boolean('alta');
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
        Schema::dropIfExists('Paciente');
    }
}
