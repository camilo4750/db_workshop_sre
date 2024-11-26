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
        DB::table('billing_status')->insert([
            ['name' => 'Pagada'],
            ['name' => 'Pendiente de Pago'],
            ['name' => 'Vencida'],
            ['name' => 'Cancelada'],
            ['name' => 'En Proceso de Revisión'],
            ['name' => 'Reembolsada'],
            ['name' => 'Error de Generación'],
            ['name' => 'Duplicada'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('billing_status')
            ->whereIn('name', [
                'Pagada',
                'Pendiente de Pago',
                'Vencida',
                'Cancelada',
                'En Proceso de Revisión',
                'Reembolsada',
                'Error de Generación',
                'Duplicada',
            ])
            ->delete();
    }
};
