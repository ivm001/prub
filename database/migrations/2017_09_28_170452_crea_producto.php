<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreaProducto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->increments('id');
            $table->string('descripcion');
            $table->float('precio');
            $table->integer('stock');

            $table->integer('genero_id')->unsigned();
            $table->foreign('genero_id')->references('id')->on('cat_generos');

            $table->integer('tipo_id')->unsigned();
            $table->foreign('tipo_id')->references('id')->on('cat_tipos');

            $table->integer('marca_id')->unsigned();
            $table->foreign('marca_id')->references('id')->on('cat_marcas');

            $table->integer('temporada_id')->unsigned();
            $table->foreign('temporada_id')->references('id')->on('cat_temporadas');

            $table->integer('talla_id')->unsigned();
            $table->foreign('talla_id')->references('id')->on('cat_tallas');

            $table->integer('beneficio_id')->unsigned();
            $table->foreign('beneficio_id')->references('id')->on('cat_beneficios');

            $table->integer('color_id')->unsigned();
            $table->foreign('color_id')->references('id')->on('cat_colores');

            $table->integer('ocasion_id')->unsigned();
            $table->foreign('ocasion_id')->references('id')->on('cat_ocasiones');

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
        Schema::dropIfExists('productos');

    }
}
