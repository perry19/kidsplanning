<?php

use App\Http\Controllers\CalendarController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\FinanceController;
use App\Http\Controllers\PlanningController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\KeeperController;
use App\Http\Controllers\KidController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;

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
})->name('/');;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/contact-us', [PageController::class, 'contactUs'])->name('contact-us');
Route::get('/calendar', [CalendarController::class, 'index'])->name('calendar');
Route::resources([
    'kids' => KidController::class,
    'keepers' => KeeperController::class,
    'tasks' => TaskController::class,
    'planning' => PlanningController::class,
    'finances' => FinanceController::class,
    'chats' => ChatController::class,
    'posts' => BlogController::class,
]);