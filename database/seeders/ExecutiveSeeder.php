<?php

namespace Database\Seeders;

use App\Models\HumanResource;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExecutiveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $executives = [
            ['name' => 'Sajid Hasan', 'designation' => 'Director'],
            ['name' => 'Monir Hasan', 'designation' => 'Assistant'],
            ['name' => 'Sakib Hosen', 'designation' => 'Volenteer'],
        ];

        foreach ($executives as $executive) {
            HumanResource::updateOrCreate([
                'name' => $executive['name'],
                'designation' => $executive['designation'],
                'type'  => 'executive',
            ]);
        }
    }
}
