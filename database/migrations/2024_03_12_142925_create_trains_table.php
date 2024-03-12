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
            $table->string('rail_company', 100);
            $table->string('departure_station', 50);
            $table->string('arrival_station', 50);
            $table->time('departure_time')->nullable();
            $table->time('arrival_time')->nullable();
            $table->char('train_code', 6);
            $table->integer('carriage');
            $table->boolean('on_time')->default(1);
            $table->boolean('canceled')->default(1);
            $table->timestamps();
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
