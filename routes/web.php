<?php

use Spatie\FlareClient\View;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('home', [
        'title' => 'Home Page'
    ]);
});

Route::get('/about', function(){
    return view('about', [
        'title' => 'About'
    ]);
});

Route::get('/events/event-1', function(){
    return view('event.event1', [
        'title' => 'Event'
    ]);
});
Route::get('/events/event-2', function(){
    return view('event.event2', [
        'title' => 'Event'
    ]);
});


Route::get('/login', function(){
    return view('login', [
        'title' => 'Login'
    ]);
});

Route::get('/dashboard/courses', function(){
    return view('dashboard.courses', [
        'title' => 'Course'
    ]);
})->middleware('auth');

Route::get('/events', function(){
    return view('events', [
        'title' => 'Event'
    ]);
});

Route::get('/dashboard/handbooks', function(){
    return view('dashboard.handbooks', [
        'title' => 'Handbook'
    ]);
})->middleware('auth');

// login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);


Route::get('/dashboard', function(){
    return view('dashboard.index',[
        'title' => 'Dashboard | Profil'
    ]);
})->middleware('auth');

Route::get('/courses/html', function(){
    return view('dashboard.coding.html',[
        'title' => 'HTML'
    ]);
})->middleware('auth');

Route::get('/courses/figma', function(){
    return view('dashboard.desain.figma',[
        'title' => 'Figma'
    ]);
})->middleware('auth');