<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostulantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postulante', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idevaluacion')->nullable();
            $table->string('codigo',6)->nullable();
            $table->string('paterno',50)->nullable();
            $table->string('materno',50)->nullable();
            $table->string('nombres',50)->nullable();
            $table->string('dni',20)->nullable();
            $table->string('telefono',30)->nullable();
            $table->string('email',100)->nullable();
            $table->string('foto',100)->default('avatar/nofoto.jpg');
            $table->integer('idsexo')->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->boolean('pago')->nullable();
            $table->boolean('anulado')->nullable();
            $table->integer('idusuario')->nullable();
            $table->integer('idgrado')->nullable();
            $table->timestamps();
            $table->foreign('idevaluacion')->references('id')->on('evaluacion');
            $table->foreign('idusuario')->references('id')->on('users');
            $table->foreign('idsexo')->references('id')->on('catalogo');
            $table->foreign('idgrado')->references('id')->on('catalogo');
            $table->unique(['idevaluacion','codigo']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('postulante');
    }
}
