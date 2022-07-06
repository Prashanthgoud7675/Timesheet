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
        Schema::create('timesheet', function (Blueprint $table) {
            $table->id();
            $table->date('date')->nullable;
            $table->string('Overtime')->nullable;
            $table->string('Sick')->nullable;
            $table->string('Vacation')->nullable;
            $table->string('Holiday')->nullable;
            $table->string('Unpaid')->nullable;
            $table->string('other')->nullable;
            $table->string('Total')->nullable;
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
        Schema::dropIfExists('timesheet');
    }
};