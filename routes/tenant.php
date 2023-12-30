<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;
use App\Http\Controllers\themController;
use App\Http\Controllers\Tenantcontroller;
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
   
    Route::get('/', [themController::class, 'themdomain']);

//them2 product
Route::get('/productThem2/{id}',[themController::class, 'productThem2'])->name('productthem2');
//them1 product
Route::get('/productThem1/{id}',[themController::class, 'productThem1'])->name('productthem1');
//them3 product
Route::get('/productThem3/{id}',[themController::class, 'productThem3'])->name('productthem3');

});
