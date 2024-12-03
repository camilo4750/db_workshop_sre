<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table('users')->insert([
            'full_name' => 'Camilo Andres Alarcon Cardenas',
            'email' => 'admin@workshop.com',
            'password' => bcrypt(Str::random(10)),
            'phone' => '3139283489',
            'active' => true,
            'created_at' => now(),
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('users')
        ->where('email', '=', 'admin@workshop.com')
        ->delete();
    }
};
