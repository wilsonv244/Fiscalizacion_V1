<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Personas;
use App\Http\Livewire\Infracciones;
// use App\Models\Infraccion;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

/*Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');*/
Route::middleware(['auth:sanctum', 'verified'])->group( function(){
    Route::get('/infracciones', Infracciones::class);
    Route::get('/personas', personas::class);
        // return view('livewire.infracciones');   

    Route::get('/dashboard', function() {
        return view('dashboard');  })->name('dashboard');

    Route::get('/dashboards', function() {
            return view('dashboards');  })->name('dashboards');

    Route::get('/register', function() {
        return view('auth.register'); })->name('register');

});