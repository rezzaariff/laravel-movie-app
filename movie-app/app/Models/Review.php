<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $reviews = [
        [
            'id' => 1,
            'title' => 'Kimi No Nawa',
            'poster' => 'KimiNoNawa.jpg',
            'user' => 'Reza',
            'rating' => '9.5/10',
            'date' => '28 Juni 2023'
        ],
        [
            'id' => 2,
            'title' => 'Tenki No Ko',
            'poster' => 'TenkiNoKo.jpg',
            'user' => 'Siti',
            'rating' => '9/10',
            'date' => '7 Januari 2024',
        ],
        [
            'id' => 3,
            'title' => 'Dragon Ball Z',
            'poster' => 'DragonBallZ.jpg',
            'user' => 'Amanda',
            'rating' => '9,5/10',
            'date' => '14 Januari 2024',
        ],
        [
            'id' => 4,
            'title' => 'Boku No Hero Academia',
            'poster' => 'BokuNoHero.jpg',
            'user' => 'Mowlin',
            'rating' => '9/10',
            'date' => '19 Desember 2022',
        ],
        [
            'id' => 5,
            'title' => 'A Silent Voice',
            'poster' => 'SilentVoice.jpg',
            'user' => 'Abil',
            'rating' => '8,9/10',
            'date' => '21 Desember 2023',
        ],
    ];

    public function getAllReviews()
    {
        return $this->reviews;
    }

}