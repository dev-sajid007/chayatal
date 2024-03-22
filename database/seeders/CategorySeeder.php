<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = ["Accommodation","Donation Event","Education","Food Supply","Health Care"];


        foreach($categories as $category){
            Category::create([
                'name' => $category,
                'slug' => Str::slug($category)
            ]);
        }
    }
}
