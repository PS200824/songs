<?php

namespace App\Http\Controllers;

use App\Models\Band;
use Illuminate\Http\Request;

class BandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $band = Band::all();
        return view('bands.index', ['bands' => $band]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bands.create');
        return redirect()->route('bands.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Band::create([
            'bandsName' => $request->bandsName,
            'genre' => $request->genre,
            'founded' => $request->founded
        ]);
        return redirect()->route('bands.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bands  $bands
     * @return \Illuminate\Http\Response
     */
    public function show(Band $bands)
    {
        return view('bands.show', ['bands' => $bands]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bands  $bands
     * @return \Illuminate\Http\Response
     */
    public function edit(Band $band)
    {
        return view('bands.edit', ['bands' => $band]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bands  $bands
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Band $band)
    {
        $band->update([
            'bandsName' => $request->bandsName,
            'genre' => $request->genre,
            'founded' => $request->founded,

        ]);

        return redirect()->route('bands.index')->withSuccess('Bands updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bands  $bands
     * @return \Illuminate\Http\Response
     */
    public function destroy(Band $bands)
    {
        $bands->delete();
        return redirect()->route('bands.index')->withSuccess('Bands deleted successfully');
    }
}
