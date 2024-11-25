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
        DB::table('countries')->insert([
            ['name' => 'Colombia', 'code' => 'CO'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('countries')
            ->whereIn('name', [
                'Colombia',
            ])
            ->delete();
    }
};
