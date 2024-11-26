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
        DB::table('departments')->insert([
            ['name' => 'Boyacá', 'code' => 'BOY', 'country_id' => 1],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('departments')
        ->whereIn('name', [
            'Boyacá',
        ])
        ->delete();
    }
};
