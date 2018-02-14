<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::all();
        return view('movies.index',compact('movies',$movies));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('movies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $request->validate([
            'title' => 'required|min:3',
            'summary' => 'required',
            'language' => 'required',
            'logo' => 'nullable|url',
            'release' => 'required',
        ]);

        $movie = Movie::create(['title' => $request->title,'summary' => $request->summary,'language' => $request->language, 'logo' => $request->logo, 'release' => $request->release]);
        return redirect('/movies/'.$movie->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(movie $movie)
    {
        return view('movies.show', compact('movie', $movie));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(movie $movie)
    {
        return view('movies.edit', compact('movie', $movie));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, movie $movie)
    {
        $request->validate([
            'title' => 'required|min:3',
            'summary' => 'required',
            'language' => 'required',
            'logo' => 'nullable|url',
            'release' => 'required',
        ]);

        $movie->title = $request->title;
        $movie->summary = $request->summary;
        $movie->language = $request->language;
        $movie->logo = $request->logo;
        $movie->release = $request->release;

        $movie->save();

        $request->session()->flash('message', 'Redigeret!');
        return redirect('movies');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, movie $movie)
    {
        $movie->delete();
        $request->session()->flash('message', 'Slettet!');
        return redirect('movies');
    }
}
