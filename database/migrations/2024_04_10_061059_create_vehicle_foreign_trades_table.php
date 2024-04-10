<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('vehicle_foreign_trades', function (Blueprint $table) {
            $table->id();
            $table->foreignId('vehicle_id')->constrained('vehicles');
            $table->boolean('import_export_flag');
            $table->foreignId('custom_duty_id')->constrained('vehicle_foreign_trade_custom_duties');
            $table->foreignId('test_report_id')->constrained('vehicle_foreign_trade_test_reports');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('vehicle_foreign_trades');
    }
};
