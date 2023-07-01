<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Menu;
use App\Models\MenuItem;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        $menus = [
            [
                'title' => 'Changing Lives',
                'order' => 1,
            ],

            [
                'title' => 'Get Support',
                'order' => 2,
            ],

            [
                'title' => 'Get Involved',
                'order' => 3,
            ],

            [
                'title' => 'About Us',
                'order' => 4,
            ]
        ];

        foreach ($menus as $menu) {
            Menu::create([
                'title' => $menu['title'],
                'order' => $menu['order'],
            ]);
        }


        $menu_items = [
            [
                'title' => 'Lorem, ipsum.',
                'menu_id' => 1,
                'url' => '/lorem-ipsum',
                'order' => 1,
            ],

            [
                'title' => 'Lorem, ipsum.',
                'menu_id' => 2,
                'url' => '/lorem-ipsum',
                'order' => 1,
            ],

            [
                'title' => 'Lorem, ipsum.',
                'menu_id' => 3,
                'url' => '/lorem-ipsum',
                'order' => 1,
            ],

            [
                'title' => 'Lorem, ipsum.',
                'menu_id' => 4,
                'url' => '/lorem-ipsum',
                'order' => 1,
            ],

            [
                'title' => 'Lorem, ipsum.',
                'menu_id' => 1,
                'url' => '/lorem-ipsum',
                'order' => 2,
            ],

            [
                'title' => 'Lorem, ipsum.',
                'menu_id' => 2,
                'url' => '/lorem-ipsum',
                'order' => 2,
            ],

            [
                'title' => 'Lorem, ipsum.',
                'menu_id' => 3,
                'url' => '/lorem-ipsum',
                'order' => 2,
            ],

            [
                'title' => 'Lorem, ipsum.',
                'menu_id' => 4,
                'url' => '/lorem-ipsum',
                'order' => 2,
            ]

        ];

        foreach ($menu_items as $menu_item) {
            MenuItem::create([
                'title' => $menu_item['title'],
                'menu_id' => $menu_item['menu_id'],
                'url' => $menu_item['url'],
                'order' => $menu_item['order'],
            ]);
        }


    }
}
