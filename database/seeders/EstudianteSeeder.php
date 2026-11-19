<?php

namespace Database\Seeders;

use App\Models\Estudiante;
use Illuminate\Database\Seeder;

class EstudianteSeeder extends Seeder
{
    public function run(): void
    {
        $estudiantes = [
            ['nombre' => 'Ana Torres',    'correo' => 'ana.torres@example.com',    'programa' => 'Ingeniería de Sistemas'],
            ['nombre' => 'Luis Gómez',    'correo' => 'luis.gomez@example.com',    'programa' => 'Derecho'],
            ['nombre' => 'María Pérez',   'correo' => 'maria.perez@example.com',   'programa' => 'Medicina'],
            ['nombre' => 'Carlos Ruiz',   'correo' => 'carlos.ruiz@example.com',   'programa' => 'Administración'],
            ['nombre' => 'Sofía Herrera', 'correo' => 'sofia.herrera@example.com', 'programa' => 'Psicología'],
        ];

        foreach ($estudiantes as $e) {
            Estudiante::updateOrCreate(['correo' => $e['correo']], $e);
        }
    }
}
