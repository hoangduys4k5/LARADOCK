<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Use App\Article;

Route::get('/', function(){
    return view('welcome');
});
Route::middleware('auth:api')
    ->get('/user', function (Request $request) {
        return $request->user();
    });
Route::resource('articles', ArticleController::class);

// Route::post('register', 'Auth\RegisterController@register');
// Route::post('login', 'Auth\LoginController@login');
// Route::post('logout', 'Auth\LoginController@logout');
Route::fallback(function(){
    return response()->json([

        'Status' => '404',
        'message' => 'Page Not Found. If error persists, contact hoangduys4k5@gmail.com'], 404);
});

// --------------------------------------------------------------
Route::post('register', 'Auth\RegisterController@register');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout');

