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
        DB::table('arl')->insert([
            ['name' => 'ARL SURA', 'nit' => '890903830-4'],
            ['name' => 'ARL Colpatria', 'nit' => '860066942-5'],
            ['name' => 'ARL Positiva', 'nit' => '900330961-9'],
            ['name' => 'ARL Bolívar', 'nit' => '890900223-6'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('arl')
            ->whereIn('nit', ['890903830-4', '860066942-5', '900330961-9', '890900223-6'])
            ->delete();
    }
};
