<?php
use App\Models\Post;
use App\Http\Controllers\PostApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/posts', [PostApiController::class, 'getall']); 

Route::post('/posts', [PostApiController::class, 'store']);

Route::put('/posts/{post}', [PostApiController::class, 'update'] );


Route::delete('/posts/{post}', [PostApiController::class, 'destroy']);