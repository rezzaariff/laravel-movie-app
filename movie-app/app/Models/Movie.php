<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $movies = [
        [
            'id' => 1,
            'title' => 'Kimi No Nawa',
            'poster' => 'KimiNoNawa.jpg',
            'genre' => 'Romance',
            'synopsis' => 'Anime ini menceritakan siswa sekolah menengah Taki Tachibana dan Mitsuha Miyamizu. Tiba-tiba tubuh keduanya tertukar meski terpisah jarak yang jauh. Suatu hari, Mitsuha terbangun di sebuah ruangan yang bukan ruangannya. Ia mendapati dirinya di Tokyo dengan tubuh lelaki.',
        ],
        [
            'id' => 2,
            'title' => 'Tenki No Ko',
            'poster' => 'TenkiNoKo.jpg',
            'genre' => 'Romance, Fantasy',
            'synopsis' => 'Film ini mengisahkan tentang Hodaka Morishima, seorang remaja SMA yang pergi ke Tokyo dan berteman dengan seorang anak gadis yatim bernama Hina Amano, yang mampu memanipulasi cuaca.',
        ],
        [
            'id' => 3,
            'title' => 'Dragon Ball Z',
            'poster' => 'DragonBallZ.jpg',
            'genre' => 'Action, Shounen',
            'synopsis' => 'Dragon Ball bercerita tentang seorang bocah bernama Goku yang hidup di tengah gunung sendirian. Dia lalu bertemu dengan Bulma, seorang gadis muda genius, yang berusaha mengumpulkan 7 bola ajaib yang katanya bisa mengabulkan semua keinginan. Bola-bola tersebut dinamakan Dragon Ball.',
        ],
    ];
    public function getAllmovies()
    {
        return $this->movies;
    }
}
