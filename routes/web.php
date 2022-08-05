<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function(){
    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']); //หน้าแดชบอร์ด

    Route::get('product', [App\Http\Controllers\Admin\ProductController::class, 'index']);{ //ส่วนของProduct(สินค้า)
    Route::get('addproduct', [App\Http\Controllers\Admin\ProductController::class, 'create']);
    Route::post('addproduct', [App\Http\Controllers\Admin\ProductController::class, 'store']);
    Route::get('editproduct/{id}', [App\Http\Controllers\Admin\ProductController::class, 'edit']);
    Route::post('updateproduct/{id}', [App\Http\Controllers\Admin\ProductController::class, 'update']);
    Route::get('deleteproduct/{id}', [App\Http\Controllers\Admin\ProductController::class, 'destroy']);}

    Route::get('material', [App\Http\Controllers\Admin\MaterialController::class, 'index']);{ //ส่วนของMaterial(วัตถุดิบ)
    Route::get('addmaterial', [App\Http\Controllers\Admin\MaterialController::class, 'create']);
    Route::post('addmaterial', [App\Http\Controllers\Admin\MaterialController::class, 'store']);
    Route::get('editmaterial/{id}', [App\Http\Controllers\Admin\MaterialController::class, 'edit']);
    Route::post('updatematerial/{id}', [App\Http\Controllers\Admin\MaterialController::class, 'update']);
    Route::get('deletematerial/{id}', [App\Http\Controllers\Admin\MaterialController::class, 'destroy']);}

    Route::get('ingredient', [App\Http\Controllers\Admin\IngredientController::class, 'index']);//ส่วนของสูตรวัตถุดิบ

    Route::get('user', [App\Http\Controllers\Admin\UserController::class, 'index']);//ผู้ใช้
    Route::get('adduser', [App\Http\Controllers\Admin\UserController::class, 'create']);
    Route::post('adduser', [App\Http\Controllers\Admin\UserController::class, 'store']);
    Route::get('deleteuser/{id}', [App\Http\Controllers\Admin\UserController::class, 'destroy']);

    Route::get('stockin', [App\Http\Controllers\Admin\stockinController::class, 'index']); //ส่วนของStockin(วัตถุดิบที่รับเข้า)
    Route::get('addstockin', [App\Http\Controllers\Admin\stockinController::class, 'create']);
    Route::post('addstockin', [App\Http\Controllers\Admin\stockinController::class, 'store']);
    
    Route::get('addstockin/{id}', [App\Http\Controllers\Admin\stockinController::class, 'getstockin'])->name('xxxxxxxxxxxxx'); //ส่วนของStockin(วัตถุดิบที่รับเข้า)


    Route::get('material-order', [App\Http\Controllers\Admin\MaterialorderController::class, 'index']);
    Route::get('managematerial', [App\Http\Controllers\Admin\MaterialorderController::class, 'manage']);
    Route::post('addmaterialorder', [App\Http\Controllers\Admin\MaterialorderController::class, 'store']); // พอเพิ่มเข้ามา
    Route::get('materialorder', [App\Http\Controllers\Admin\MaterialorderController::class, 'order']); // พอเพิ่มเข้ามา


    Route::get('list', [App\Http\Controllers\Admin\stockinController::class, 'showStockin']);

});