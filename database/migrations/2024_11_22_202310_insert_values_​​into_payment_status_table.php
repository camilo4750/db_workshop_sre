<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table('payment_status')->insert([
            ['name' => 'Pago realizado'],
            ['name' => 'Pago en proceso'],
            ['name' => 'Pago cancelado'],
            ['name' => 'Pago pendiente'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('payment_status')
            ->whereIn('name', ['Pago realizado', 'Pago en proceso', 'Pago cancelado', 'Pago pendiente'])
            ->delete();
    }
};
