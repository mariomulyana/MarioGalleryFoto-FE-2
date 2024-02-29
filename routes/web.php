<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ExploreController;
use App\Http\Controllers\PengikutController;
use App\Http\Controllers\PinController;
use Illuminate\Support\Facades\Route;

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
    return view('page.index');
});

Route::get('/register', [AuthController::class, 'register']);
Route::post('/registerd', [AuthController::class, 'registered']);

Route::get('/login', function () {
    return view('page.login');
})->name('login');
Route::middleware('auth')->group(function(){

    Route::get('/explore', function () {
        return view('page.explore');
    });
    Route::get('/getDataExplore', [ExploreController::class, 'getdata']);
    Route::get('/getDataFavorite', [ExploreController::class,'getdatafavorite']);
    Route::post('/likefotos', [ExploreController::class, 'likesfoto']);
    Route::post('/pinned', [ExploreController::class,'pinned']);
    Route::get('/pinned', function () {
        return view('page.pinned');
    });
    Route::get('/pin', function () {
        return view('page.pin');
    });
    Route::get('/pinned', function () {
        return view('page.pinned');
    });
    Route::get('/profil', function () {
        return view('page.profil');
    });
    Route::get('/otherpin/getDataPin/{id}', [PinController::class,'getdatapin']);
    Route::get('/otherpin/{id}', function () {
        return view('page.otherpin');
    });
    Route::get('/mypin', function () {
        return view('page.mypin');
    });
    Route::get('/changepassword', function () {
        return view('page.changepassword');
    });
    Route::get('/pengikut/{id}', function () {
        return view('page.pengikut');
    });
    Route::get('/mengikuti/{id}', function () {
        return view('page.mengikuti');
    });
    Route::get('/getdataotherpinexplore/{id}', [PinController::class,'getdata']);
    Route::post('/exploredetail/ikuti', [ExploreController::class,'ikuti']);
    Route::post('/exploredetail/kirimkomentar', [ExploreController::class,'kirimkomentar']);
    Route::get('/exploredetail/getComment/{id}', [ExploreController::class,'ambildatakomentar']);
    Route::get('/exploredetail/{id}/getdatadetail', [ExploreController::class,'getdatadetail']);
    Route::get('/exploredetail/{id}', function () {
        return view('page.exploredetail');
    });
    Route::get('/logout', [AuthController::class, 'logout']);
    Route::get('/pengikut/getdatapengikut/{id}', [PengikutController::class,'getdatapengikut']);

});

Route::post('/auth', [AuthController::class, 'auth']);





