<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::where('is_showing', true)->get(); // Chỉ lấy phim đang chiếu
        return view('client.home', compact('movies'));
    }
}
