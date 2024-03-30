<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Banner::create([
            'title'       => "You can help the poor",
            'description' => "Excepteur sint occaecat cupidatat non proident, sunt in culpa",
            'photo' => "demo/banner/slider-1.jpg",
            'button_text' => "donate now",
            'button_link' => "#",
            'status'      => 1,
        ]);

        Banner::create([
            'title'       => "You can help the poor",
            'description' => "Excepteur sint occaecat cupidatat non proident, sunt in culpa",
            'photo' => "demo/banner/slider-2.jpg",
            'button_text' => "donate now",
            'button_link' => "#",
            'status'      => 1,
        ]);
    }
}
