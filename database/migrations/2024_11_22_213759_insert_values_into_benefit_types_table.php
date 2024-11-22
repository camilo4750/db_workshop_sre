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
        DB::table('benefit_types')->insert([
            ['name' => 'Pago de Vacaciones'],
            ['name' => 'Pago de Primas'],
            ['name' => 'Aguinaldo'],
            ['name' => 'Fondo de Pensiones'],
            ['name' => 'Fondo de Cesantías'],
            ['name' => 'Bonificación por Desempeño'],
            ['name' => 'Licencia por Maternidad / Paternidad'],
            ['name' => 'Bonificación por Antigüedad'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('benefit_types')
            ->whereIn('name', [
                'Pago de Vacaciones',
                'Pago de Primas',
                'Aguinaldo',
                'Fondo de Pensiones',
                'Fondo de Cesantías',
                'Bonificación por Desempeño',
                'Licencia por Maternidad / Paternidad',
                'Bonificación por Antigüedad',
            ])
            ->delete();
    }
};
