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
        Schema::create('welcome', function (Blueprint $table) {
            $table->id();
            $table->string('first');
            $table->string('last');
            $table->string('father');
            $table->string('dob');
            $table->string('gender');
            $table->string('aadhar');
            $table->string('pan');
            $table->string('flat');
            $table->string('locality');
            $table->string('city');
            $table->string('state');
            $table->string('pincode');
            $table->string('building');
            $table->string('area');
            $table->string('cc');
            $table->string('cs');
            $table->string('cp');
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
        Schema::dropIfExists('welcome');
    }
};
