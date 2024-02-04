<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('plate');
            $table->string('color');
            $table->string('plate');
            $table->string('year');
            $table->integer('customer_id');
            $table->integer('billing_id');
            $table->integer('brand_id');
            $table->integer('model_id');
            $table->integer('user_who_created_id');
            $table->integer('user_who_updated_id');
            $table->integer('user_who_deleted_id');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('vehicles', function (Blueprint $table) {
            $table->foreign('customer_id')
                ->references('id')->on('customers')
                ->onUpdate('RESTRICT')
                ->onDelete('CASCADE')
                ->deferrable()
                ->initiallyDeferred();

            $table->foreign('billing_id')
                ->references('id')->on('billings')
                ->onUpdate('RESTRICT')
                ->onDelete('CASCADE')
                ->deferrable()
                ->initiallyImmediate();

            $table->foreign('brand_id')
                ->references('id')->on('brands')
                ->onUpdate('RESTRICT')
                ->onDelete('CASCADE')
                ->deferrable()
                ->initiallyImmediate();

            $table->foreign('model_id')
                ->references('id')->on('models')
                ->onUpdate('RESTRICT')
                ->onDelete('CASCADE')
                ->deferrable()
                ->initiallyImmediate();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
