<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->nullable()->constrained('orders')->nullOnDelete();
            $table->string('name', 250);
            $table->integer('quantity');
            $table->decimal('unit_price', 8, 2)->default(0);
            $table->decimal('total_price', 8, 2)->default(0);
            $table->foreignId('order_details_status_id')->nullable()->constrained('orders_details_status')->nullOnDelete();
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
        Schema::dropIfExists('orders_details');
    }
};
