<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $album = Album::all();
        return view('albums.index', ['albums' => $album]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('albums.create');
        return redirect()->route('albums.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Album::create([
            'albumsName' => $request->albumsName,
            'year' => $request->year,
            'times_sold' => $request->times_sold
        ]);
        return redirect()->route('albums.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Albums  $albums
     * @return \Illuminate\Http\Response
     */
    public function show(Album $albums)
    {
        return view('albums.show', ['albums' => $albums]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Albums  $albums
     * @return \Illuminate\Http\Response
     */
    public function edit(Album $albums)
    {
        return view('albums.edit', ['albums' => $albums]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Albums  $albums
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Album $albums)
    {
        $albums->update([
            'albumsName' => $request->albumsName,
            'year' => $request->year,
            'times_sold' => $request->times_sold
        ]);
        return redirect()->route('albums.index')->withSuccess('Bands updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Albums  $albums
     * @return \Illuminate\Http\Response
     */
    public function destroy(Album $albums)
    {
        $albums->delete();
        return redirect()->route('albums.index')->withSuccess('Bands updated successfully');
    }
}
