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
        Schema::create('emp_employee_personal_info', function (Blueprint $table) {
            $table->id();
            $table->string('First_name');
            
            $table->string('Middle_initial')->nullable();
            $table->string('Last_name');
            $table->string('Preffered')->nullable();
           
            $table->string('Social_security_number');
            $table->string('Gender');
            $table->date('Date_of_birth');
            
            $table->string('Home_address');
            $table->string('Apt_suite_floor')->nullable();
            $table->string('City');
           
            $table->string('state');
            $table->string('Zip');
            $table->unsignedbiginteger('Phone_num');
            $table->string('Additional_phone_num')->nullable();
            
            $table->string('Email')->unique();
            
           
           
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
        Schema::dropIfExists('emp_employee_personal_info');
    }
};
