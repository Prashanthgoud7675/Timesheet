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
        Schema::create('emp_contract_info', function (Blueprint $table) {
            $table->id();
            $table->string('Contractor_with_TIN');
            
            $table->string('Company_name');
            $table->string('Tax_identification_number');
            $table->string('Home_address');
           
            $table->string('Apt_Floor')->nullable();
            $table->string('City');
            $table->string('State');
            
            $table->string('Zip');
            $table->string('Phone_number')->nullable();
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
        Schema::dropIfExists('emp_contract_info');
    }
};
