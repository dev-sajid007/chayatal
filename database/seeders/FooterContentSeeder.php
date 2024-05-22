<?php

namespace Database\Seeders;

use App\Models\FooterContent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FooterContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FooterContent::updateOrCreate([
            'address' => '37/1 - A, Johuri Moholla, Shyamoli, Mohammadpur, Dhaka-1207',
            'email' => 'yQsVJ@example.com',
            'phone' => '01837000000',
            'about' => 'Currently, Chayatal is caring for 136 girls and 113 boys, aged between 5 and 15 years, hailing from various districts of Bangladesh. Every morning around 8:30, these children arrive at the Chayatal campus from nearby areas.'
        ]);
    }
}
