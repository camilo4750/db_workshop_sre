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
        DB::table('orders_status')->insert([
            ['name' => 'Creado'],
            ['name' => 'Confirmado'],
            ['name' => 'En tránsito'],
            ['name' => 'Entregado'],
            ['name' => 'Cancelado por el proveedor'],
            ['name' => 'Devuelto'],
            ['name' => 'Error en pedido'],
            ['name' => 'Completado'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('orders_status')
        ->whereIn('name', [
            'Creado',
            'Confirmado',
            'En tránsito',
            'Entregado',
            'Cancelado por el proveedor',
            'Devuelto',
            'Error en pedido',
            'Completado',
        ])
        ->delete();
    }
};
