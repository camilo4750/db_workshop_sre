<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table('taxes')->insert([
            ['name' => 'Iva', 'percentage' => '19'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('billing_status')
            ->whereIn('name', [
                'Iva',
            ])
            ->delete();
    }
};
