<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('movie.movie_list', compact('movies'));
    }

    public function create()
    {
        return view('movie.create_form');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'director' => 'required',
            'description' => 'required',
        ]);

        $movie = Movie::create($validatedData);
        return redirect()->route('movies.index');
    }

    public function edit($id)
    {
        $movie = Movie::findOrFail($id);
        return view('movie.movie_edit', compact('movie'));
    }

    public function update(Request $request, $id)
    {
        $movie = Movie::findOrFail($id);
        $movie->update($request->all());
        return redirect()->route('movies.index');
    }

    public function destroy($id)
    {
        $movie = Movie::findOrFail($id);
        $movie->delete();
        return redirect()->route('movies.index');
    }

    public function show($id)
    {
        $movie = Movie::findOrFail($id);
        return view('movie.show', compact('movie'));
    }
}
