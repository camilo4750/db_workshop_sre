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
        Schema::create('type_users', function (Blueprint $table) {
            $table->id();
            $table->string('type_user');
            $table->unsignedBigInteger('user_who_created_id')->nullable();
            $table->unsignedBigInteger('user_who_updated_id')->nullable();
            $table->unsignedBigInteger('user_who_deleted')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('type_users');
    }
};
