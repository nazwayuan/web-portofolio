<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Hobby;
use App\Models\HobbyItem;

class HobbySeeder extends Seeder
{
    public function run(): void
    {
        // Hobby 1: Menonton Film
        $film = Hobby::create([
            'name' => 'Menonton Film',
            'icon' => '🎬',
            'description' => 'Menikmati berbagai genre film dari drama hingga action. Saya suka menganalisis cerita, sinematografi, dan pesan yang disampaikan dalam setiap film.',
            'type' => 'film'
        ]);

        // Items untuk Menonton Film
        $filmItems = [
            ['title' => 'Inception', 'metadata' => ['year' => 2010, 'genre' => 'Sci-Fi'], 'content' => 'Mind-bending masterpiece!'],
            ['title' => 'The Shawshank Redemption', 'metadata' => ['year' => 1994, 'genre' => 'Drama'], 'content' => 'Inspiring story of hope'],
            ['title' => 'Interstellar', 'metadata' => ['year' => 2014, 'genre' => 'Sci-Fi'], 'content' => 'Amazing visuals and soundtrack'],
            ['title' => 'Parasite', 'metadata' => ['year' => 2019, 'genre' => 'Thriller'], 'content' => 'Brilliant social commentary'],
            ['title' => 'Spirited Away', 'metadata' => ['year' => 2001, 'genre' => 'Animation'], 'content' => 'Beautiful Ghibli film'],
        ];

        foreach ($filmItems as $item) {
            $film->items()->create($item);
        }

        // Hobby 2: Memasak
        $cooking = Hobby::create([
            'name' => 'Memasak',
            'icon' => '🍳',
            'description' => 'Bereksperimen dengan berbagai resep dan menciptakan masakan lezat. Saya senang mencoba menu baru dan berbagi hasil masakan dengan keluarga dan teman.',
            'type' => 'recipe'
        ]);

        $cookingItems = [
            ['title' => 'Nasi Goreng Special', 'content' => 'Resep nasi goreng dengan bumbu rahasia keluarga', 'metadata' => ['difficulty' => 'Easy', 'time' => '30 min']],
            ['title' => 'Rendang Daging', 'content' => 'Rendang khas Padang dengan rempah lengkap', 'metadata' => ['difficulty' => 'Medium', 'time' => '3 hours']],
        ];

        foreach ($cookingItems as $item) {
            $cooking->items()->create($item);
        }

        // Hobby 3: Menggambar
        $drawing = Hobby::create([
            'name' => 'Menggambar',
            'icon' => '🎨',
            'description' => 'Mengekspresikan kreativitas melalui sketsa dan ilustrasi digital. Saya menikmati menggambar karakter, landscape, dan berbagai objek yang menarik perhatian saya.',
            'type' => 'gallery'
        ]);

        // Hobby 4: Membaca
        Hobby::create([
            'name' => 'Membaca',
            'icon' => '📚',
            'description' => 'Learning from books about technology, self-development, and fiction. Knowledge is power!',
            'type' => 'text'
        ]);

        // Hobby 5: Photography
        Hobby::create([
            'name' => 'Photography',
            'icon' => '📸',
            'description' => 'Capturing moments and beautiful sceneries. I love street photography and landscape shots.',
            'type' => 'gallery'
        ]);

        // Hobby 6: Traveling
        Hobby::create([
            'name' => 'Traveling',
            'icon' => '✈️',
            'description' => 'Exploring new places and experiencing different cultures. Every destination has a story to tell.',
            'type' => 'text'
        ]);
    }
}