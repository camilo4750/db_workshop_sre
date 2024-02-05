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
            $table->string('business_name');
            $table->integer('nit');
            $table->string('representative');
            $table->integer('phone');
            $table->string('address');
            $table->string('email');
            $table->date('date');
            $table->boolean('state');
            $table->unsignedBigInteger('user_who_created_id');
            $table->unsignedBigInteger('user_who_updated_id')->nullable();
            $table->unsignedBigInteger('user_who_deleted_id')->nullable();
            $table->timestamps();
            $table->softDeletes();

            // Foreign keys
            $table->foreign('user_who_created_id')->references('id')->on('users');
            $table->foreign('user_who_updated_id')->references('id')->on('users');
            $table->foreign('user_who_deleted_id')->references('id')->on('users');
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
