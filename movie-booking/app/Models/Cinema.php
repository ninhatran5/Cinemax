<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cinema extends Model
{
    protected $fillable = ['name', 'location'];

    public function rooms()
    {
        return $this->hasMany(Room::class);
    }
}
