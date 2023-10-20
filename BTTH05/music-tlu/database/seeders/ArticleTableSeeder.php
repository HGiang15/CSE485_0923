<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Article;
use Illuminate\Support\Facades\DB;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('articles')->delete(); // xoa DL cũ

        $faker = Faker::create();

        for($i = 0; $i < 20; $i++) {
            Article::create([
                'idArticle'=> $i + 1,
                'title'=> $faker-> sentence(10, true),
                'nameSong'=> $faker-> sentence(5, true),
                'idCategory'=> $faker->numberBetween(1, 6),
                'summary'=> $faker-> paragraph(1, true),
                'content'=> $faker-> paragraph(3, true),
                'idAuthor'=> $faker->numberBetween(1, 10),
                'imgArticle'=> $faker->imageUrl(640, 480, 'animals', true)
            ]);
        }
    }
}
