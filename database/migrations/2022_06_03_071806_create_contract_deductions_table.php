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
        Schema::create('emp_contract_deductions', function (Blueprint $table) {
            $table->id();
            $table->string('Deduction1')->nullable();
            $table->string('Type')->nullable();
            $table->string('Dollar');
            $table->string('Goal_amount')->nullable();
            $table->string('Payment_method')->nullable();
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
        Schema::dropIfExists('emp_contract_deductions');
    }
};
