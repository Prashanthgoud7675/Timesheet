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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string(column: 'CustomerID');
            $table->string(column: 'CustomerName');
            $table->string(column: 'Gender');
            $table->string(column: 'Address');
            $table->string(column: 'City');
            $table->string(column: 'PostalCode');
            $table->string(column: 'Country');
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
        Schema::dropIfExists('customers');
    }
};
