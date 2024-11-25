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
        DB::table('services_status')->insert([
            ['name' => 'En Proceso'],
            ['name' => 'Pendiente'],
            ['name' => 'Asignado'],
            ['name' => 'Reprogramado'],
            ['name' => 'Finalizado'],
            ['name' => 'No Realizado'],
            ['name' => 'Completado con Observaciones'],
            ['name' => 'En Revisión'],
            ['name' => 'Esperando Insumos'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('services_status')
            ->whereIn('name', [
                'En Proceso',
                'Pendiente',
                'Asignado',
                'Reprogramado',
                'Finalizado',
                'No Realizado',
                'Completado con Observaciones',
                'En Revisión',
                'Esperando Insumos',
            ])
            ->delete();
    }
};
