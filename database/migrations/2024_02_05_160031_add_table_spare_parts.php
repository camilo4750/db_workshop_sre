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
        Schema::create('spare_parts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('total');
            $table->date('admission_date');
            $table->date('warranty');
            $table->boolean('state');
            $table->unsignedBigInteger('supplier_id');
            $table->unsignedBigInteger('user_who_created_id');
            $table->unsignedBigInteger('user_who_updated_id')->nullable();
            $table->unsignedBigInteger('user_who_deleted_id')->nullable();
            $table->timestamps();
            $table->softDeletes();

            // Foreign keys
            $table->foreign('supplier_id')->references('id')
                ->on('suppliers')->onUpdate('RESTRICT')->onDelete('CASCADE');
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
        Schema::dropIfExists('spare_parts');
    }
};
