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
            $table->unsignedBigInteger('items_id');
            $table->unsignedBigInteger('farmer_id');
            $table->string('description')->nullable();
            $table->unsignedDecimal('qty',8,2);
            $table->unsignedDecimal('unit',8,2);
            $table->unsignedDecimal('unit_price',8,2)->nullable();
            $table->boolean('transport')->nullable();
            $table->boolean('organic')->nullable();
            $table->unsignedTinyInteger('asc_id');
            $table->unsignedTinyInteger('gs_id');
            $table->string('status', 12)->nullable();
            $table->unsignedBigInteger('user_id');  

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
