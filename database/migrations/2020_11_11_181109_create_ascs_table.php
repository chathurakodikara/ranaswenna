<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAscsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ascs', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->string('district',50); 
            $table->string('name',100)->unique();
            $table->string('name_si',100)->nullable();
            $table->string('name_ta',100)->nullable();
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
        Schema::dropIfExists('ascs');
    }
}
