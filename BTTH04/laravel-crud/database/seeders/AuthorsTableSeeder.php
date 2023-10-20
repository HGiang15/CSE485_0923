<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use App\Models\Author;
use App\Models\Book;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('authors')->delete(); // xoa DL cũ

        $faker = Faker::create();

        for($i = 0; $i < 50; $i++) {
            Author::create([
                'name' => $faker->name,
            ]);
        }
    }
}
