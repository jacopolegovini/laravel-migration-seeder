<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string("company", 255);
            $table->string("depature_station", 255);
            $table->string("arrival_station", 255);
            $table->time("departure_time", $precision = 0);
            $table->time("arrival_time", $precision = 0);
            $table->string("train_code", 5);
            $table->smallInteger("carriage");
            $table->boolean("on_time");
            $table->boolean("cancelled");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
