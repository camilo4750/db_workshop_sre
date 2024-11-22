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
        Schema::create('employee_benefits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->nullable()->constrained('employees')->nullOnDelete();
            $table->foreignId('benefit_type_id')->nullable()->constrained('benefit_types')->nullOnDelete();
            $table->date('period_start');
            $table->date('period_end');
            $table->decimal('amount',8,2)->default(0);
            $table->dateTime('payment_date')->nullable();
            $table->string('observation')->nullable();
            $table->foreignId('benefit_status_id')->nullable()->constrained('benefits_status')->nullOnDelete();
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
        Schema::dropIfExists(table: 'employee_benefits');
    }
};
