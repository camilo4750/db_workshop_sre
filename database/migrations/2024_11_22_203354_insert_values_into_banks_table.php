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
        DB::table('banks')->insert([
            ['name' => 'Bancolombia', 'bank_code' => '007'],
            ['name' => 'Banco de Bogotá', 'bank_code' => '001'],
            ['name' => 'Davivienda', 'bank_code' => '051'],
            ['name' => 'Banco de Occidente', 'bank_code' => '023'],
            ['name' => 'BBVA Colombia', 'bank_code' => '031'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('banks')
            ->whereIn('bank_code', ['007', '001', '051', '023', '031'])
            ->delete();
    }
};
