<?php

/**
 * Identificação dos autores:
 * Valter Cardoso   - nº31062
 * Gustavo Teixeira - nº21736
 */

namespace App\Http\Controllers;

use App\Game;
use App\Screen;
use Illuminate\Http\Request;

class GamesController extends Controller
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
        return view('games.create');
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
            'name' => ['required', 'string', 'max:255', 'min:2'],
            'description' => ['required', 'string', 'min:2'],
            'value_day' => ['integer', 'nullable'],
            'quantity' => ['integer', 'nullable'],
            'youtube_link' => ['string', 'min:2', 'nullable'],
            'store_link' => ['string', 'min:2', 'nullable'],
            'game_link' => ['string', 'min:2', 'nullable'],
            'console_id' => ['required', 'integer'],
        ]);

        if ($request->hasFile('icon_path')) {
            $path = $request->file('icon_path')->store('game_icons'); // Upload the file and retrieve path
            $full_path = "/uploads/".$path; // append full path to the retrieved path
            $attributes['icon_path'] = $full_path;
        }else{
            $attributes['icon_path'] = '';
        }

        if ($request->hasFile('image_path')) {
            $path = $request->file('image_path')->store('game_images'); // Upload the file and retrieve path
            $full_path = "/uploads/".$path; // append full path to the retrieved path
            $attributes['image_path'] = $full_path;
        }else{
            $attributes['image_path'] = '';
        }

        $game = new Game;
        $game->name = $attributes['name'];
        $game->description = $attributes['description'];
        $game->value_day = $attributes['value_day'];
        $game->quantity = $attributes['quantity'];
        $game->youtube_link = $attributes['youtube_link'];
        $game->store_link = $attributes['store_link'];
        $game->game_link = $attributes['game_link'];
        $game->icon_path = $attributes['icon_path'];
        $game->image_path = $attributes['image_path'];
        $game->console_id = $attributes['console_id'];
        $game->save();

        $game_key = $game->id;

        if ($request->hasFile('multi_image')) {
            foreach ($request->multi_image as $screen) {
                $path = $screen->store('screen_images'); // Upload the file and retrieve path
                $full_path = "/uploads/".$path; // append full path to the retrieved path
    
                $screen_attributes = array();
                $screen_attributes['screen_path'] = $full_path;
                $screen_attributes['game_id'] = $game_key;

                Screen::create($screen_attributes);
            }
        }

        // $response = $attributes['name'].' Game Created'; // Creating the message for response
        $response = $game->console->tag.' Game Created'; // Creating the message for response
        return back()->with('status', $response); // Returns a message flashed to the session
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function show(Game $game)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function edit(Game $game)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Game $game)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function destroy(Game $game)
    {
        //
    }
}
