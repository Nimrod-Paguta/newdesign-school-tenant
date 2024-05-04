<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;
use App\Http\Controllers\App\{
    ProfileController, 
    UserController, 
    TeacherController, 
    StudentController, 
    DepartmentAdminController
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
            Route::get('users', [UserController::class, 'index'])->name('users.index');
            Route::get('/create', [UserController::class, 'create'])->name('users.create');
            Route::post('users', [UserController::class, 'store'])->name('users.store');
            Route::get('users/{user}', [UserController::class, 'show'])->name('users.show');
            Route::get('{user}edit', [UserController::class, 'edit'])->name('users.edit');
            Route::put('users/{user}', [UserController::class, 'update'])->name('users.update');
            Route::put('users/payment/{id}', [UserController::class, 'payment'])->name('users.payment');

            Route::delete('users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
        });
        
    });

    
   
    
  
    

    Route::get('/teacher', function () {
        return view('app.teacher');
    }); 
    // Route::resource('teacher', TeacherController::class)->only('index');
    // Route::resource('teacher', TeacherController::class)->only('store');
    

    // -------------------------------------------------------
    // crud 

    
    
    Route::get('add', 'StudentController@add'); 
    Route::get('/students', [StudentController::class, 'index'])->name('app.students');
    Route::resource('students', StudentController::class);
    Route::get('/students-edit{id}', [StudentController::class, 'edit'])->name('students.edit');
    Route::put('/students/{id}', [StudentController::class, 'update'])->name('students.update');


    Route::get('add', 'TeacherController@add'); 
    Route::get('/teacher', [TeacherController::class, 'index'])->name('app.teacher');
    Route::resource('teacher', TeacherController::class);
    Route::get('/departmentadmin', [DepartmentAdminController::class, 'index'])->name('departmentadmin.index');
    Route::get('/payment/{id}', [UserController::class, 'paymentroute'])->name('payment.payment');


    Route::get('/department{id}', [DepartmentAdminController::class, 'show'])->name('departmentadmin.view');
    Route::get('/{id}edits', [DepartmentAdminController::class, 'edit'])->name('departmentadmin.edit');

    Route::put('/department-update{id}', [DepartmentAdminController::class, 'update'])->name('departmentadmin.update');


    Route::get('/user-view{id}', [UserController::class, 'show'])->name('users.view');

    
    require __DIR__.'/tenant-auth.php';
});



