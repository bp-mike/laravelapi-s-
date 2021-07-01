<?php
use App\Models\Post;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::resource('posts', PostController::class);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
