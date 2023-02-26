<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateMovieRequest;
use App\Http\Requests\UpdateMovieRequest;
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
        $movie->fill($request->all())->save();
        return view('admin/movies', ['movies' => Movie::all()]);
    }

    public function edit(string $id) {
        $movie = Movie::query()->where('id', $id)->firstOrFail();
        return view("admin/movies/edit", ['movie' => $movie]);
    }

    public function update(string $id, UpdateMovieRequest $request) {
        // TODO: レコード更新処理
        $movie = Movie::query()->where('id', $id)->firstOrFail();
        $movie->fill($request->all())->save();
        return response("{$request->title} : {$id} is updated!!!");
    }
}
