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
        Schema::create('emp_employee_earnings_deductions', function (Blueprint $table) {
            $table->id();
            $table->string('Earning1')->nullable();
            $table->string('Type1')->nullable();
            $table->string('Hours1');
            $table->string('Earning2')->nullable();            
            $table->string('Type2')->nullable();
            $table->string('Hours2');
            $table->string('Earning3')->nullable();            
            $table->string('Type3')->nullable();
            $table->string('Hours3');
            $table->string('Deduction')->nullable();
            $table->string('Type')->nullable();
            $table->string('Dollar');            
            $table->string('Does this deduction have a goal amount')->nullable();
            $table->string('Payment method for this deduction')->nullable();
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
        Schema::dropIfExists('emp_employee_earnings_deductions');
    }
};
