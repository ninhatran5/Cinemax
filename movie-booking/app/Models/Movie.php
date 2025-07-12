<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'title', 'description', 'genre', 'director',
        'cast', 'poster', 'trailer_url', 'release_date', 'is_showing'
    ];

    public function showtimes()
    {
        return $this->hasMany(Showtime::class);
    }
}
