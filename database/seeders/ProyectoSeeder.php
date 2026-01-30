<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProyectoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        \App\Models\Proyecto::create([
            'nombre' => 'Sistema de Reservas',
            'descripcion' => 'Proyecto para gestionar las aulas del centro.'
        ]);
        \App\Models\Proyecto::create([
            'nombre' => 'Portal del Alumno',
            'descripcion' => 'Plataforma para consultar notas y horarios.'
        ]);
    }
}
