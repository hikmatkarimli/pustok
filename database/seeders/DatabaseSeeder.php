<?php

namespace Database\Seeders;

use App\Models\Slider;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'test123',
        ]);

        Slider::factory()->create([
            'title' => 'Test Title',
            'small_title' => 'Test Small Title',
            'description' => 'Test Description',
            'bg_url' => 'test.jpg',
            'link_url' => 'test.com',
        ]);
    }
}
