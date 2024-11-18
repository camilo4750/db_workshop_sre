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
        Schema::create('orders_status', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('supplier_id')->constrained('suppliers')->cascadeOnDelete();
            $table->timestamp('order_date');
            $table->date('expected_delivery_date')->nullable();
            $table->foreignId('status_id')->nullable()->constrained('orders_status')->nullOnDelete();
            $table->decimal('total_amount', 8, 2)->nullable();
            $table->string('observations')->nullable();
            $table->foreignId('user_who_created_id')->nullable()->constrained('users')->nullOnDelete();
            $table->foreignId('user_who_updated_id')->nullable()->constrained('users')->nullOnDelete();
            $table->foreignId('user_who_deleted_id')->nullable()->constrained('users')->nullOnDelete();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders_status');
    }
};
