<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('billings', function (Blueprint $table) {
            $table->id();
            $table->string('labor');
            $table->date('start_date');
            $table->date('end_date');
            $table->json('spare_parts');
            $table->integer('customer_id');
            $table->integer('service_id');
            $table->integer('user_who_created_id');
            $table->integer('user_who_updated_id');
            $table->integer('user_who_deleted_id');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('billings', function (Blueprint $table) {
            $table->foreign('customer_id')
                ->references('id')->on('customers')
                ->onUpdate('RESTRICT')
                ->onDelete('CASCADE')
                ->deferrable()
                ->initiallyDeferred();

            $table->foreign('service_id')
                ->references('id')->on('services')
                ->onUpdate('RESTRICT')
                ->onDelete('CASCADE')
                ->deferrable()
                ->initiallyDeferred();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('billings');
    }
};
