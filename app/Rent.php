<?php

/**
 * Identificação dos autores:
 * Valter Cardoso   - nº31062
 * Gustavo Teixeira - nº21736
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    protected $guarded = [];

    /**
     * Eloquent relationship
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Eloquent relationship
     */
    public function game()
    {
        return $this->belongsTo(Game::class);
    }

}
