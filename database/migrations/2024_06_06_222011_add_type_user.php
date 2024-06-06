<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table('type_users')->insert([
            'type_user' => 'Administrador',
            'user_who_created_id' => 1,
            'created_at' => now()
        ]);

        DB::table('type_users')->insert([
            'type_user' => 'Usuario',
            'user_who_created_id' => 1,
            'created_at' => now()
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('type_users')->where('type_user', '=', 'Administrador')->delete();
        DB::table('type_users')->where('type_user', '=', 'Usuario')->delete();
    }
};
