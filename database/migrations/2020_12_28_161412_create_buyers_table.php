<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuyersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buyers', function (Blueprint $table) {
            $table->id();
            $table->string('business',150);
            $table->string('registration_no',15);
            $table->string('type',25)->nullable();
            $table->string('telephone',15)->nullable();
            $table->string('description',250)->nullable();
            $table->string('address',250);
            $table->string('title',12);
            $table->string('contacted_person',150);
            $table->string('mobile_1',15);
            $table->string('mobile_2',15)->nullable();
            $table->string('fax',20)->nullable();
            $table->string('email',100)->nullable();

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
        Schema::dropIfExists('buyers');
    }
}
