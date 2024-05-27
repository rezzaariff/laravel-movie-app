<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * 
     */
    public function run():void
    {
        Movie::create([
            'id' => 1,
            'title' => 'Kimi No Nawa',
            'genre_id' => '1',
            'poster' => 'KimiNoNawa.jpg',
            'synopsis' => 'Anime ini menceritakan siswa sekolah menengah Taki Tachibana dan Mitsuha Miyamizu. Tiba-tiba tubuh keduanya tertukar meski terpisah jarak yang jauh. Suatu hari, Mitsuha terbangun di sebuah ruangan yang bukan ruangannya. Ia mendapati dirinya di Tokyo dengan tubuh lelaki.',
        ]);
    
        Movie::create([
            'id' => 2,
            'title' => 'Tenki No Ko',
            'genre_id' => '2',
            'poster' => 'TenkiNoKo.jpg',
            'synopsis' => 'Film ini mengisahkan tentang Hodaka Morishima, seorang remaja SMA yang pergi ke Tokyo dan berteman dengan seorang anak gadis yatim bernama Hina Amano, yang mampu memanipulasi cuaca.',
        ]);
    
        Movie::create([
            'id' => 3,
            'title' => 'Dragon Ball Z',
            'genre_id' => '3',
            'poster' => 'DragonBallZ.jpg',
            'synopsis' => 'Dragon Ball bercerita tentang seorang bocah bernama Goku yang hidup di tengah gunung sendirian. Dia lalu bertemu dengan Bulma, seorang gadis muda genius, yang berusaha mengumpulkan 7 bola ajaib yang katanya bisa mengabulkan semua keinginan. Bola-bola tersebut dinamakan Dragon Ball.',
        ]);
        Movie::create([
            'id' => 4,
            'title' => 'Boku No Hero',
            'genre_id' => '4',
            'poster' => 'BokuNoHero.jpg',
            'synopsis' => 'Boku No Hero Academia menceritakan tentang Izuku Midoriya, pemuda yang hidup di dunia di mana hampir semua orang memiliki kekuatan super atau Quirk dan sebagian besarnya menjadi pahlawan super dengan kekuatan mereka.'
        ]);
        Movie::create([
            'id' => 5,
            'title' => 'A Silent Voice',
            'genre_id' => '5',
            'poster' => 'SilentVoice.jpg',
            'synopsis' => 'A Silent Voice bercerita tentang siswi SMA tuli bernama Shoko Nishimiya (Saori Hayami) yang mencoba untuk beradaptasi dengan teman-temannya dan hidup selayaknya siswi SMA lainnya. Sementara itu, Shoya Ishida (Miyu Irino) adalah seorang siswa SMA cuek yang senang mengganggu teman-temannya.',
        
        ]);
    }
}
