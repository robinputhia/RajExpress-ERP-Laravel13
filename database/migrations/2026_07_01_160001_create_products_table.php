<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration {
    public function up(): void {
        if (!Schema::hasTable('products')) {
            Schema::create('products', function (Blueprint $table) {
                $table->id(); $table->string('name'); $table->string('slug')->unique();
                $table->string('sku')->nullable()->index(); $table->decimal('price',12,2)->default(0);
                $table->decimal('offer_price',12,2)->nullable(); $table->integer('stock')->default(0);
                $table->string('plant_age')->nullable(); $table->string('plant_height')->nullable();
                $table->string('pot_size')->nullable(); $table->string('fruiting_time')->nullable();
                $table->string('origin_country')->nullable(); $table->text('description')->nullable();
                $table->string('status')->default('active'); $table->timestamps();
            });
        }
    }
    public function down(): void { Schema::dropIfExists('products'); }
};
