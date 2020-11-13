<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFarmersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farmers', function (Blueprint $table) {
            $table->id();
            $table->string('nic',12)->unique();
            $table->date('birthday')->nullable();
            $table->string('name',150);
            $table->string('business_name',50)->nullable();
            $table->string('about')->nullable(); 
            $table->unsignedTinyInteger('asc_id');
            $table->unsignedInteger('gs_id');
            $table->string('telephone_1',15);
            $table->string('telephone_2',15)->nullable();
            $table->string('email',100)->nullable();
            $table->string('address')->nullable();

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
        Schema::dropIfExists('farmers');
    }
}
