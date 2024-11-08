<?php

use App\Http\Controllers\TicketTokenController;
use App\Http\Controllers\UserController;
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

Route::get('/about', function () {
    return view('about');
});

Route::get('/operatormanagequeue', function () {
    return view('operatormanagequeue');
});

Route::get('/tokenservice', function () {
    return view('token-service');
});

Route::get('/trendanalysis', function () {
    return view('reports.trend-analysis');
});


Route::get('/servicereport', function () {
    return view('reports.service-report');
});

Route::get('/register', function () {
    return view('login.register');
});

Route::get('/login', function () {
    return view('login.login');
});
Route::get('/ticket', function () {
    return view('customer.my-token');
});

Route::get('/support', function () {
    return view('support.support');
});


Route::get('/report', function () {
    return view('admin.report-layout');
});

Route::post('/register', [UserController::class, 'register'])->name('register');
Route::post('/login', [UserController::class, 'login'])->name('login');



Route::get('/dashboard', [TicketTokenController::class, 'listTokens'])->name('dashboard');
Route::get('/services', [TicketTokenController::class, 'index'])->name('services');
Route::get('/', [TicketTokenController::class, 'index'])->name('home');
Route::post('/generate-token', [TicketTokenController::class, 'generateToken'])->name('generate-token');
Route::post('/update-status', [TicketTokenController::class, 'statusUpdate'])->name('update-status');




