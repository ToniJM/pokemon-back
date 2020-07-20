<?php

namespace App\Http\Controllers;

use App\Pokemon;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store()
    {
        $data = request()->validate([
            'nickname' => 'required',
            'pokemon' => 'required',
            'pokemonId' => 'required',
            'lat' => 'required',
            'lng' => 'required'
        ]);
        return auth()->user()->pokemons()->create($data);;
    }

    public function index()
    {
        return auth()->user()->pokemons;
    }

    public function delete(Pokemon $pokemon)
    {
        return $pokemon->delete();
    }
}
