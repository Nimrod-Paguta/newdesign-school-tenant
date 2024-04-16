<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;
use App\Http\Controllers\App\{
    ProfileController, 
    UserController, 
    TeacherController, 
    StudentController
};





/*
|--------------------------------------------------------------------------
| Tenant Routes
|--------------------------------------------------------------------------
|
| Here you can register the tenant routes for your application.
| These routes are loaded by the TenantRouteServiceProvider.
|
| Feel free to customize them however you want. Good luck!
|
*/
Route::middleware([
    'web',
    InitializeTenancyByDomain::class,
    PreventAccessFromCentralDomains::class,
])->group(function () {
    Route::get('/', function () {
        return view('app.welcome');
    });

    Route::get('/dashboard', function () {
        return view('app.dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');

    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

        Route::group(['middleware' => ['role:admin']], function () {
            Route::resource('users', UserController::class);


        });
    });

   
    
  
    

    Route::get('/teacher', function () {
        return view('app.teacher');
    }); 
    Route::resource('teacher', TeacherController::class)->only('index');
    Route::resource('teacher', TeacherController::class)->only('store');
    
    // -------------------------------------------------------
    // crud 
    
    Route::get('add', 'StudentController@add'); 
    Route::get('/students', [StudentController::class, 'index'])->name('app.students');
    Route::resource('students', StudentController::class);
    Route::get('/students/{id}/edit', [StudentController::class, 'edit'])->name('students.edit');
    Route::put('/students/{id}', [StudentController::class, 'update'])->name('students.update');
    


    
    require __DIR__.'/tenant-auth.php';
});


