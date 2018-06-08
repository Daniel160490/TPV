<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {

            $table->increments('idProductos')->unique();
            $table->integer('idCategorias')->nullable();
            $table->string('Nombre')->nullable();
            $table->text('Descripcion')->nullable();
            $table->string('Imagen')->nullable();
            $table->decimal('Precio')->nullable();
            $table->integer('Cantidad')->nullable();
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
