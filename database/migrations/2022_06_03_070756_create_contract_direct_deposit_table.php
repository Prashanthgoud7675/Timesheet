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
        Schema::create('emp_contract_direct_deposit', function (Blueprint $table) {
            $table->id();
            $table->string('Account_type');
            
            $table->unsignedBigInteger('Routing_number');
            $table->string('Bank_name');
            $table->unsignedBigInteger('Account_number');
            $table->string('Deposit_distribution');
            $table->unsignedBigInteger('Amount');
            $table->string('Account_nickname')->nullable();
            
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
        Schema::dropIfExists('emp_contract_direct_deposit');
    }
};
