<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
	
	SecurityController,
	UserController,
	VotingController,
	CandidatesController,
	FaqController,
};
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

Route::get('/diddy', function () {
    return view('auth-view.login');
});

Route::get('/user-home', function () {
    return view('user-view.home-page');
});
Route::resource('candidate',CandidatesController::class);
Route::resource('user',UserController::class);
Route::resource('vote',VotingController::class);
Route::get('faq', [FaqController::class, 'index'])->name('faq');

Route::controller(SecurityController::class)->group(function(){

	Route::get('Signup','signUpPage')->name('signUpPage');
	Route::post('register','registerUser')->name('registerUser');
	Route::get('login','loginPage')->name('loginPage');
	Route::post('authenticate','authenticate')->name('authenticateUser');
	Route::post('logout','logout')->name('logout');
}
);
