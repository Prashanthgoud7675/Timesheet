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
        Schema::create('emp_onboard', function (Blueprint $table) {
            $table->id();
            $table->string('First_Name');
            
            $table->string('Last_Name');
            $table->unsignedBigInteger('Social_Security_Number');
            $table->date('Hired_Date');
            $table->date('DOB');
            $table->unsignedBigInteger('Mobile_Num');
            $table->string('email')->unique();
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
        Schema::dropIfExists('emp_onboard');
    }
};
