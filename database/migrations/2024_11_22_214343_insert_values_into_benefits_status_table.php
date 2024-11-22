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
        DB::table('benefits_status')->insert([
            ['name' => 'Pago Realizado'],
            ['name' => 'Pendiente'],
            ['name' => 'En Proceso'],
            ['name' => 'Aprobado'],
            ['name' => 'Rechazado'],
            ['name' => 'Cancelado'],
            ['name' => 'Esperando Autorización'],
            ['name' => 'En Revisión'],
            ['name' => 'Requiere Ajuste'],
            ['name' => 'Faltan Datos'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('benefits_status')
            ->whereIn('name', [
                'Pago Realizado',
                'Pendiente',
                'En Proceso',
                'Aprobado',
                'Rechazado',
                'Cancelado',
                'Esperando Autorización',
                'En Revisión',
                'Requiere Ajuste',
                'Faltan Datos',
            ])
            ->delete();
    }
};
