<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TicketController;
use App\Http\Controllers\TicketGameController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\OddController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\MaxBetController;
use App\Http\Controllers\GamblingController;
use App\Http\Controllers\ResultController;
use Illuminate\Support\Facades\Auth;


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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {

/*
|--------------------------------------------------------------------------
| Routes for Tickets
|--------------------------------------------------------------------------
*/
Route::get('/my_tickets', [TicketController::class, 'index']);
Route::get('/show/{id}/{type}', [TicketController::class, 'show']);
Route::get('/delete_ticket/{id}', [TicketController::class, 'delete']);
Route::get('/new_ticket', [TicketController::class, 'create']);
Route::get('/confirm_ticket/{id}', [TicketController::class, 'update']);
Route::post('/set_max_bet', [MaxBetController::class, 'store'])->name('max_bet_set');
/*
|--------------------------------------------------------------------------
| Routes for Tickets
|--------------------------------------------------------------------------
*/
Route::get('/games', [GameController::class, 'index']);
Route::get('/show_game/{id}', [GameController::class, 'show']);
Route::post('/confirm', [TicketGameController::class, 'create'])->name('ticket_game');
/*
|--------------------------------------------------------------------------
| Operation on matches on Tickets
|--------------------------------------------------------------------------
*/
Route::post('/edit_odd', [OddController::class, 'update'])->name('odd_update');
Route::post('/edit_type', [TypeController::class, 'update'])->name('type_update');
Route::get('/delete_game/{id}/{id_game}', [TicketGameController::class, 'delete']);
/*
|--------------------------------------------------------------------------
| Operation between players
|--------------------------------------------------------------------------
*/
Route::get('/set_ticket', [GamblingController::class, 'index']);
Route::get('/set_ticket/{id}', [GamblingController::class, 'show']);
Route::post('/take_ticket', [GamblingController::class, 'create'])->name('ticket_take');
Route::get('/accept_ticket/{id}/{player_id}', [GamblingController::class, 'update']);
Route::get('/delete_bet/{id}', [GamblingController::class, 'delete']);
/*
|--------------------------------------------------------------------------
| Operation results
|--------------------------------------------------------------------------
*/

Route::get('/results', [ResultController::class, 'index']);
Route::get('/show/{id}/{type}', [ResultController::class, 'show']);
/*
|--------------------------------------------------------------------------
| Operation bets
|--------------------------------------------------------------------------
*/

});