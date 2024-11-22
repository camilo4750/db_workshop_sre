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
        DB::table('job_positions')->insert([
            ['name' => 'Técnico Mecánico Automotriz'],
            ['name' => 'Auxiliar de Taller Automotriz'],
            ['name' => 'Técnico en Mantenimiento de Radiadores'],
            ['name' => 'Jefe de Taller o Supervisor Automotriz'],
            ['name' => 'Cajero'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('job_positions')
            ->whereIn('name', [
                'Técnico Mecánico Automotriz',
                'Auxiliar de Taller Automotriz',
                'Técnico en Mantenimiento de Radiadores',
                'Jefe de Taller o Supervisor Automotriz',
                'Cajero'
            ])
            ->delete();
    }
};
