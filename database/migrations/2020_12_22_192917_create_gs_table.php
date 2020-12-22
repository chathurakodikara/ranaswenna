<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gs', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->unsignedTinyInteger('asc_id');
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
        Schema::dropIfExists('gs');
    }
}
