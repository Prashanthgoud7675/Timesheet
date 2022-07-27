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
        Schema::create('timesheets', function (Blueprint $table) {
            $table->id();
            $table->string('empid')->nullable();
            $table->foreign('empid')->references('empid')->on('users')->onUpdate('cascade')->onDelete('cascade'); 
            $table->date('Date')->nullable();
            $table->string('Regular')->nullable();
            $table->string('Overtime')->nullable();
            $table->string('Sick')->nullable();
            $table->string('Vacation')->nullable();
            $table->string('Holiday')->nullable();
            $table->string('Unpaid')->nullable();
            $table->string('other')->nullable();
            $table->string('Total')->nullable();

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
        Schema::dropIfExists('timesheets');
    }
};
