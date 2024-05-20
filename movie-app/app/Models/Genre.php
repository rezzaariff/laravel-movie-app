<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $genres = [
    [
        'id' => 1,
        'genre' => 'Romance',
        'description' => 'Genre ini penuh kisah romantis selayaknya perjuangan cinta. Narasinya akan fokus ke kisah cinta karakter utama, baik dari sisi emosi sampai konflik yang dihadapi.',
    ],
    [
        'id' => 2,
        'genre' => 'Shounen',
        'description' => 'Genre shounen adalah salah satu genre dalam manga dan anime Jepang yang ditujukan khusus untuk pemirsa laki-laki muda, terutama dalam kelompok usia remaja hingga awal dewasa.',
    ],
    [
        'id' => 3,
        'genre' => 'Action',
        'description' => 'Genre action merupakan genre yang setiap cuplikannya memiliki aksi dan perkelahian. Kebanyakan, dalam anime ini, karakter menggunakan senjata dan memiliki gerakan-gerakan yang cukup menantang.',
    ],
    [
        'id' => 4,
        'genre' => 'Supernatural',
        'description' => 'Genre ini mirip dengan fantasi. Bedanya, pada fantasi semua tokoh punya hal-hal yang tidak biasa. Sementara di supernatural, biasanya hanya karakter tertentu, misalnya ada seorang manusia yang tiba-tiba menjadi setengah iblis.',
    ],
    [
        'id' => 5,
        'genre' => 'Ecchi',
        'description' => 'Genre ecchi merupakan genre anime yang menampilkan konten seksual atau kurang senonoh. Karena itu, anime ini diperuntukkan bagi penonton dewasa yang sudah berusia di atas 17 tahun.',
    ],
];

public function getAllgenres()
{
    return $this->genres;
}

}