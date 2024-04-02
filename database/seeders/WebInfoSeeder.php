<?php

namespace Database\Seeders;

use App\Models\WebInfo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WebInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        WebInfo::create([
            'title' => "Chayatal Bangladesh"
        ]);
    }
}
