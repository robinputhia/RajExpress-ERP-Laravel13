<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration {
    public function up(): void {
        if (!Schema::hasTable('orders')) {
            Schema::create('orders', function (Blueprint $table) {
                $table->id(); $table->string('invoice_no')->unique(); $table->string('customer_name')->nullable();
                $table->string('customer_phone')->nullable()->index(); $table->text('address')->nullable();
                $table->decimal('subtotal',12,2)->default(0); $table->decimal('delivery_charge',12,2)->default(0);
                $table->decimal('discount',12,2)->default(0); $table->decimal('total',12,2)->default(0);
                $table->string('status')->default('pending'); $table->string('payment_status')->default('unpaid');
                $table->string('courier_name')->nullable(); $table->string('tracking_code')->nullable();
                $table->text('notes')->nullable(); $table->timestamps();
            });
        }
    }
    public function down(): void { Schema::dropIfExists('orders'); }
};
