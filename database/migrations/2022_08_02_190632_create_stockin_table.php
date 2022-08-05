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
        Schema::create('stockin', function (Blueprint $table) {
            $table->id();
            $table->string('M_ID');
            $table->string('M_name');
            $table->date('S_date');
            $table->integer('S_in');
            $table->string('S_unit_count');
            $table->integer('S_cost');
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
        Schema::dropIfExists('stockin');
    }
};
