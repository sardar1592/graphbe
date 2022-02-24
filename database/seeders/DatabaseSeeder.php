<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        $authors = \App\Models\Author::factory(10)->create();

        foreach($authors as $author) {

            \App\Models\Book::factory(5)->for($author)->create();

        }
        
    }
}
