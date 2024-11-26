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
        DB::table('customers_status')->insert([
            ['name' => 'Nuevo'],
            ['name' => 'Activo'],
            ['name' => 'Inactivo'],
            ['name' => 'Suspendido'],
            ['name' => 'Deudor'],
            ['name' => 'Reactivado'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('customers_status')
        ->whereIn('name', [
            'Nuevo',
            'Activo',
            'Inactivo',
            'Suspendido',
            'Deudor',
            'Reactivado',
        ])
        ->delete();
    }
};
