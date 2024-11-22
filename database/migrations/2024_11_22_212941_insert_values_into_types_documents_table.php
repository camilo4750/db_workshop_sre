<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table('types_documents')->insert([
            ['name' => 'Cédula de Ciudadanía'],
            ['name' => 'Cédula de Extranjería'],
            ['name' => 'Tarjeta de Identidad'],
            ['name' => 'Registro Civil de Nacimiento'],
            ['name' => 'Tarjeta Profesional'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('types_documents')
            ->whereIn('name', [
                'Cédula de Ciudadanía',
                'Cédula de Extranjería',
                'Tarjeta de Identidad',
                'Registro Civil de Nacimiento',
                'Tarjeta Profesional',
            ])
            ->delete();
    }
};
