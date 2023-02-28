<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/person', function () {
    return view('person', [
        'name' => 'Angelee Sto. Domingo',
        'age' => 21,
        'address' => 'Oas, Albay',
        'color' => 'blue',
        'siblings' => [
        [
            'name' => 'Angelo',
            'age' => 18 
        ], 
        [
            'name' => 'Athena',
            'age' => 12
        ], 
        [
            'name' => 'Angela',
            'age' => 19
        ], 
        [
            'name' => 'Angel',
            'age' => 26
        ], 
        [
            'name' => 'Aries',
            'age' => 25
        ], 
    ]
    ]);
});
