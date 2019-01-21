<?php

/**
 * Identificação dos autores:
 * Valter Cardoso   - nº31062
 * Gustavo Teixeira - nº21736
 */

namespace App\Http\Controllers;

use App\Console;
use Illuminate\Http\Request;
// use \Illuminate\Http\UploadedFile;

class ConsolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('consoles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = request()->validate([
            'name' => ['required', 'min:3'],
            'tag' => ['required', 'min:2']
        ]);

        // FETCHING the saved image
        // src="{{ Storage::disk('personal')->url('icons/7J89muTyBvQGRQSD5OaFBEdQQmVwYJ4kBDxQsl9l.png') }}"
        
        $path = $request->file('icon')->store('console_icons'); // Upload the file and retrieve path
        $full_path = "/uploads/".$path; // append full path to the retrieved path
        
        $attributes['icon_path'] = $full_path;
        Console::create($attributes);

        $response = 'New '.$attributes['name'].' Created'; // Creating the message for response
        return back()->with('status', $response); // Returns a message flashed to the session
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Console  $console
     * @return \Illuminate\Http\Response
     */
    public function show(Console $console)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Console  $console
     * @return \Illuminate\Http\Response
     */
    public function edit(Console $console)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Console  $console
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Console $console)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Console  $console
     * @return \Illuminate\Http\Response
     */
    public function destroy(Console $console)
    {
        //
    }
}
