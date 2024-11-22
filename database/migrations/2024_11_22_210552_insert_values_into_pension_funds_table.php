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
        DB::table('pension_funds')->insert([
            ['name' => 'Porvenir S.A.', 'nit' => '800227940-9'],
            ['name' => 'Protección S.A.', 'nit' => '800250317-3'],
            ['name' => 'Colfondos S.A.', 'nit' => '800240808-4'],
            ['name' => 'Old Mutual', 'nit' => '860529054-1'],
            ['name' => 'Colpensiones', 'nit' => '900336004-7'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('pension_funds')
            ->whereIn('nit', ['800227940-9', '800250317-3', '800240808-4', '860529054-1', '900336004-7'])
            ->delete();
    }
};
