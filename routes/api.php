<?php

use Illuminate\Support\Facades\Route;

Route::group([

    'middleware' => 'api'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('register', 'AuthController@register');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

    Route::get('pokemon', 'PokemonController@index');
    Route::post('pokemon', 'PokemonController@store');
    Route::delete('pokemon/{pokemon}', 'PokemonController@delete');
});
