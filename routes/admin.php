<?php

use App\Http\Controllers\Web\ActivityController;
use App\Http\Controllers\Web\CustomerController;
use App\Http\Controllers\Web\EmployerController;
use App\Http\Controllers\Web\OwnerController;
use App\Http\Controllers\Web\ProductController;
use App\Http\Controllers\Web\StoreController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Session;

// Route::domain('app.strm.test/')->group(function () {
    //Language Change
    Route::get('lang/{locale}', function ($locale) {
        if (!in_array($locale, ['en', 'de', 'es', 'fr', 'pt', 'cn', 'ae'])) {
            abort(400);
        }
        Session()->put('locale', $locale);
        Session::get('locale');
        return redirect()->back();
    })->name('lang');
    Route::middleware('admin')->group(function () {
        Route::prefix('activities')->group(function () {
            Route::get('/create', [ActivityController::class, 'create'])->name('activities.create');
            Route::get('{activityId}/edit/', [ActivityController::class, 'edit'])->name('activities.edit');
            Route::get('list', [ActivityController::class, 'index'])->name('activities.list');
        });
        Route::prefix('campaigns')->group(function () {
            Route::view('/', 'campaigns.list')->name('campaigns.list');
            Route::view('/create', 'campaigns.create')->name('campaigns.create');
        });
        Route::prefix('stores')->group(function () {
            Route::get('/create', [StoreController::class, 'create'])->name('stores.create');
            Route::get('{storeId}/edit/', [StoreController::class, 'edit'])->name('stores.edit');
            Route::get('list', [StoreController::class, 'index'])->name('stores.list');
        });

        Route::prefix('owners')->group(function () {
            Route::get('/create', [OwnerController::class, 'create'])->name('owners.create');
            Route::get('{ownerId}/edit/', [OwnerController::class, 'edit'])->name('owners.edit');
            Route::get('list', [OwnerController::class, 'index'])->name('owners.list');
            Route::get('detail/{id}', [OwnerController::class, 'show'])->name('owners.show');
        });

        Route::prefix('employers')->group(function () {
            Route::get('/list', [EmployerController::class, 'index'])->name('employers.list');
            Route::get('/create', [EmployerController::class, 'create'])->name('employers.create');
            Route::get('{employerId}/edit/', [EmployerController::class, 'edit'])->name('employers.edit');
        });

        Route::prefix('customers')->group(function () {
            Route::get('/', [CustomerController::class, 'index'])->name('customers.list');
            Route::get('/create', [CustomerController::class, 'create'])->name('customers.create');
            Route::get('{customerId}/edit/', [CustomerController::class, 'edit'])->name('customers.edit');
        });

        Route::prefix('products')->group(function () {
            Route::get('/list', [ProductController::class, 'index'])->name('products.list');
            Route::get('/create', [ProductController::class, 'create'])->name('products.create');
            Route::get('{employerId}/edit/', [ProductController::class, 'edit'])->name('products.edit');
        });
    });
// });


Route::get('/', function () {
    return redirect()->route('index');
})->name('/');

Route::get('/cgu', function () {
    return view('cgu');
})->name('/');






Route::prefix('dashboard')->group(function () {
    Route::view('index', 'dashboard.index')->name('index');
    Route::view('dashboard-02', 'dashboard.dashboard-02')->name('dashboard-02');
});
