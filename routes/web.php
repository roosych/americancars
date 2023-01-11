<?php

use App\Http\Controllers\CatalogController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LangController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])->name('index');

Route::prefix('cars')
    ->controller(CatalogController::class)
    ->group(function () {
    Route::get('{brand:slug}', 'brand')->name('brand');
    Route::get('{brand:slug}/{carmodel:slug}', 'carmodel')->name('carmodel');
    Route::get('{brand:slug}/{carmodel:slug}/{car}', 'car')->name('car');

    Route::get('all', 'all')->name('cars.all');
});

Route::get('lang/change', [LangController::class, 'change'])->name('changeLang');


Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false,
    'confirm' => false,
]);

Route::prefix('dashboard')->middleware(['auth', 'admin'])->group(function(){
    Route::get('/', [App\Http\Controllers\Admin\IndexController::class, 'index'])->name('dashboard');

    Route::get('brands', [App\Http\Controllers\Admin\BrandController::class, 'index'])->name('brands');
    Route::get('brand/add', [App\Http\Controllers\Admin\BrandController::class, 'add'])->name('brand.add');
    Route::post('brand/store', [App\Http\Controllers\Admin\BrandController::class, 'store'])->name('brand.store');

    Route::get('carmodels', [App\Http\Controllers\Admin\CarmodelController::class, 'index'])->name('carmodels');
    Route::get('carmodel/add', [App\Http\Controllers\Admin\CarmodelController::class, 'add'])->name('carmodel.add');
    Route::post('carmodel/store', [App\Http\Controllers\Admin\CarmodelController::class, 'store'])->name('carmodel.store');

    Route::get('fuels', [App\Http\Controllers\Admin\FuelController::class, 'index'])->name('fuels');
    Route::get('fuel/add', [App\Http\Controllers\Admin\FuelController::class, 'add'])->name('fuel.add');
    Route::post('fuel/store', [App\Http\Controllers\Admin\FuelController::class, 'store'])->name('fuel.store');

    Route::get('transmissions', [App\Http\Controllers\Admin\TransmissionController::class, 'index'])->name('transmissions');
    Route::get('transmission/add', [App\Http\Controllers\Admin\TransmissionController::class, 'add'])->name('transmission.add');
    Route::post('transmission/store', [App\Http\Controllers\Admin\TransmissionController::class, 'store'])->name('transmission.store');

    Route::get('drives', [App\Http\Controllers\Admin\DriveController::class, 'index'])->name('drives');
    Route::get('drive/add', [App\Http\Controllers\Admin\DriveController::class, 'add'])->name('drive.add');
    Route::post('drive/store', [App\Http\Controllers\Admin\DriveController::class, 'store'])->name('drive.store');

    Route::get('cars', [App\Http\Controllers\Admin\CarController::class, 'index'])->name('cars');
    Route::get('car/add', [App\Http\Controllers\Admin\CarController::class, 'add'])->name('car.add');
    Route::get('car/{car}', [App\Http\Controllers\Admin\CarController::class, 'show'])->name('car.show');
    Route::post('car/store', [App\Http\Controllers\Admin\CarController::class, 'store'])->name('car.store');
    Route::post('car/update', [App\Http\Controllers\Admin\CarController::class, 'update'])->name('car.update');

    Route::post('car/fetchcarmodel', [App\Http\Controllers\Admin\CarController::class, 'fetchCarmodel'])->name('fetch.carmodel');

    Route::get('settings', [App\Http\Controllers\Admin\IndexController::class, 'setts'])->name('setts.index');
    Route::post('settings', [App\Http\Controllers\Admin\IndexController::class, 'settstore'])->name('setts.store');
});

