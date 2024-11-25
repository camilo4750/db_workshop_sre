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
        DB::table('suppliers_status')->insert([
            ['name' => 'Activo'],
            ['name' => 'Inactivo'],
            ['name' => 'Suspendido'],
            ['name' => 'Bloqueado'],
            ['name' => 'Nuevo'],
            ['name' => 'Preferencial'],
            ['name' => 'Retirado'],
            ['name' => 'Reactivado'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('suppliers_status')
        ->whereIn('name', [
            'Activo',
            'Inactivo',
            'Suspendido',
            'Bloqueado',
            'Nuevo',
            'Preferencial',
            'Retirado',
            'Reactivado',
        ])
        ->delete();
    }
};
