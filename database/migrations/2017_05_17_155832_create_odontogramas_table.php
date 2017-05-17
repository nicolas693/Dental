<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOdontogramasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('odontogramas', function (Blueprint $table) {
            $table->increments('Odontograma_id');
            $table->timestamps();


           $table->Integer('pieza18')->nullable()->unsigned();
           $table->Integer('pieza17')->nullable()->unsigned();
           $table->Integer('pieza16')->nullable()->unsigned();
           $table->Integer('pieza15')->nullable()->unsigned();
           $table->Integer('pieza14')->nullable()->unsigned();
           $table->Integer('pieza13')->nullable()->unsigned();
           $table->Integer('pieza12')->nullable()->unsigned();
           $table->Integer('pieza11')->nullable()->unsigned();

           $table->Integer('pieza21')->nullable()->unsigned();
           $table->Integer('pieza22')->nullable()->unsigned();
           $table->Integer('pieza23')->nullable()->unsigned();
           $table->Integer('pieza24')->nullable()->unsigned();
           $table->Integer('pieza25')->nullable()->unsigned();
           $table->Integer('pieza26')->nullable()->unsigned();
           $table->Integer('pieza27')->nullable()->unsigned();
           $table->Integer('pieza28')->nullable()->unsigned();

           $table->Integer('pieza48')->nullable()->unsigned();
           $table->Integer('pieza47')->nullable()->unsigned();
           $table->Integer('pieza46')->nullable()->unsigned();
           $table->Integer('pieza45')->nullable()->unsigned();
           $table->Integer('pieza44')->nullable()->unsigned();
           $table->Integer('pieza43')->nullable()->unsigned();
           $table->Integer('pieza42')->nullable()->unsigned();
           $table->Integer('pieza41')->nullable()->unsigned();

           $table->Integer('pieza31')->nullable()->unsigned();
           $table->Integer('pieza32')->nullable()->unsigned();
           $table->Integer('pieza33')->nullable()->unsigned();
           $table->Integer('pieza34')->nullable()->unsigned();
           $table->Integer('pieza35')->nullable()->unsigned();
           $table->Integer('pieza36')->nullable()->unsigned();
           $table->Integer('pieza37')->nullable()->unsigned();
           $table->Integer('pieza38')->nullable()->unsigned();


          $table->foreign('pieza18')->references('Problema_id')->on('Problema');
          $table->foreign('pieza17')->references('Problema_id')->on('Problema');
          $table->foreign('pieza16')->references('Problema_id')->on('Problema');
          $table->foreign('pieza15')->references('Problema_id')->on('Problema');
          $table->foreign('pieza14')->references('Problema_id')->on('Problema');
          $table->foreign('pieza13')->references('Problema_id')->on('Problema');
          $table->foreign('pieza12')->references('Problema_id')->on('Problema');
          $table->foreign('pieza11')->references('Problema_id')->on('Problema');

          $table->foreign('pieza21')->references('Problema_id')->on('Problema');
          $table->foreign('pieza22')->references('Problema_id')->on('Problema');
          $table->foreign('pieza23')->references('Problema_id')->on('Problema');
          $table->foreign('pieza24')->references('Problema_id')->on('Problema');
          $table->foreign('pieza25')->references('Problema_id')->on('Problema');
          $table->foreign('pieza26')->references('Problema_id')->on('Problema');
          $table->foreign('pieza27')->references('Problema_id')->on('Problema');
          $table->foreign('pieza28')->references('Problema_id')->on('Problema');

          $table->foreign('pieza48')->references('Problema_id')->on('Problema');
          $table->foreign('pieza47')->references('Problema_id')->on('Problema');
          $table->foreign('pieza46')->references('Problema_id')->on('Problema');
          $table->foreign('pieza45')->references('Problema_id')->on('Problema');
          $table->foreign('pieza44')->references('Problema_id')->on('Problema');
          $table->foreign('pieza43')->references('Problema_id')->on('Problema');
          $table->foreign('pieza42')->references('Problema_id')->on('Problema');
          $table->foreign('pieza41')->references('Problema_id')->on('Problema');

          $table->foreign('pieza31')->references('Problema_id')->on('Problema');
          $table->foreign('pieza32')->references('Problema_id')->on('Problema');
          $table->foreign('pieza33')->references('Problema_id')->on('Problema');
          $table->foreign('pieza34')->references('Problema_id')->on('Problema');
          $table->foreign('pieza35')->references('Problema_id')->on('Problema');
          $table->foreign('pieza36')->references('Problema_id')->on('Problema');
          $table->foreign('pieza37')->references('Problema_id')->on('Problema');
          $table->foreign('pieza38')->references('Problema_id')->on('Problema');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('odontogramas');
    }
}
