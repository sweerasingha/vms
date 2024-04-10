<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('vehicle_request_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('vehicle_request_id')->constrained('vehicle_requests');
            $table->foreignId('vehicle_id')->constrained('vehicles');
            $table->integer('quantity');
            $table->string('status');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('vehicle_request_items');
    }
};
