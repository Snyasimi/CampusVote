<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
	
	SecurityController,
	UserController,
	VotingController,
	CandidatesController,
	ApplicationsController,
	PositionsController,
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

Route::controller(SecurityController::class)->group(function(){

	Route::get('Signup','signUpPage')->name('signUpPage');
	Route::post('register','registerUser')->name('registerUser');
	Route::get('login','loginPage')->name('loginPage');
	Route::post('authenticate','authenticate')->name('authenticateUser');
	Route::post('logout','logout')->name('logout');
}
);

// Authenticated user routes
Route::middleware('auth')->group(function () {

	Route::resource('user', UserController::class);
	Route::resource('candidate', CandidatesController::class);

	// Voting routes — also guard against already voted
	Route::middleware('has-not-voted')->group(function () {
		Route::get('vote', [VotingController::class, 'index'])->name('vote.index');
		Route::post('vote', [VotingController::class, 'store'])->name('vote.store');
	});
});

// Admin routes
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {

	Route::get('/', [UserController::class, 'adminHome'])->name('home');

	// Candidate applications (approve / reject)
	Route::resource('applications', ApplicationsController::class)->only(['index', 'update']);

	// Positions management
	Route::resource('positions', PositionsController::class)->only(['index', 'store', 'destroy']);
});
