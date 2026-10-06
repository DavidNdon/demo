<?php
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Redirect root to login
Route::get('/', function () {
    return redirect()->route('login');
});

// --- GUEST ROUTES (Only accessible when NOT logged in) ---
Route::middleware(['guest'])->controller(AuthController::class)->group(function () {
    Route::get('/register','showRegister')->name('register');
    Route::post('/register','register')->name('register.submit');

    Route::get('/login', 'showLogin')->name('login');
    Route::post('/login', 'login')->name('login.submit');
});

// --- AUTHENTICATED ROUTES (Only accessible when LOGGED IN) ---
Route::middleware(['auth'])-> controller(AuthController::class)->group(function () {
    $place = AuthController::class;
    Route::get('/dashboard',  'dashboard')->name('dashboard');
    Route::post('/logout',  'logout')->name('logout');
     //products
    Route::get('/products', function(){
        return view('products.products');
    });
});