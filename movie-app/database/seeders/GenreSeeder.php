<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
            'name' => 'Romance',
            'description' => 'Genre ini penuh kisah romantis selayaknya perjuangan cinta. Narasinya akan fokus ke kisah cinta karakter utama, baik dari sisi emosi sampai konflik yang dihadapi.',
        ]);
        Genre::create([
            'name' => 'Action',
            'description' => 'Genre action merupakan genre yang setiap cuplikannya memiliki aksi dan perkelahian. Kebanyakan, dalam anime ini, karakter menggunakan senjata dan memiliki gerakan-gerakan yang cukup menantang.',
        ]);

        Genre::create([
            'name' => 'Shounen',
            'description' => 'Genre shounen adalah salah satu genre dalam manga dan anime Jepang yang ditujukan khusus untuk pemirsa laki-laki muda, terutama dalam kelompok usia remaja hingga awal dewasa.',
        ]);

        Genre::create([
            'name' => 'Supernatural',
            'description' => 'Genre ini mirip dengan fantasi. Bedanya, pada fantasi semua tokoh punya hal-hal yang tidak biasa. Sementara di supernatural, biasanya hanya karakter tertentu, misalnya ada seorang manusia yang tiba-tiba menjadi setengah iblis.',
        ]);

        Genre::create([
            'name' => 'Ecchi',
            'description' => 'Genre ecchi merupakan genre anime yang menampilkan konten seksual atau kurang senonoh. Karena itu, anime ini diperuntukkan bagi penonton dewasa yang sudah berusia di atas 17 tahun.',
        ]);
    }
}
