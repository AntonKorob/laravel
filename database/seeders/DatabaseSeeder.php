<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
        
        // DB::table('article')->insert([
        //     'title' => Str::random(10),
        //     'article'  => Str::random(20),
        // ]);
        // DB::table('posts')->insert([
        //     'name' => Str::random(10),
        //     'post'  => Str::random(20),
        // ]);
        // DB::table('products')->insert([
        //     'title' => Str::random(10),
        //     'content'  => Str::random(20),
        //     'price'  => 1000,
        // ]);
        // DB::table('city')->insert([
        //     'city' => Str::random(10),
        //     'description'  => Str::random(10),
        // ]);
        // DB::table('countries')->insert([
        //     'country' => 'USA',
        //     'description'  => 'Laravel 6.x Laravel 7.x Laravel 8.x Laravel 9.x Laravel 10.x Laravel 11.x Laravel Dev. [Global Namespace]. Illuminate. ... FormRequestServiceProvider. FoundationServiceProvider. Support. Providers. AuthServiceProvider',
        // ]);
        $this->call([
            PostSeeder::class,
            ArticleSeeder::class,
            CitySeeder::class,
            // CountriesSeeder::class,
        ]);
        
    }
}