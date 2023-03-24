<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DinossauroController;

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

Route::get('/meow', function () {
    echo 'kkkk';
});

Route::get('/dino', [ DinossauroController::Class, 'listarDino' ]);

// Route::get('/dinosaur', [Ca] {
//     return view('gostoso');
// });
