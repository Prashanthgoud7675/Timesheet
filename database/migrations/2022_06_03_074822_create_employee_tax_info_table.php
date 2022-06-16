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
        Schema::create('emp_employee_tax_info', function (Blueprint $table) {
            $table->id();
            $table->string('W-4');
            $table->string('Withholding_status');
            
            $table->string('Multiple_jobs');
            $table->string('Iam_dependents');
            $table->string('Other_income');
            
            $table->string('Deductions');
            $table->string('Extra_withholding');
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
        Schema::dropIfExists('emp_employee_tax_info');
    }
};
