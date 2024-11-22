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
        DB::table('genders')->insert([
            ['name' => 'Masculino'],
            ['name' => 'Femenino'],
            ['name' => 'Otro'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('genders')
        ->whereIn('name', [
            'Masculino',
            'Femenino', 
            'Otro',
            ])
        ->delete();
    }
};
