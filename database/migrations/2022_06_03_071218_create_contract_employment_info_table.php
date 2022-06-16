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
        Schema::create('emp_contract_employment_info', function (Blueprint $table) {
            $table->id();
            $table->string('Work_phone')->nullable();
            $table->string('Ext')->nullable();
            $table->string('Work_email')->unique();
            $table->date('Hire_date');
            $table->string('Status')->nullable();
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
        Schema::dropIfExists('emp_contract_employment_info');
    }
};
