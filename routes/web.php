<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MusicController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\StoryController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\YogaController;

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
Route::get('/dash', function () {
    return view('dashboard');
});
Route::get('/manage', function () {
    return view('showTables');
});
Route::get('/manageactivity', function () {
    return view('showActivity');
});
// Route::get('/adduserform', function () {
//     return view('addUser');
// });

// Route::get('/manageuser',[UserController::class,'showUserDetails']);
// Route::post('/adduser',[UserController::class,'addUser']);
// Route::get('deluser/{$id}',function(){
//     echo "delete";
// });

// Route::controller(UserController::class)->group(function(){
//     Route::get('/adduserform','addUserForm');
//     Route::get('/manageuser','showUserDetails');
//     Route::post('/adduser','addUser');
//    Route::delete('deleteuser/{id}','deleteUser');
// });



// User Details management urls with the help of resource controller
Route::resource('user',UserController::class);


// Music management urls with help of resource controller
Route::resource('music',MusicController::class);

// Video management urls with help of resource controller
Route::resource('video',VideoController::class);

// Story management urls with help of resource controller
Route::resource('story',StoryController::class);

// Quote management urls with help of resource controller
Route::resource('quote',QuoteController::class);

// Yoga management urls with help of resource controller
Route::resource('yoga',YogaController::class);