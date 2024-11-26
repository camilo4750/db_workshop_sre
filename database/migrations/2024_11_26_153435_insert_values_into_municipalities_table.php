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
            ['name' => 'Tunja', 'code' => 'TU', 'department_id' => 1],
            ['name' => 'Duitama', 'code' => 'DU', 'department_id' => 1],
            ['name' => 'Sogamoso', 'code' => 'SO', 'department_id' => 1],
            ['name' => 'Chiquinquirá', 'code' => 'CH', 'department_id' => 1],
            ['name' => 'Paipa', 'code' => 'PA', 'department_id' => 1],
            ['name' => 'Villa de Leyva', 'code' => 'VL', 'department_id' => 1],
            ['name' => 'Puerto Boyacá', 'code' => 'PB', 'department_id' => 1],
            ['name' => 'Moniquirá', 'code' => 'MO', 'department_id' => 1],
            ['name' => 'Tibasosa', 'code' => 'TI', 'department_id' => 1],
            ['name' => 'Berbeo', 'code' => 'BE', 'department_id' => 1],
            ['name' => 'Arcabuco', 'code' => 'AR', 'department_id' => 1],
            ['name' => 'Bárcena', 'code' => 'BA', 'department_id' => 1],
            ['name' => 'Belén', 'code' => 'BE', 'department_id' => 1],
            ['name' => 'Berbeo', 'code' => 'BE', 'department_id' => 1],
            ['name' => 'Boavita', 'code' => 'BO', 'department_id' => 1],
            ['name' => 'Boyacá', 'code' => 'BOY', 'department_id' => 1],
            ['name' => 'Briceño', 'code' => 'BR', 'department_id' => 1],
            ['name' => 'Busbanzá', 'code' => 'BU', 'department_id' => 1],
            ['name' => 'Cerinza', 'code' => 'CE', 'department_id' => 1],
            ['name' => 'Chíquiza', 'code' => 'CHQ', 'department_id' => 1],
            ['name' => 'Ciénaga', 'code' => 'CI', 'department_id' => 1],
            ['name' => 'Cómbita', 'code' => 'CO', 'department_id' => 1],
            ['name' => 'Corrales', 'code' => 'CR', 'department_id' => 1],
            ['name' => 'Covarachía', 'code' => 'COV', 'department_id' => 1],
            ['name' => 'Cubará', 'code' => 'CU', 'department_id' => 1],
            ['name' => 'Cuítiva', 'code' => 'CUI', 'department_id' => 1],
            ['name' => 'Chivor', 'code' => 'CHV', 'department_id' => 1],
            ['name' => 'Chinavita', 'code' => 'CHN', 'department_id' => 1],
            ['name' => 'El Cocuy', 'code' => 'EC', 'department_id' => 1],
            ['name' => 'El Espino', 'code' => 'ES', 'department_id' => 1],
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
