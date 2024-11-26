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
        DB::table('payment_methods')->insert([
            ['name' => 'Efectivo'],
            ['name' => 'Tarjeta de Crédito'],
            ['name' => 'Tarjeta de Débito'],
            ['name' => 'Transferencia Bancaria'],
            ['name' => 'PSE'],
            ['name' => 'Pago por Cuenta de Terceros'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('payment_methods')
        ->whereIn('name', [
            'Efectivo',
            'Tarjeta de Crédito',
            'Tarjeta de Débito',
            'Transferencia Bancaria',
            'PSE',
            'Pago por Cuenta de Terceros',
        ])
        ->delete();
    }
};
