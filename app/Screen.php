<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Screen extends Model
{
    protected $guarded = [];

    /**
     * Eloquent relationship
     */
    public function game()
    {
        return $this->belongsTo(Game::class);
    }

}
