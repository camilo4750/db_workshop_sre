<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('document_type');
            $table->integer('document_number');
            $table->string('address');
            $table->string('role');
            $table->boolean('active');
            $table->integer('user_who_created_id');
            $table->integer('user_who_updated_id');
            $table->integer('user_who_deleted_id');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
