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
        Schema::create('customer_finance_records', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('customer_id')->nullable();
            $table->string('payee_account_code')->nullable();
            $table->string('gl_code')->nullable();
            $table->string('tax_no')->nullable();
            $table->string('vat_no')->nullable();
            $table->string('incoterms')->nullable();
            $table->integer('credit_days')->default(0);
            $table->integer('payment_terms')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_finance_records');
    }
};
