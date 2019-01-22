<?php

/**
 * Identificação dos autores:
 * Valter Cardoso   - nº31062
 * Gustavo Teixeira - nº21736
 */

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
    GET /projects (index)
    GET /projects/create (create)
    GET /projects/1 (show)
    POST /projects (store)
    GET /projects/1/edit (edit)
    PATCH /projects/1 (update)
    DELETE /projects/1 (destroy)

    Route::resource('projects', 'ProjectsController');
    igual a:
    Route::get('/projects', 'ProjectsController@index');
    Route::get('/projects/create', 'ProjectsController@create');
    Route::get('/projects/{project}', 'ProjectsController@show');
    Route::post('/projects', 'ProjectsController@store');
    Route::get('/projects/{project}/edit', 'ProjectsController@edit');
    Route::patch('/projects/{project}', 'ProjectsController@update');
    Route::delete('/projects/{project}', 'ProjectsController@destroy');
*/

Route::get('/', function () {
    return view('welcome');
});

// GAMES
Route::get('/games/create', 'GamesController@create')->middleware('auth'); // view a create games template
Route::post('/games', 'GamesController@store')->middleware('auth'); // store a geme from the games.create template
Route::get('/games', 'GamesController@index'); // view all games        // no need athorization 
Route::get('/games/{game}', 'GamesController@show'); // view a game     // no need athorization

Route::get('/ps4', 'GamesController@ps4'); // view ps4 games     // no need athorization
Route::get('/pc', 'GamesController@pc'); // view ps4 games     // no need athorization
Route::get('/xbox', 'GamesController@xbox'); // view ps4 games     // no need athorization

// CONSOLES
Route::get('/consoles/create', 'ConsolesController@create')->middleware('auth');
Route::post('/consoles', 'ConsolesController@store')->middleware('auth');

// REGISTER - AUTH
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

