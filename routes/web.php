<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TenantController; 
use App\Http\Controllers\MailController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;


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

Route::get('/dashboard', function () {
    return view('dashboard');

    
})->middleware(['auth', 'verified'])->name('dashboard'); 

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');




    
    Route::get('add', 'AdminController@add'); 
    Route::resource('admin', AdminController::class); 
    Route::resource('tenants', TenantController::class); 

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/tenants/{id}', [TenantController::class, 'show'])->name('tenants.view');


    // Route::get('send-email', [MailController::class, 'index']); 
    






});



// Route::get('/department', function () {
//     return view('department');
// });




require __DIR__.'/auth.php';
