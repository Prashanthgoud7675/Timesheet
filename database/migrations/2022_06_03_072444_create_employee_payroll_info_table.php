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
        Schema::create('emp_employee_payroll_info', function (Blueprint $table) {
            $table->id();
            $table->string('Pay_type');
            
            $table->string('Basis_of_pay')->nullable();
            $table->string('Pay schedule');
            $table->date('Standard hours per pay period')->nullable();
           
            $table->string('Employment_type')->nullable();
            $table->string('Seasonal_employee')->nullable();
            $table->string('Hourly_pay_rate');
            $table->string('Department');
            
            $table->string('State')->nullable();
            $table->string('Classification_code');
            $table->string('Employee_type');
            
            $table->string('Employee_excluded_from_workers_company')->nullable();
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
        Schema::dropIfExists('emp_employee_payroll_info');
    }
};
