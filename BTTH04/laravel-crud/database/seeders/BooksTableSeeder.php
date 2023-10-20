<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use App\Models\Author;
use App\Models\Book;
class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->delete();

        $faker = Faker::create();
        $author_ids = Author::all()->pluck('id')->toArray();
        for($i = 0; $i < 60; $i++) {
            Book::create([
                'author_id' => $faker->randomElement($author_ids), 
                'title' => $faker->sentence(5),
            ]);
        }
        
    }
}
