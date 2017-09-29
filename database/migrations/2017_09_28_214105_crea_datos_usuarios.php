<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreaDatosUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_usuarios', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->increments('id');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('razonsocial');
            $table->boolean('factura');
            $table->string('referenciadomicilio');
            $table->boolean('entrega');

            $table->integer('tipo_persona_id')->unsigned();
            $table->foreign('tipo_persona_id')->references('id')->on('cat_tipo_personas');

            $table->integer('usuario_id')->unsigned();
            $table->foreign('usuario_id')->references('id')->on('users');




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
        Schema::dropIfExists('datos_usuarios');
    }
}
