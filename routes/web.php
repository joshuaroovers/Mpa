<?php
use App\Models\Song;
use App\Models\Genre;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\SongController;

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

//LOOK AT TRELLO WHEN LOST, WE CAN DO THIS!
Route::get('/', function () {return view('welcome');});
Route::get('test', function () {return view('Test');});
Route::get('test2', function () {return view('test2', ['songs' => Song::all()],['genres' => Genre::all()]);});
Route::get('genres', [GenreController::class, 'index']);//doesn't feel right to have the controller redirect the view.. but that's right apparently
//Route::get('genreOverview/{{genre_name}}');
Route::get('songs', [SongController::class, 'index']);