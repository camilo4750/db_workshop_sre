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
        Schema::create('employee_payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employe_id')->constrained('employees')->cascadeOnDelete();
            $table->date('start_period');
            $table->date('end_period');
            $table->foreignId('payment_method_id')->constrained('payment_methods');
            $table->decimal('payment',8,2)->default(0);
            $table->integer('overtime_total')->default(0);
            $table->decimal('overtime_payment',8,2)->nullable();
            $table->decimal('bonus',8,2)->nullable();
            $table->decimal('total_accrued',8,2)->nullable();
            $table->foreignId('payment_status_id')->nullable()->constrained('payment_status')->nullOnDelete();
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
        Schema::dropIfExists('employee_payments');
    }
};
