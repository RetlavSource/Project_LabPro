<?php

/**
 * Identificação dos autores:
 * Valter Cardoso   - nº31062
 * Gustavo Teixeira - nº21736
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $guarded = [];

    /**
     * Eloquent relationship
     */
    public function rents()
    {
        return $this->hasMany(Rent::class);
    }

    /**
     * Eloquent relationship
     */
    public function console()
    {
        return $this->belongsTo(Console::class);
    }

    /**
     * Eloquent relationship
     */
    public function screens()
    {
        return $this->hasMany(Screen::class);
    }

}
