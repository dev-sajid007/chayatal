<?php

namespace Database\Seeders;

use App\Models\Sponsor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SponsorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sponsor::create([
            'photo' => "demo/sponsor/sponsor-1.png",
            'status' => 1
        ]);

        Sponsor::create([
            'photo' => "demo/sponsor/sponsor-2.png",
            'status' => 1
        ]);
        
        Sponsor::create([
            'photo' => "demo/sponsor/sponsor-3.png",
            'status' => 1
        ]);
        Sponsor::create([
            'photo' => "demo/sponsor/sponsor-1.png",
            'status' => 1
        ]);

        Sponsor::create([
            'photo' => "demo/sponsor/sponsor-2.png",
            'status' => 1
        ]);
        
        Sponsor::create([
            'photo' => "demo/sponsor/sponsor-3.png",
            'status' => 1
        ]);
    }
}
