<?php

use App\Mail\MyEmail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SecretController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Api\TaskController;
use App\Http\Controllers\RegisterController;

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
Route::resource("students",StudentController::class)->middleware('auth')->names('students');
Route::view("/home","home")->name("home");
Route::view("/about","about")->middleware('checkAge')->name("about");

Route::get("/secret",[SecretController::class,"storeSecret"])->name("secret");


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::name('user.')->group(function(){
//     Route::view("/home",'home')->middleware('auth')->name('home');
//     Route::get('/registration', function(){
//         if(Auth::check()){
//             return redirect(route('user.home'));
//         }
//         return view('auth.register');
//     })->name('register');
//     Route::post('/registration',[RegisterController::class,'save']);
// });

// Route::get("/about", function(){
   
// })->middleware('auth');


// Route::prefix('api')->group(function(){
//     Route::get('/tasks',[TaskController::class,'index']);
//     Route::post('/tasks',[TaskController::class,'store']);
// });
Route::get('/testroute', function(){
    $name = "Funny Coder";
    Mail::to('ehovsepyan6@gmail.com')->send(new MyEmail($name));
}); 