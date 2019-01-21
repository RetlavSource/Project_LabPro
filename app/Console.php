<?php

/**
 * Identificação dos autores:
 * Valter Cardoso   - nº31062
 * Gustavo Teixeira - nº21736
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Console extends Model
{
    protected $guarded = [];

    /**
     * Eloquent relationship
     */
    public function games()
    {
        return $this->hasMany(Game::class);
    }

}
