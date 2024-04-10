<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('vehicle_costings', function (Blueprint $table) {
            $table->id();
            $table->decimal('purchase_price', 10, 2);
            $table->decimal('maintenance_cost', 10, 2);
            $table->decimal('depreciation', 10, 2);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('vehicle_costings');
    }
};
