<?php
use App\http\Controllers\HomeController;
use App\http\Controllers\AboutUsController;
use App\http\Controllers\ContactUsController;
use Illuminate\Support\Facades\Route;

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

Route::get('/home', [HomeController::class, 'index']);
Route::get('/about-us', [AboutUsController::class, 'index']);
Route::get('/contact-us', [ContactUsController::class, 'index']);

Route::get('news/{id}', function ($id){
    return view('news', ['new'=>$id]);
});

Route::prefix('product')->group(function () {
    Route::get('/marbel-edu-games', function () {
        $prd = "Marbel Edu Games";
        return view('product', ['produk'=>$prd]);
    });

    Route::get('/marbel-and-friends-kids-games', function () {
        $prd = "Marbel and Friends Kids Games";
        return view('product', ['produk'=>$prd]);
    });

    Route::get('/riri-story-books', function () {
        $prd = "Riri Story Books";
        return view('product', ['produk'=>$prd]);
    });

    Route::get('/kolak-kids-songs', function () {
        $prd = "Kolak Kids Songs";
        return view('product', ['produk'=>$prd]);
    });
});

Route::prefix('program')->group(function () {
    Route::get('/karir', function () {
        $prg = "Karir";
        return view('program', ['programs'=>$prg]);
    });

    Route::get('/magang', function () {
        $prg = "Magang";
        return view('program', ['programs'=>$prg]);
    });

    Route::get('/kunjungan', function () {
        $prg = "Kunjungan";
        return view('program', ['programs'=>$prg]);
    });
});

