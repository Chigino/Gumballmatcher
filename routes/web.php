<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/', 'IndexController@index')->name('home');

Route::get('/users', 'UserController@showUsers')->name('user');

Route::get('/factions', 'FactionController@showFactions')->name('faction');

Route::get('/gumballs', 'GumballController@showGumballsForm')->name('gumball');
Route::post('/gumballs', 'GumballController@gumball');

Route::get('/fates', 'FateController@showFatesForm')->name('fate');
Route::post('/fates', 'FateController@fate');

Route::get('/matches', 'MatchController@showMatches')->name('match');



