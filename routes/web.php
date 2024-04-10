<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VehicleTypeController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', [HomeController::class, "index"])->name('dashboard');

// Vehicle-type
Route::prefix('material-type')->group(function () {
    // Route::get('/', [VehicleTypeController::class, "index"])->name('vehicleType.index');
    Route::get('/all', [VehicleTypeController::class, "all"])->name('vehicleType.all');
    // Route::get('/all/list', [VehicleTypeController::class, "allList"])->name('vehicleType.all.list');
    // Route::post('/store', [VehicleTypeController::class, "store"])->name('vehicleType.store');
    // Route::delete('/{type_id}/delete', [VehicleTypeController::class, "delete"])->name('vehicleType.delete');
    // Route::get('/{type_id}/get', [VehicleTypeController::class, "get"])->name('vehicleType.get');
    // Route::post('/{type_id}/update', [VehicleTypeController::class, "update"])->name('vehicleType.update');

    // Route::get('/type/all', [MaterialMainTypeController::class, "all"])->name('vehicleType.main.all');

    // Route::post('/{type_id}/select/type/delete', [MaterialMainTypeController::class, 'deleteSelectedItems'])->name('vehicleType.delete.selected');
    // Route::post('/select/type/inactive', [MaterialMainTypeController::class, 'inactiveSelectedItems'])->name('vehicleType.inactive.selected');
    // Route::post('/select/type/active', [MaterialMainTypeController::class, 'activeSelectedItems'])->name('vehicleType.active.selected');

    // Route::get('/{type_slug}/main/get', [MaterialMainTypeController::class, "get"])->name('vehicleType.main.get');
});

require __DIR__.'/auth.php';
