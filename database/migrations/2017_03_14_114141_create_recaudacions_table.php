<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecaudacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recaudacion', function (Blueprint $table) {
            $table->increments('id');
            $table->string('recibo',9)->unique();
            $table->string('servicio',3)->nullable();
            $table->mediumtext('descripcion')->nullable();
            $table->decimal('monto','9','3')->nullable();
            $table->date('fecha')->nullable();
            $table->string('codigo',6)->nullable();
            $table->string('nombrecliente',100)->nullable();
            $table->integer('idevaluacion')->nullable();

            $table->timestamps();
            $table->foreign('idevaluacion')->references('id')->on('evaluacion');
            $table->unique(['codigo','idevaluacion']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recaudacion');
    }
}
