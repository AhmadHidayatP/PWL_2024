<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController; 

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::resource('photos', PhotoController::class); 

Route::resource('photos', PhotoController::class)->only([ 
    'index', 'show' 
]); 
Route::resource('photos', PhotoController::class)->except([ 
    'create', 'store', 'update', 'destroy' 
]); 

Route::get('/', [App\Http\Controllers\HomeController::class,'index']);

Route::get('/about', [App\Http\Controllers\AboutController::class,'about']);

Route::get('/articles/{id}', [App\Http\Controllers\ArticleController::class,'articles']);

Route::get('hello',[App\Http\Controllers\WelcomeController::class,'hello']);

Route::get('/world', function () { 
    return 'World'; 
});
Route::get('/posts/{post}/comments/{comment}', function 
($postId, $commentId) { 
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId; 
});
Route::get('/user/{name?}', function ($name='John') { 
    return 'Nama saya '.$name; 
}); 

Route::get('/greeting', [App\Http\Controllers\WelcomeController::class, 'greeting']);  