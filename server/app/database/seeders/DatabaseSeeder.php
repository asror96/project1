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
         \App\Models\User::factory(10)->create();
         for( $i=1;$i<=10;$i++){
             \App\Models\PhotoUser::factory()->count(10)->photosUser($i)->create();
         }

        \App\Models\Notification::factory(100)->create();

         \App\Models\Category::create(['name' => 'Historical']);
        \App\Models\Category::create(['name' => 'Beach']);
        \App\Models\Category::create(['name' => 'Extreme']);
        \App\Models\Category::create(['name' => 'Naturals']);
        \App\Models\Category::create(['name' => 'Specific']);

        \App\Models\Place::factory(10)->create();

         for( $i=1;$i<=10;$i++){
             \App\Models\PhotoPlace::factory()->count(10)->withPlace($i)->create();
         }
        \App\Models\Evaluation::factory(100)->create();

        for( $i=1;$i<=10;$i++){
            \App\Models\Favorite::factory()->count(5)->userFavorites($i)->create();
        }



        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
