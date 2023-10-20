<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Author;
use Illuminate\Support\Facades\DB;

class AuthorTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('authors')->delete(); // xoa DL cũ

        $faker = Faker::create();

        for($i = 0; $i < 20; $i++) {
            Author::create([
                'idAuthor'=> $i + 1,
                'nameAuthor'=> $faker-> sentence(3, true),
                'imgAuthor'=> $faker->imageUrl(200, 200, 'peoples', true)
            ]);
        }
    }
}
