<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateMovieRequest;
use App\Movie;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('admin/movies', ['movies' => $movies]);
    }

    public function create()
    {
        $movies = Movie::all();
        return view('admin/movies/create');
    }

    public function store(Movie $movie, CreateMovieRequest $request)
    {
        // ERROR: タイトルの重複チェック
        $movie->fill($request->all())->save();
        return view('admin/movies', ['movies' => Movie::all()]);
    }
}
