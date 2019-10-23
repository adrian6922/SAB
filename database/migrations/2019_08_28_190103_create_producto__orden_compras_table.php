<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductoOrdenComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto__orden_compras', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('id_orden');
            $table->string('sku');
            $table->string('descripcion');
            $table->string('cantidad');
            $table->string('precio_unitario');
            $table->string('total_unitario');
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
        Schema::dropIfExists('producto__orden_compras');
    }
}
