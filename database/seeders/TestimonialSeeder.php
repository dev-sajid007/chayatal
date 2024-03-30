<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Testimonial::create([
            'name' => "Prodip Kumar",
            'photo' => "demo/testimonial/testimonial-1.png",
            'content' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Enim ad minim veniam quis nostrud exercitation ullamco laboris nisiut aliquip ex ea commodo consequat.
                            Duis aute irure dolor in reprehenderit.",
            'status' => 1                
        ]);

        Testimonial::create([
            'name' => "Prodip Khan",
            'photo' => "demo/testimonial/testimonial-1.png",
            'content' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Enim ad minim veniam quis nostrud exercitation ullamco laboris nisiut aliquip ex ea commodo consequat.
                            Duis aute irure dolor in reprehenderit.",
            'status' => 1                
        ]);
    }
}
