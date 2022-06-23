<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employeeforms', function (Blueprint $table) {
            $table->id();
            $table->string('first');
            $table->string('last');
            $table->string('father');
            $table->date('dob');
            $table->string('gender');
            $table->string('aadhar');
            $table->string('pan');
            $table->string('flatno');
            $table->string('locality');
            $table->string('city');
            $table->string('state');
            $table->string('pincode');
            $table->string('building');
            $table->string('area');
            $table->string('currentcity');
            $table->string('currentstate');
            $table->string('currentpincode');
            $table->string('mobile');
            $table->string('alternate');
            $table->string('email');
 
         

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
        Schema::dropIfExists('employeeforms');
    }
};
