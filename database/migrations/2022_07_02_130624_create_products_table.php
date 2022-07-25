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
            $table->id();
            $table->string('model')->nullable();
            $table->string('ram')->nullable();
            $table->integer('ram_capacity')->nullable();
            $table->string('hdd')->nullable();
            $table->string('hdd_type')->nullable();
            $table->string('hdd_capacity')->nullable();
            $table->string('location')->nullable();
            $table->float('price')->default(0);
            $table->string('unit')->nullable();
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
