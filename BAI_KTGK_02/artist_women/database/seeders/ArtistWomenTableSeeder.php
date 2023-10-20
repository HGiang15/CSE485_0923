<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Artwork;
use Illuminate\Support\Facades\DB;

class ArtistWomenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('artworks')->delete(); // xoa DL cũ

        $faker = Faker::create();

        for($i = 0; $i < 20; $i++) {
            Artwork::create([
                'id'=> $i + 1,
                'artist_name'=> $faker-> sentence(3, true),
                'description'=> $faker-> paragraph(1, true),
                'art_type' => $faker->randomElement(['paint', 'music', 'literature']),
                'media_link' => $faker->url(),
                'cover_image'=> $faker->imageUrl(640, 480, 'animals', true)
            ]);
        }
    }
}
