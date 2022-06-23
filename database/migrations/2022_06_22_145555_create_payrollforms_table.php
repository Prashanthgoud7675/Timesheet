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
        Schema::create('payrollforms', function (Blueprint $table) {
            $table->id();
            $table->string('ctc');
            $table->string('uan');
            $table->string('basicsalary');
            $table->string('hra');
            $table->string('conveyance');
            $table->string('medicalallowance');
            $table->string('specialallowance');
            $table->string('professionaltax');
            $table->string('tds');
            $table->string('tdsonbonus');
            $table->string('foodvouchers');
            $table->string('epf');
            $table->string('loandeductions');
            $table->string('otherdeductions');
            $table->string('esi');
            $table->string('grosspay');
            $table->string('netpay');
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
        Schema::dropIfExists('payrollforms');
    }
};
