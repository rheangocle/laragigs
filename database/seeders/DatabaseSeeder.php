<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(5)->create();

        Listing::factory(5)->create();
        // Listing::create([
        //     'title' => 'PHP Developer',
        //     'tags' => 'php, laravel, backend',
        //     'company' => 'Acme',
        //     'location' => 'Remote',
        //     'salary' => '80000',
        //     'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla euismod, nisl eget ultricies aliquam, quam libero ultricies no',
        //     'email' => 'jobs@acme.com',
        //     'url' => 'https://acme.com',
        // ]);

        // Listing::create([
        //     'title' => 'Junior Laravel Developer',
        //     'tags' => 'laravel, junior, javascript',
        //     'company' => 'Revature',
        //     'location' => 'Boston, MA',
        //     'salary' => '50000',
        //     'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla euismod, nisl eget ultricies aliquam, quam libero ultricies no',
        //     'email' => 'jobs@revature.com',
        //     'url' => 'https://revature.com',
        // ]);


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}