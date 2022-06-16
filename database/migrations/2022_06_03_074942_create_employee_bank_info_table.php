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
        Schema::create('emp_employee_bank_info', function (Blueprint $table) {
            $table->id();
            $table->string('Account_type');
            $table->string('Routing_number');            
            $table->string('Confirm_routing_number');
            $table->string('Bank_name');
            $table->string('Account_number');            
            $table->string('Confirm_account_num');
            $table->string('Deposit_distribution');
            $table->string('Amount');
            $table->string('Account_nickname');
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
        Schema::dropIfExists('emp_employee_bank_info');
    }
};
