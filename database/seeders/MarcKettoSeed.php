<?php

namespace Database\Seeders;

use App\Models\marcKetto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MarcKettoSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $technikak = [
            [
                'id' => 1,
                'name' => 'PHP',
                'description' => 'backend'
            ],
            [
                'id' => 2,
                'name' => 'Angular',
                'description' => 'frontend'
            ],
            [
                'id' => 3,
                'name' => 'React',
                'description' => 'frontend'
            ]
            ];

            foreach ($technikak as $technika) {
                marcKetto::create($technika);
            }
    }
}
