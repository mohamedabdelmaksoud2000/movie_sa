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
        $data = [
            [
                'name' => 'Action'
            ],
            [
                'name' => 'Comedy'
            ],
            [
                'name' => 'SCI-Fi'
            ],
            [
                'name' => 'Advanture'
            ],
            [
                'name' => 'Drama'
            ],
            [
                'name' => 'Fantasy'
            ],
            [
                'name' => 'Horror'
            ],
            [
                'name' => 'Mystery'
            ],
            [
                'name' => 'Romance'
            ],
            [
                'name' => 'Thriller'
            ],
            [
                'name' => 'Western'
            ],
        ];

        Genre::insert($data);
    }
}
