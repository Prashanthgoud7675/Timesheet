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
        Schema::create('bankforms', function (Blueprint $table) {
            $table->id();
            $table->string('accountholdername');
            $table->unsignedBigInteger('accountnumber');
            $table->string('ifsccode');
            $table->string('bankname');
            $table->string('branchname');
            $table->string('companyaccountholdername')->nullable();
            $table->unsignedBigInteger('companyaccountnumber')->nullable();
            $table->string('companyifsccode')->nullable();
            $table->string('companybankname')->nullable();
            $table->string('companybranchname')->nullable();
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
        Schema::dropIfExists('bankforms');
    }
};
