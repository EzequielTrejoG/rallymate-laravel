<?php

namespace Database\Seeders;

use App\Models\Carrera;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarreraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Carrera::factory(10)->create();

        $carreras = [
            ['cveCarrera' => '114', 'Nombre' => 'Ingeniería Industrial'],
            ['cveCarrera' => '116', 'Nombre' => 'IME'],
            ['cveCarrera' => '118', 'Nombre' => 'Ingeniería Química'],
            ['cveCarrera' => '126', 'Nombre' => 'Tecnología'],
            ['cveCarrera' => '130', 'Nombre' => 'ITSE'],
            ['cveCarrera' => '204', 'Nombre' => 'Ingeniería Agrícola'],
            ['cveCarrera' => '205', 'Nombre' => 'Ingeniería en Alimentos'],
            ['cveCarrera' => '211', 'Nombre' => 'Química'],
            ['cveCarrera' => '214', 'Nombre' => 'Química Industrial'],
            ['cveCarrera' => '301', 'Nombre' => 'Administración'],
            ['cveCarrera' => '304', 'Nombre' => 'Contaduría'],
            ['cveCarrera' => '308', 'Nombre' => 'Informática']
        ];

        foreach ($carreras as $carrera)
        {
            Carrera::create($carrera);
        }
    }
}
