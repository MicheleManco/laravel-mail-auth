<?php

use Illuminate\Support\Facades\Route;

// GOAL: come detto a lezione, lo scopo del gioco e' 
// generare una semplice pagina home rappresentante l'entita' Videogame (titolo, sottotilo, rating) dotata di login. 
// La rappresentazione dell'enetita' viene fatta in Vue. Gli utenti collegati hanno la possibilita' di eliminare un'entita'.
// In fase di eliminazione viene mandata una mail all'utante registrato e una all'amministratore (inventare una mail di default) riportando l'entita' eliminata.





Route::get('/', 'GuestController@home') -> name('home');
// Route::get('/home', 'HomeController@home') ->name('home');

// ----------------------------------------------------------------------------------------------------------------------------

Route::post('/login', 'Auth\LoginController@login') ->name('login');
Route::post('/register', 'Auth\RegisterController@register') ->name('register');
Route::get('/logout', 'Auth\LoginController@logout') ->name('logout');

// ----------------------------------------------------------------------------------------------------------------------------

Route::get('/api/videogames/list', 'ApiController@getVideogames') -> name('api.videogames.list');

