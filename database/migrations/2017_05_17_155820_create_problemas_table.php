<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProblemasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Problema', function (Blueprint $table) {
            $table->increments('Problema_id');
            $table->timestamps();

            $table->boolean('Lesion_de_caries_ICDAS_3_a_6')->default(false);
            $table->boolean('Lesion_de_caries_ICDAS_1_y_2')->default(false);
            $table->boolean('Ausente')->default(false);
            $table->boolean('Indicacion_exodoncia')->default(false);
            $table->boolean('Obturacion')->default(false);
            $table->boolean('Obturacion_con_caries')->default(false);
            $table->boolean('Obturacion_deficiente')->default(false);
            $table->boolean('Sellante')->default(false);
            $table->boolean('Problema_9')->default(false);
            $table->boolean('Problema_10')->default(false);
            $table->boolean('Problema_11')->default(false);
            $table->boolean('Problema_12')->default(false);
            $table->boolean('Problema_13')->default(false);
            $table->boolean('Problema_14')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Problema');
    }
}
