<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsumoproductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consumoproductos', function (Blueprint $table) {
            $table->id();

            $table->integer('producto_id');
            //del producto id trae el precio
            $table->integer('cantidad');
            $table->integer('impuesto');
            $table->integer('sobrecargo');
            $table->integer('total');
            $table->string('forma_pago');
            $table->string('provincia');
            $table->string('localidad');
            $table->string('direccion');

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
        Schema::dropIfExists('consumoproductos');
    }
}
