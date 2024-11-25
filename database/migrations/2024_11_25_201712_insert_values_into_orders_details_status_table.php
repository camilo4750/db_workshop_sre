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
        DB::table('orders_details_status')->insert([
            ['name' => 'Entregado'],
            ['name' => 'Devuelto'],
            ['name' => 'Rechazado'],
            ['name' => 'En espera de reposición'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('orders_details_status')
        ->whereIn('name', [
            'Entregado',
            'Devuelto',
            'Rechazado',
            'En espera de reposición',
        ])
        ->delete();
    }
};
