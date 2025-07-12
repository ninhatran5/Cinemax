<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Movie::create([
            'title' => 'Avengers: Endgame',
            'description' => 'Cuộc chiến cuối cùng...',
            'genre' => 'Hành động, Siêu anh hùng',
            'director' => 'Anthony Russo',
            'cast' => 'Robert Downey Jr., Chris Evans',
            'poster' => 'https://image.tmdb.org/t/p/w500/example.jpg',
            'trailer_url' => 'https://www.youtube.com/watch?v=TcMBFSGVi1c',
            'release_date' => now()->subDays(10),
            'is_showing' => true,
        ]);
                Movie::create([
            'title' => 'Avengers: Endgame',
            'description' => 'Cuộc chiến cuối cùng...',
            'genre' => 'Hành động, Siêu anh hùng',
            'director' => 'Anthony Russo',
            'cast' => 'Robert Downey Jr., Chris Evans',
            'poster' => 'https://image.tmdb.org/t/p/w500/example.jpg',
            'trailer_url' => 'https://www.youtube.com/watch?v=TcMBFSGVi1c',
            'release_date' => now()->subDays(10),
            'is_showing' => true,
        ]);
                Movie::create([
            'title' => 'Avengers: Endgame',
            'description' => 'Cuộc chiến cuối cùng...',
            'genre' => 'Hành động, Siêu anh hùng',
            'director' => 'Anthony Russo',
            'cast' => 'Robert Downey Jr., Chris Evans',
            'poster' => 'https://image.tmdb.org/t/p/w500/example.jpg',
            'trailer_url' => 'https://www.youtube.com/watch?v=TcMBFSGVi1c',
            'release_date' => now()->subDays(10),
            'is_showing' => true,
        ]);
                Movie::create([
            'title' => 'Avengers: Endgame',
            'description' => 'Cuộc chiến cuối cùng...',
            'genre' => 'Hành động, Siêu anh hùng',
            'director' => 'Anthony Russo',
            'cast' => 'Robert Downey Jr., Chris Evans',
            'poster' => 'https://image.tmdb.org/t/p/w500/example.jpg',
            'trailer_url' => 'https://www.youtube.com/watch?v=TcMBFSGVi1c',
            'release_date' => now()->subDays(10),
            'is_showing' => true,
        ]);
                Movie::create([
            'title' => 'Avengers: Endgame',
            'description' => 'Cuộc chiến cuối cùng...',
            'genre' => 'Hành động, Siêu anh hùng',
            'director' => 'Anthony Russo',
            'cast' => 'Robert Downey Jr., Chris Evans',
            'poster' => 'https://image.tmdb.org/t/p/w500/example.jpg',
            'trailer_url' => 'https://www.youtube.com/watch?v=TcMBFSGVi1c',
            'release_date' => now()->subDays(10),
            'is_showing' => true,
        ]);
        
    }
}
