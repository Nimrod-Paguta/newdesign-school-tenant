<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;
use App\Http\Controllers\App\{
    ProfileController, 
    UserController, 
    TeacherController
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
    Route::get('/',function(){
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

        Route::resource('teacher', TeacherController::class)->only([
            'index', 'store'
        ]);
      
        Route::get('/teacher', 'TeacherController@index')->name('app.teacher');

        

    });

    

 

    Route::get('/teacher', function () {
        return view('app.teacher');
    })->name('app.teacher'); 

   


    Route::get('/student', function () {
        return view('app.student');
    })->name('app.student'); 
    
    require __DIR__.'/tenant-auth.php';
    

});
