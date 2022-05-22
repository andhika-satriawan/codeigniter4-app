<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;

use CodeIgniter\Database\Seeder;

class KomikSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'judul'         => 'Naruto',
                'slug'          => 'naruto',
                'penulis'       => 'Masashi Kishimoto',
                'penerbit'      => 'Shonen Jump',
                'sampul'        => 'naruto.jpg',
                'created_at'    => Time::now(),
                'updated_at'    => Time::now()
            ],
            [
                'judul'         => 'One Piece',
                'slug'          => 'one-piece',
                'penulis'       => 'Andhika Satriawan',
                'penerbit'      => 'Gramedia',
                'sampul'        => 'onepiece.jpg',
                'created_at'    => Time::now(),
                'updated_at'    => Time::now()
            ],
            [
                'judul'         => 'Gareng Petruk',
                'slug'          => 'gareng-petruk',
                'penulis'       => 'Asep Sunarya',
                'penerbit'      => 'Gramedia',
                'sampul'        => 'default.jpg',
                'created_at'    => Time::now(),
                'updated_at'    => Time::now()
            ]
        ];

        // Simple Queries
        // $this->db->query("INSERT INTO users (username, email) VALUES(:username:, :email:)", $data);

        // Using Query Builder
        $this->db->table('komik')->insertBatch($data);
    }
}
