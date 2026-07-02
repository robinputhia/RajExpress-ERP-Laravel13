<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration {
    public function up(): void {
        if (!Schema::hasTable('customers')) {
            Schema::create('customers', function (Blueprint $table) {
                $table->id(); $table->string('name')->nullable(); $table->string('phone')->index();
                $table->string('email')->nullable(); $table->string('district')->nullable();
                $table->string('upazila')->nullable(); $table->text('address')->nullable();
                $table->string('status')->default('active'); $table->text('notes')->nullable(); $table->timestamps();
            });
        }
    }
    public function down(): void { Schema::dropIfExists('customers'); }
};
