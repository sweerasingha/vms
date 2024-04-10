<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\VehicleCostingController;
use App\Http\Controllers\VehicleSizeController;
use App\Http\Controllers\VehicleTypeController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', [HomeController::class, "index"])->name('dashboard');

// Vehicle-type
Route::prefix('vehicle-type')->group(function () {
    // Route::get('/', [VehicleTypeController::class, "index"])->name('vehicleType.index');
    Route::get('/all', [VehicleTypeController::class, "all"])->name('vehicleType.all');
    // Route::get('/all/list', [VehicleTypeController::class, "allList"])->name('vehicleType.all.list');
    // Route::post('/store', [VehicleTypeController::class, "store"])->name('vehicleType.store');
    // Route::delete('/{type_id}/delete', [VehicleTypeController::class, "delete"])->name('vehicleType.delete');
    // Route::get('/{type_id}/get', [VehicleTypeController::class, "get"])->name('vehicleType.get');
    // Route::post('/{type_id}/update', [VehicleTypeController::class, "update"])->name('vehicleType.update');

    // Route::get('/type/all', [vehicleMainTypeController::class, "all"])->name('vehicleType.main.all');

    // Route::post('/{type_id}/select/type/delete', [vehicleMainTypeController::class, 'deleteSelectedItems'])->name('vehicleType.delete.selected');
    // Route::post('/select/type/inactive', [vehicleMainTypeController::class, 'inactiveSelectedItems'])->name('vehicleType.inactive.selected');
    // Route::post('/select/type/active', [vehicleMainTypeController::class, 'activeSelectedItems'])->name('vehicleType.active.selected');

    // Route::get('/{type_slug}/main/get', [vehicleMainTypeController::class, "get"])->name('vehicleType.main.get');
});

Route::prefix('vehicles')->group(function () {
    Route::get('/', [VehicleController::class, "index"])->name('vehicle.index');
    Route::get('/list/{slug}', [VehicleController::class, "withSlugIndex"])->name('vehicle.slug.index');
    Route::get('/{slug}/all/slug', [VehicleController::class, "allWithSlug"])->name('vehicle.all.slug');
    Route::get('/fg/all', [VehicleController::class, "finishGood"])->name('vehicle.fg.all');
    Route::get('/all', [VehicleController::class, "all"])->name('vehicle.all');
    Route::post('/store', [VehicleController::class, "store"])->name('vehicle.store');
    Route::delete('/{vehicle_id}/delete', [VehicleController::class, "delete"])->name('vehicle.delete');
    Route::get('/{vehicle_id}/edit', [VehicleController::class, "edit"])->name('vehicle.edit');
    Route::get('/{vehicle_id}/get', [VehicleController::class, "get"])->name('vehicle.get');
    Route::get('/{vehicle_id}/costing/print', [VehicleController::class, "print"])->name('vehicle.costing.print');

    Route::post('/{vehicle_id}/basic/update', [VehicleController::class, "update"])->name('vehicle.basic.update');

    Route::get('/{vehicle_id}/costing/getvehicles', [VehicleCostingController::class, "getvehicles"])->name('vehicle.costing.getvehicles');
    Route::get('/{vehicle_id}/costing/all', [VehicleCostingController::class, "all"])->name('vehicle.costing.all');
    Route::post('/{vehicle_id}/costing/update', [VehicleCostingController::class, "update"])->name('vehicle.costing.update');
    Route::delete('/{costing_id}/costing/delete', [VehicleCostingController::class, "delete"])->name('vehicle.costing.delete');
    Route::get('/{vehicle_id}/costing/get', [VehicleCostingController::class, "get"])->name('vehicle.costing.get');

    Route::get('/sizes/all', [VehicleSizeController::class, "all"])->name('vehicle.size.all');
    Route::get('/{size_slug}/size/get', [VehicleSizeController::class, "get"])->name('vehicle.size.get');

    Route::post('/{vehicle_id}/purchasing_data/update', [VehicleController::class, "updatePurchasingData"])->name('vehicle.purchasing_data.update');
    Route::get('/{vehicle_id}/purchasing_data/get', [VehicleController::class, "getPurchasingData"])->name('vehicle.purchasing_data.get');

    Route::post('/{vehicle_id}/vendor_data/update', [VehicleController::class, "updateVendorData"])->name('vehicle.vendor_data.update');
    Route::get('/{vehicle_id}/vendor_data/get', [VehicleController::class, "getVendorData"])->name('vehicle.vendor_data.get');
    Route::delete('/{vendor_id}/vendor_data/delete', [VehicleController::class, "deleteVendorData"])->name('vehicles.vendor_data.delete');

    Route::post('/{vehicle_id}/mrp_data/update', [VehicleController::class, "updateMrpData"])->name('vehicle.mrp_data.update');
    Route::get('/{vehicle_id}/mrp_data/get', [VehicleController::class, "getMrpData"])->name('vehicle.mrp_data.get');

    Route::post('/{vehicle_id}/classification_data/update', [VehicleController::class, "updateClassificationData"])->name('vehicles.classification_data.update');
    Route::get('/{vehicle_id}/classification_data/get', [VehicleController::class, "getClassificationData"])->name('vehicles.classification_data.get');
    Route::delete('/{classification_id}/classification_data/delete', [VehicleController::class, "deleteClassificationData"])->name('vehicles.classification_data.delete');

    Route::post('/select/vehicle/delete', [VehicleController::class, 'deleteSelectedItems'])->name('vehicles.delete.selected');
    Route::post('/select/vehicle/inactive', [VehicleController::class, 'inactiveSelectedItems'])->name('vehicles.inactive.selected');
    Route::post('/select/vehicle/active', [VehicleController::class, 'activeSelectedItems'])->name('vehicles.active.selected');

    // Route::post('/{vehicle_id}/update/measurement', [MeasurementController::class, "update"])->name('measurement.update');
    // Route::get('/all/measurement', [MeasurementController::class, "all"])->name('measurement.all');
    // Route::delete('/{vehicle_id}/delete/measurement', [MeasurementController::class, "delete"])->name('measurement.delete');
    // Route::post('/{vehicle_id}/update/foreigntrade', [ForeignTradeController::class, "update"])->name('foreigntrade.update');
    // Route::get('/{vehicle_id}/get/foreigntrade', [ForeignTradeController::class, "get"])->name('foreigntrade.get');
    // Route::post('/{vehicle_id}/update/customeduty', [CustomDutyController::class, "update"])->name('customeduty.update');
    // Route::get('/{vehicle_id}/all/customeduty', [CustomDutyController::class, "all"])->name('customeduty.all');
    // Route::delete('/{vehicle_id}/delete/customeduty', [CustomDutyController::class, "delete"])->name('customeduty.delete');
    // Route::post('/{vehicle_id}/update/testreport', [TestReportController::class, "update"])->name('testreport.update');
    // Route::get('/{vehicle_id}/all/testreport', [TestReportController::class, "all"])->name('testreport.all');
    // Route::delete('/{vehicle_id}/delete/testreport', [TestReportController::class, "delete"])->name('testreport.delete');
    // Route::post('/{vehicle_id}/update/warehousedata', [WarehouseDataController::class, "update"])->name('warehousedata.update');
    // Route::get('/{vehicle_id}/get/warehousedata', [WarehouseDataController::class, "get"])->name('warehousedata.get');
});

require __DIR__.'/auth.php';
