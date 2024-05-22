<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $newses = [
            ['title' => 'Heart to Heart Event', 'description' => 'Lorem ipsum dolor sit amet consectetur adip sicing elit sed do eiusmod temporincididunt. Labore dolore magna aliqua.'],
            ['title' => 'Heart to Heart Events', 'description' => 'Lorem ipsum dolor sit amet consectetur adip sicing elit sed do eiusmod temporincididunt. Labore dolore magna aliqua.'],
            ['title' => 'Heart to Heart Eventss', 'description' => 'Lorem ipsum dolor sit amet consectetur adip sicing elit sed do eiusmod temporincididunt. Labore dolore magna aliqua.']
        ];


        foreach ($newses as $key => $news) {
            News::updateOrCreate([
                'title' => $news['title'],
                'description' => $news['description']
            ]);
        }


    }
}
