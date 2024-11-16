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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('full_name', 150);
            $table->foreignId('type_document_id')->constrained('types_documents');
            $table->string('document_number', 20)->unique();
            $table->foreignId('municipality_id')->constrained('municipalities');
            $table->string('address', 150);
            $table->string('telephone', 20);
            $table->foreignId('gender_id')->constrained('genders');
            $table->foreignId('job_position_id')->nullable()->constrained('job_positions')->nullOnDelete();
            $table->foreignId('eps_id')->constrained('eps');
            $table->foreignId('pension_fund_id')->constrained('pension_funds');
            $table->foreignId('arl_id')->constrained('arl');
            $table->foreignId('contract_type_id')->constrained('contract_types');
            $table->decimal('salary', 8,  2);
            $table->date('entry_date');
            $table->date('withdrawal_date')->nullable();
            $table->foreignId('bank_id')->constrained('banks');
            $table->string('bank_account_number', 70)->nullable();
            $table->string('emergency_contact', 200);
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
        Schema::dropIfExists('employees');
    }
};
