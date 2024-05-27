<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Review::create([
        'movie_id' => '1',
        'poster' => 'KimiNoNawa.jpg',
        'user' => 'Reza',
        'rating' => '9.5/10',
        'date' => '28 Juni 2023',
        ]);
        Review::create([
            'movie_id' => '2',
            'poster' => 'TenkiNoKo.jpg',
            'user' => 'Siti',
            'rating' => '9/10',
            'date' => '7 Januari 2024',
        ]);
        Review::create([
            'movie_id' => '3',
            'poster' => 'DragonBallZ.jpg',
            'user' => 'Amanda',
            'rating' => '9,5/10',
            'date' => '14 Januari 2024',
        ]);
        Review::create([
            'movie_id' => '4',
            'poster' => 'BokuNoHero.jpg',
            'user' => 'Mowlin',
            'rating' => '9/10',
            'date' => '19 Desember 2022',
        ]);
           Review::create([
            'movie_id' => '5',
            'poster' => 'SilentVoice.jpg',
            'user' => 'Abil',
            'rating' => '8,9/10',
            'date' => '21 Desember 2023',
           ]);
    }
}
