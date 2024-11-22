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
        DB::table('eps')->insert([
            ['name' => 'EPS SURA', 'nit' => '890903938-8'],
            ['name' => 'Nueva EPS', 'nit' => '900191616-6'],
            ['name' => 'Sanitas', 'nit' => '860066942-8'],
            ['name' => 'Salud Total', 'nit' => '800251482-3'],
            ['name' => 'Coomeva EPS', 'nit' => '890903987-5'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('eps')
            ->whereIn('nit', ['890903938-8', '900191616-6', '860066942-8', '800251482-3', '890903987-5'])
            ->delete();
    }
};
