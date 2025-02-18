<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Gallery::create([
            'photo' => "demo/gallery/gallery-1.jpg",
            'status' => 1
        ]);
        Gallery::create([
            'photo' => "demo/gallery/gallery-2.jpg",
            'status' => 1
        ]);
        Gallery::create([
            'photo' => "demo/gallery/gallery-3.jpg",
            'status' => 1
        ]);
    }
}
