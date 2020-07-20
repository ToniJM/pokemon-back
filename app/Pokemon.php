<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    protected $fillable = [
        'nickname', 'pokemon', 'pokemonId', 'lat', 'lng'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
