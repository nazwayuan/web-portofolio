<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Film;

class FilmSeeder extends Seeder
{
    public function run(): void
    {
        $films = [
            ['title' => 'Inception', 'year' => 2010, 'genre' => 'Sci-Fi', 'notes' => 'Mind-bending masterpiece!'],
            ['title' => 'The Shawshank Redemption', 'year' => 1994, 'genre' => 'Drama', 'notes' => 'Inspiring story of hope'],
            ['title' => 'Interstellar', 'year' => 2014, 'genre' => 'Sci-Fi', 'notes' => 'Amazing visuals and soundtrack'],
            ['title' => 'Parasite', 'year' => 2019, 'genre' => 'Thriller', 'notes' => 'Brilliant social commentary'],
            ['title' => 'Spirited Away', 'year' => 2001, 'genre' => 'Animation', 'notes' => 'Beautiful Ghibli film'],
        ];

        foreach ($films as $film) {
            Film::create($film);
        }
    }
}