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
        DB::table('employees_status')->insert([
            ['name' => 'Contratado - Activo'],
            ['name' => 'Despedido'],
            ['name' => 'Renuncia'],
            ['name' => 'Aprobado para Retiro'],
            ['name' => 'Proyecto Terminado'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('employees_status')
            ->whereIn('name', [
                'Contratado - Activo',
                'Despedido',
                'Renuncia',
                'Aprobado para Retiro',
                'Proyecto Terminado',
            ])
            ->delete();
    }
};
