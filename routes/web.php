<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
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

    // Route::get('/type/all', [MaterialMainTypeController::class, "all"])->name('vehicleType.main.all');

    // Route::post('/{type_id}/select/type/delete', [MaterialMainTypeController::class, 'deleteSelectedItems'])->name('vehicleType.delete.selected');
    // Route::post('/select/type/inactive', [MaterialMainTypeController::class, 'inactiveSelectedItems'])->name('vehicleType.inactive.selected');
    // Route::post('/select/type/active', [MaterialMainTypeController::class, 'activeSelectedItems'])->name('vehicleType.active.selected');

    // Route::get('/{type_slug}/main/get', [MaterialMainTypeController::class, "get"])->name('vehicleType.main.get');
});

Route::prefix('materials')->group(function () {
    Route::get('/', [MaterialController::class, "index"])->name('material.index');
    Route::get('/list/{slug}', [MaterialController::class, "withSlugIndex"])->name('material.slug.index');
    Route::get('/{slug}/all/slug', [MaterialController::class, "allWithSlug"])->name('material.all.slug');
    Route::get('/fg/all', [MaterialController::class, "finishGood"])->name('material.fg.all');
    Route::get('/all', [MaterialController::class, "all"])->name('material.all');
    Route::post('/store', [MaterialController::class, "store"])->name('material.store');
    Route::delete('/{material_id}/delete', [MaterialController::class, "delete"])->name('material.delete');
    Route::get('/{material_id}/edit', [MaterialController::class, "edit"])->name('material.edit');
    Route::get('/{material_id}/get', [MaterialController::class, "get"])->name('material.get');
    Route::get('/{material_id}/costing/print', [MaterialController::class, "print"])->name('material.costing.print');

    Route::post('/{material_id}/basic/update', [MaterialController::class, "update"])->name('material.basic.update');

    Route::get('/{material_id}/costing/getMaterials', [MaterialCostingController::class, "getMaterials"])->name('material.costing.getMaterials');
    Route::get('/{material_id}/costing/all', [MaterialCostingController::class, "all"])->name('material.costing.all');
    Route::post('/{material_id}/costing/update', [MaterialCostingController::class, "update"])->name('material.costing.update');
    Route::delete('/{costing_id}/costing/delete', [MaterialCostingController::class, "delete"])->name('material.costing.delete');
    Route::get('/{material_id}/costing/get', [MaterialCostingController::class, "get"])->name('material.costing.get');

    Route::get('/sizes/all', [MaterialSizeController::class, "all"])->name('material.size.all');
    Route::get('/{size_slug}/size/get', [MaterialSizeController::class, "get"])->name('material.size.get');

    Route::post('/{material_id}/purchasing_data/update', [MaterialController::class, "updatePurchasingData"])->name('material.purchasing_data.update');
    Route::get('/{material_id}/purchasing_data/get', [MaterialController::class, "getPurchasingData"])->name('material.purchasing_data.get');

    Route::post('/{material_id}/vendor_data/update', [MaterialController::class, "updateVendorData"])->name('material.vendor_data.update');
    Route::get('/{material_id}/vendor_data/get', [MaterialController::class, "getVendorData"])->name('material.vendor_data.get');
    Route::delete('/{vendor_id}/vendor_data/delete', [MaterialController::class, "deleteVendorData"])->name('materials.vendor_data.delete');

    Route::post('/{material_id}/mrp_data/update', [MaterialController::class, "updateMrpData"])->name('material.mrp_data.update');
    Route::get('/{material_id}/mrp_data/get', [MaterialController::class, "getMrpData"])->name('material.mrp_data.get');

    Route::post('/{material_id}/classification_data/update', [MaterialController::class, "updateClassificationData"])->name('materials.classification_data.update');
    Route::get('/{material_id}/classification_data/get', [MaterialController::class, "getClassificationData"])->name('materials.classification_data.get');
    Route::delete('/{classification_id}/classification_data/delete', [MaterialController::class, "deleteClassificationData"])->name('materials.classification_data.delete');

    Route::post('/select/material/delete', [MaterialController::class, 'deleteSelectedItems'])->name('materials.delete.selected');
    Route::post('/select/material/inactive', [MaterialController::class, 'inactiveSelectedItems'])->name('materials.inactive.selected');
    Route::post('/select/material/active', [MaterialController::class, 'activeSelectedItems'])->name('materials.active.selected');

    // Route::post('/{material_id}/update/measurement', [MeasurementController::class, "update"])->name('measurement.update');
    // Route::get('/all/measurement', [MeasurementController::class, "all"])->name('measurement.all');
    // Route::delete('/{material_id}/delete/measurement', [MeasurementController::class, "delete"])->name('measurement.delete');
    // Route::post('/{material_id}/update/foreigntrade', [ForeignTradeController::class, "update"])->name('foreigntrade.update');
    // Route::get('/{material_id}/get/foreigntrade', [ForeignTradeController::class, "get"])->name('foreigntrade.get');
    // Route::post('/{material_id}/update/customeduty', [CustomDutyController::class, "update"])->name('customeduty.update');
    // Route::get('/{material_id}/all/customeduty', [CustomDutyController::class, "all"])->name('customeduty.all');
    // Route::delete('/{material_id}/delete/customeduty', [CustomDutyController::class, "delete"])->name('customeduty.delete');
    // Route::post('/{material_id}/update/testreport', [TestReportController::class, "update"])->name('testreport.update');
    // Route::get('/{material_id}/all/testreport', [TestReportController::class, "all"])->name('testreport.all');
    // Route::delete('/{material_id}/delete/testreport', [TestReportController::class, "delete"])->name('testreport.delete');
    // Route::post('/{material_id}/update/warehousedata', [WarehouseDataController::class, "update"])->name('warehousedata.update');
    // Route::get('/{material_id}/get/warehousedata', [WarehouseDataController::class, "get"])->name('warehousedata.get');
});

require __DIR__.'/auth.php';
