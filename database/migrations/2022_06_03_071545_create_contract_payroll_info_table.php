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
        Schema::create('emp_contract_payroll_info', function (Blueprint $table) {
            $table->id();
            $table->string('Pay_type');
            $table->integer('Hourly_pay_rate');
            $table->string('Pay_schedule');
            $table->string('Department');
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
        Schema::dropIfExists('emp_contract_payroll_info');
    }
};
