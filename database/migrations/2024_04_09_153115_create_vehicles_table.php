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

        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category')->nullable()->constrained('vehicle_categories');
            $table->string('vin')->nullable(); // Vehicle Identification Number
            $table->string('make')->nullable(); // Manufacturer of the vehicle
            $table->string('model')->nullable(); // Model of the vehicle
            $table->integer('year')->nullable(); // Year of manufacture
            $table->string('color')->nullable(); // Color of the vehicle
            $table->integer('mileage')->nullable(); // Mileage of the vehicle
            $table->decimal('engine_size')->nullable(); // Size of the engine
            $table->integer('horsepower')->nullable(); // Horsepower of the vehicle
            $table->string('fuel_type')->nullable(); // Type of fuel the vehicle uses
            $table->string('transmission')->nullable(); // Type of transmission in the vehicle
            $table->string('body_style')->nullable(); // Style of the vehicle body
            $table->integer('number_of_doors')->nullable(); // Number of doors on the vehicle
            $table->integer('number_of_seats')->nullable(); // Number of seats in the vehicle
            $table->decimal('weight')->nullable(); // Weight of the vehicle
            $table->decimal('height')->nullable(); // Height of the vehicle
            $table->decimal('length')->nullable(); // Length of the vehicle
            $table->decimal('width')->nullable(); // Width of the vehicle
            $table->integer('safety_rating')->nullable(); // Safety rating of the vehicle
            $table->bigInteger('image')->nullable(); // Image of the vehicle
            $table->softDeletes();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
