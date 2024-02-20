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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name_1');
            $table->string('name_2')->nullable();
            $table->string('surname_1');
            $table->string('surname_2')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('phone');
            $table->boolean('active');
            $table->unsignedBigInteger('type_user_id');
            $table->unsignedBigInteger('user_who_created_id')->nullable();
            $table->unsignedBigInteger('user_who_updated_id')->nullable();
            $table->unsignedBigInteger('user_who_deleted_id')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('type_user_id')->references('id')
                ->on('type_users')->onUpdate('RESTRICT')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
