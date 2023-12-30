<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserDeviceAPIController;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\StoreController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('user-device/register', [UserDeviceAPIController::class, 'registerDevice']);
Route::get('user-device/{playerId}/update-status', [UserDeviceAPIController::class, 'updateNotificationStatus']);
Route::apiresource('products', ProductController::class);
Route::get('p', [ProductController::class, 'p']);
Route::get('store', [StoreController::class, 'index']);
Route::Post('addstore', [StoreController::class, 'store']);
