<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ProductsCategoryController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use NotificationChannels\OneSignal\OneSignalMessage;
use NotificationChannels\OneSignal\OneSignalWebButton;

/////
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\StoreUserController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ThemController;
use App\Http\Controllers\SubdomainController;
use App\Http\Controllers\NotificationSendController;
use App\Http\Controllers\Notcontroller;
use App\Http\Controllers\onesignalController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['prifix'=>'admin','middleware'=>'auth'],function(){

//Admin Dashboard
Route::get('/',[AdminController::class,'Admin'])->name('admin');
//UserManagement

//categories management
Route::resource('category',CategoriesController::class);

// Products management
Route::resource('product',ProductsController::class);
Route::get('Offer/{id}', [ProductsController::class, 'Offer'])->name('Offer');
Route::post('addOffer/{id}', [ProductsController::class, 'addOffer'])->name('addOffer');
});


//subcategories management
Route::resource('subcategory',SubcategoryController::class);

Route::resource('ProductCat', ProductCategoryController::class);
Route::get('slider/{id}', [ProductCategoryController::class, 'slider'])->name('slider');
Route::post('addslider/{id}', [ProductCategoryController::class, 'addslider'])->name('addslider');

//stores management
Route::resource('store',StoreController::class);
   Route::get('/addstores/{id}', [StoreController::class, 'addstores'])->name('addstore');
   Route::post('/savestores/{id}', [StoreController::class, 'store'])->name('storesave');
Route::post('active/{id}',[StoreController::class,'active'])->name('active');
Route::get('/showstores/{id}', [FrontController::class, 'showstores'])->name('showstores');





//spatie
Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('user', UserController::class);



});




 

//storeManagement

Route::resource('stores',StoreUserController::class);
Route::post('updatestoreuser/{id}', [StoreUserController::class, 'update'])->name('updatestoreuser');

//add

//Cart

Route::get('add/{id}',[CartController::class,'store'])->name('cart.store');
Route::get('show',[CartController::class,'index'])->name('cart.index');

Route::delete('removeItem/{product}', [CartController::class,'destroy'])->name('cart.destroy');
Route::put('updateQty/{product}', [CartController::class,'update'])->name('cart.update');
Route::get('addOrder',[CartController::class,'create'])->name('cart.create');
//orders
Route::resource('order',OrdersController::class);
Route::get('products/{id}' ,[ProductsController::class, 'showPro'])->name('showPro');
Route::get('productDetails/{id}' ,[ProductsController::class, 'showdetails'])->name('details-product');


//frontend-storecategory
//show stores
Route::get('/show/{id}', [FrontController::class, 'show'])->name('frontshowstore');
//view details store
Route::get('/index/{id}', [FrontController::class, 'index'])->name('details-store');
//showcategory
Route::get('/showcategory', [FrontController::class, 'showcategory'])->name('showcategory');
//showsubcategory
Route::get('/showsubcategory/{id}', [FrontController::class, 'showsubcategory'])->name('showsubcategory');
//select them
Route::get('/them/{id}', [themController::class, 'them'])->name('selectthem');
Route::post('/selectthem/{id}', [themController::class, 'select'])->name('viewthem');
//them2 product
Route::get('/productThem2/{id}',[themController::class, 'productThem2'])->name('productthem2');
//them1 product
Route::get('/productThem1/{id}',[themController::class, 'productThem1'])->name('productthem1');
//them3 product
Route::get('/productThem3/{id}',[themController::class, 'productThem3'])->name('productthem3');

// Multi-tenancy(single db)
Route::get('/subdomin', [SubdomainController::class,'create'])->name('subdomin');
Route::get('/showdomain', [SubdomainController::class,'index'])->name('showdomain');

Route::post('/addsubdomin', [SubdomainController::class,'store'])->name('store.subdomin');
//Notifiaction
Route::get('/markAsRead',[UserController::class,'markAsRead']);
Route::get('/mark/{id}',[UserController::class,'mark']);
// firebase notification
Route::get('/firebase', [App\Http\Controllers\NotificationSendController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'],function(){
    Route::post('/store-token', [NotificationSendController::class, 'updateDeviceToken'])->name('store.token');
    Route::post('/send-web-notification', [NotificationSendController::class, 'sendNotification'])->name('send.web-notification');
});




// one signal to send notification
Route::get('/testsend', [App\Http\Controllers\onesignalController::class, 'sendNotifications'])->name('s');
Route::get('/oneSignalTest', [App\Http\Controllers\onesignalController::class, 'oneSignalTest'])->name('oneSignalTest');
Route::get('/onesignal', [App\Http\Controllers\onesignalController::class, 'onesignal'])->name('onesignal');
Route::get('/laravel', [App\Http\Controllers\onesignalController::class, 'laravel'])->name('laravel');

