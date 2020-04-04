<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->double('price');
            $table->integer('idBrand')->unsigned();
            $table->foreign('idBrand')->references('id')->on('brand')->onDelete('cascade');
            $table->integer('idEnergy')->unsigned();
            $table->foreign('idEnergy')->references('id')->on('energy')->onDelete('cascade');
            $table->double('sizeGlass');
            $table->string('glassMaterial');
            $table->integer('idStrap')->unsigned();
            $table->foreign('idStrap')->references('id')->on('straps')->onDelete('cascade');
            $table->double('resistance');
            $table->double('guarantee');
            $table->integer('idType')->unsigned();
            $table->foreign('idType')->references('id')->on('type')->onDelete('cascade');
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
        Schema::dropIfExists('products');
    }
}
