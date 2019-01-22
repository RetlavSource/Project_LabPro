<?php

/**
 * Identificação dos autores:
 * Valter Cardoso   - nº31062
 * Gustavo Teixeira - nº21736
 */

namespace App\Http\Controllers;

use App\Game;
use App\Screen;
use App\Console;
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
        $games = Game::all();
        return view('games.index', compact('games'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if( !auth()->user()->is_admin )
        {
            abort(403);
        }
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
        if( !auth()->user()->is_admin )
        {
            abort(403);
        }
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
        dd($game);
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

    /**
     * Display PS4 games.
     */
    public function ps4()
    {
        $id = $this->find_console_id('PS4');
        $games = Game::where('console_id', $id)->get();
        return view('games.index', compact('games'));
    }

    /**
     * Display PC games.
     */
    public function pc()
    {
        $id = $this->find_console_id('PC');
        $games = Game::where('console_id', $id)->get();
        return view('games.index', compact('games'));
    }

    /**
     * Display XBOX ONE games.
     */
    public function xbox()
    {
        $id = $this->find_console_id('Xbox One');
        $games = Game::where('console_id', $id)->get();
        return view('games.index', compact('games'));
    }

    /**
     * Finds a console id.
     * *@param  $tag Console TAG
     * @return $id_console ID of the console
     */
    public function find_console_id($tag)
    {
        $consoles = Console::all();
        foreach ($consoles as $console) {
            if ($console->tag == $tag) {
                $id_console = $console->id;
                return $id_console;
            }
        }
    }
}
