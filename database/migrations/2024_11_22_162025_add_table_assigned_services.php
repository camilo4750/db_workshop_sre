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
        Schema::create('assigned_services', function (Blueprint $table) {
            $table->id();
            $table->string('service_description');
            $table->foreignId('employee_id')->constrained('employees');
            $table->foreignId('billing_id')->constrained('billings');
            $table->foreignId('service_id')->constrained('services');
            $table->dateTime('service_tarts');
            $table->dateTime('service_ends')->nullable();
            $table->foreignId('service_status_id')->constrained('services_status');
            $table->string('observation')->nullable();
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
        Schema::dropIfExists('assigned_services');
    }
};
