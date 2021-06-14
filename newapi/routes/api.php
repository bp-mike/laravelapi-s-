<?php
// use App\Models\Post;
// use App\Http\Controllers\PostController;
use App\Post;
use App\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// __________ the longway
// Route::get('/post', 'PostController@index');
// Route::post('/post', 'PostController@store');
// Route::put('/post', 'PostController@update');
// Route::delete('/post', 'PostController@destroy');

// ______ the short way
Route::resource('posts', 'PostContoller');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
