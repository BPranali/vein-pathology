<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[UserController::class,'welcome'])->name('welcome');
Auth::routes();
Route::get('/veinCentres',[UserController::class,'veinCentres'])->name('veinCentres');
Route::get('/about',[UserController::class,'about'])->name('about');
Route::get('/facilities',[UserController::class,'facilities'])->name('facilities');
Route::get('/contact',[UserController::class,'contact'])->name('contact');
Route::get('/hospital',[UserController::class,'hospital'])->name('hospital');
Route::get('/assurance',[UserController::class,'assurance'])->name('assurance');
Route::get('/expertise',[UserController::class,'expertise'])->name('expertise');
Route::get('/search',[UserController::class, 'searchtest'])->name('search');
Route::get('/search',[UserController::class, 'search'])->name('search');
// Route::get('cart/authDetail', [UserController::class, 'authDetail'])->name('cart.authDetail');
Route::get('/invoice', [UserController::class, 'invoice'])->name('invoice');
// Route::get('/paymentMode',[UserController::class,'paymentMode'])->name('paymentMode');   




//routes for session variable
Route::get('viewPremium/{id}', [UserController::class, 'viewPremium'])->name('user.viewPremium');
Route::get('detail/{id}',[UserController::class,'userDetail'])->name('user.detail');
Route::post('purchase-pack',[UserController::class,'sessionData'])->name('purchase_pack');
Route::get("sessionremove", [UserController::class, 'sessionRemoveCart'])->name('session.cart.remove');
Route::get('cart/guestDetail', [UserController::class, 'guestDetail'])->name('cart.guestDetail');
Route::post('cart-checkout',[UserController::class,'cartCheckout'])->name('cart_checkout');
Route::get('/cartView',[UserController::class,'cartView'])->name('view_session_cart');



  




Route::get('welcome', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
//view cart for loged in user 

Route::get('/view_home_cart',[HomeController::class,'cartView'])->name('view_home_cart');

Route::post('cart-pack/{id}',[HomeController::class,'addCart'])->name('cart');
Route::post('remove/{id}', [HomeController::class, 'removeCart'])->name('cart.remove');
Route::post('product/{id}',[HomeController::class,'productDetail'])->name('product.detail');
Route::post('store{id}',[HomeController::class,'storeCart'])->name('store_cart');
Route::post('add-cart-pack-by-cart-button/{id}',[HomeController::class,'storeCart'])->name('add_package_by_cart');







// Route::get('/include-nav',[HomeController::class,'include'])->name('include.navbar');









// Admin packages
Route::get('admin/packages/index',[AdminController::class,'packagesIndex'])->name('admin.packages.index');
Route::get('admin/packages/create',[AdminController::class,'packagesCreate'])->name('admin.packages.create');
Route::post('admin/packages/store',[AdminController::class,'packagesStore'])->name('admin.packages.store');
Route::get('admin/packages/edit/{id}',[AdminController::class,'packagesEdit'])->name('admin.packages.edit');
Route::post('admin/packages/update/{id}',[AdminController::class,'packagesUpdate'])->name('admin.packages.update');
Route::get('admin/packages/delete/{id}',[AdminController::class,'packagesDelete'])->name('admin.packages.delete');

Route::get('/admin/cart',[AdminController::class,'cartIndex'])->name('admin.cart.index');
Route::delete('/admin/product/delete/{id}',[AdminController::class,'productDelete'])->name('admin.product.delete');


Route::get('admin/tests/index',[AdminController::class,'testsIndex'])->name('admin.tests.index');
Route::get('admin/tests/create',[AdminController::class,'testsCreate'])->name('admin.tests.create');
Route::post('admin/tests/store',[AdminController::class,'testsStore'])->name('admin.tests.store');
Route::get('admin/tests/edit/{id}',[AdminController::class,'testsEdit'])->name('admin.tests.edit');
Route::post('admin/tests/update/{id}',[AdminController::class,'testsUpdate'])->name('admin.tests.update');
Route::get('admin/tests/delete/{id}',[AdminController::class,'testsDelete'])->name('admin.tests.delete');

Route::get('/admin/testcart',[AdminController::class,'testcartIndex'])->name('admin.testcart.index');
Route::delete('/admin/testproduct/delete/{id}',[AdminController::class,'testproductDelete'])->name('admin.testproduct.delete');



Route::get('/searchview/{id}',[UserController::class, 'searchview'])->name('searchview');

Route::get('admin/order/index',[AdminController::class,'orderIndex'])->name('admin.order.index');


Route::get('/admin/order/view/{user_id}',[AdminController::class,'orderView'])->name('admin.order.orderView');

Route::get('/order',[HomeController::class,'loginOrder'])->name('order');