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
        DB::table('contract_types')->insert([
            ['name' => 'Contrato a Término Indefinido'],
            ['name' => 'Contrato a Término Fijo'],
            ['name' => 'Contrato por Obra o Labor Determinada'],
            ['name' => 'Contrato de Trabajo Temporal'],
            ['name' => 'Contrato de Aprendizaje'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('contract_types')
            ->whereIn('name', [
                'Contrato a Término Indefinido',
                'Contrato a Término Fijo',
                'Contrato por Obra o Labor Determinada',
                'Contrato de Trabajo Temporal',
                'Contrato de Aprendizaje',
            ])
            ->delete();
    }
};
