<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('brands', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('user_who_created_id');
            $table->unsignedBigInteger('user_who_updated_id')->nullable();
            $table->unsignedBigInteger('user_who_deleted_id')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_who_created_id')->references('id')->on('users');
            $table->foreign('user_who_updated_id')->references('id')->on('users');
            $table->foreign('user_who_deleted_id')->references('id')->on('users');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('brands');
    }
};
