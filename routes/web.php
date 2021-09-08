<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ServiceController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::any('/client', function () {
    return view('clients.list');
})->middleware(['auth'])->name('client');


Route::get('/newClient', [ClientController::class, 'create'])
    ->middleware('auth')
    ->name('clients.new');

Route::post('/storeClient', [ClientController::class, 'store'])
    ->middleware('auth')
    ->name('client.store');



Route::any('/car', function () {
    return view('cars.list');
})->middleware(['auth'])->name('car');


Route::get('/newCar', [CarController::class, 'create'])
    ->middleware('auth')
    ->name('cars.new');

Route::post('/storeCar', [CarController::class, 'store'])
    ->middleware('auth')
    ->name('cars.store');

Route::any('/container', function () {
    return view('containers.list');
})->middleware(['auth'])->name('container');


Route::get('/newContainer', [ContainerController::class, 'create'])
    ->middleware('auth')
    ->name('containers.new');

Route::post('/storeContainer', [ContainerController::class, 'store'])
    ->middleware('auth')
    ->name('containers.store');



//Route::resource('drivers', DriverController::class);
//Route::get('get-drivers', [DriverController::class, 'getDrivers'])->name('get-drivers');

Route::any('/service', function () {
    return view('services.list');
})->middleware(['auth'])->name('service');


Route::get('/newService', [ServiceController::class, 'create'])
    ->middleware('auth')
    ->name('services.new');

Route::post('/storeService', [ServiceController::class, 'store'])
    ->middleware('auth')
    ->name('services.store');

// drivers
Route::any('/driver', function () {
    return view('drivers.list');
})->middleware(['auth'])->name('driver');


Route::get('/newDriver', [DriverController::class, 'create'])
    ->middleware('auth')
    ->name('drivers.new');

Route::post('/storeDriver', [DriverController::class, 'store'])
    ->middleware('auth')
    ->name('drivers.store');



// tasks
Route::any('/task', function () {
    return view('tasks.list');
})->middleware(['auth'])->name('task');


Route::get('/newTask', [TaskController::class, 'create'])
    ->middleware('auth')
    ->name('tasks.new');

Route::post('/storeTask', [TaskController::class, 'store'])
    ->middleware('auth')
    ->name('tasks.store');





/* Drivers Routes */
Route::get('drivers/data', [DriverController::class, 'data'])->name("subscriptions");
Route::get('drivers', [DriverController::class, 'index']);
Route::get('driver/create', [DriverController::class, 'create']);
Route::post('driver/store', [DriverController::class, 'store'])->name('driver.store');
Route::get('driver/edit/{id}', [DriverController::class, 'edit']);
Route::post('driver/update/{id}', [DriverController::class, 'update'])->name('driver.update');
Route::get('driver/delete', [DriverController::class, 'delete'])->name('driver.delete');

require __DIR__.'/auth.php';
