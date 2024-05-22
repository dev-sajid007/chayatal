<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        $this->call(UserSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(TagSeeder::class);
        $this->call(MenuSeeder::class);
        $this->call(BannerSeeder::class);
        $this->call(TestimonialSeeder::class);
        $this->call(GallerySeeder::class);
        $this->call(SponsorSeeder::class);
        $this->call(WebInfoSeeder::class);
        $this->call(ExecutiveSeeder::class);
        $this->call(NewsSeeder::class);
        $this->call(FooterContentSeeder::class);
    }
}
