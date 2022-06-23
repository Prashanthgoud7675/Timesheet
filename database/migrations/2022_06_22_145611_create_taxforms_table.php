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
        Schema::create('taxforms', function (Blueprint $table) {
            $table->id();
            $table->string('pension');
            $table->string('newpension');
            $table->string('nsc');
            $table->string('ppf');
            $table->string('infrastructurebond');
            $table->string('childreneducation');
            $table->string('houseloan');
            $table->string('insurancepremium');
            $table->string('others');
            $table->string('epfvoluntarypf');
            $table->string('medicalinsuranceself');
            $table->string('medicalinsuranceparents');
            $table->string('medicalfordisable');
            $table->string('medicalexpenditure');
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
        Schema::dropIfExists('taxforms');
    }
};
