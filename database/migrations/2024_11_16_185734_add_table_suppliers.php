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
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->string('company_name', 150)->unique();
            $table->string('company_phone',20)->unique();
            $table->string('contact_information', 200)->unique();
            $table->string('nit', 20)->nullable()->unique();
            $table->string('address', 200)->nullable()->unique();
            $table->string('email', 150)->nullable()->unique();
            $table->foreignId('municipality_id')->constrained('municipalities');
            $table->foreignId('status_id')->nullable()->constrained('suppliers_status')->nullOnDelete();
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
        Schema::dropIfExists('suppliers');
    }
};
