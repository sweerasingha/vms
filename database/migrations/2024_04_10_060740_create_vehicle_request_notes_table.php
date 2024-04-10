<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('vehicle_request_notes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('vehicle_request_id')->constrained('vehicle_requests');
            $table->text('note');
            $table->date('date');
            $table->string('requested_by');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('vehicle_request_notes');
    }
};
