<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $menus = ['Home','About','Campaign','Events','Contact'];

        foreach($menus as $menu){
            Menu::create([
                'title' => $menu
            ]);
        }
    }
}
