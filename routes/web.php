<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourierController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\QuoteController;



// Website Routes

Route::get('/', function () {
    return view('welcome');
});

// Tracking Courier Routes
Route::post('/tracking', [CourierController::class, 'tracking'])->name('tracking');

Route::post('/tracking1', [CourierController::class, 'viewtracking'])->name('viewtracking');



Route::view('/about', 'about');

Route::view('/service', 'service');

Route::get('/price', [CourierController::class, 'showprice'])->name('show.price');

Route::view('/contact', 'contact');


// Web Application Routes

// Route::group(['middleware'=>'auth'], function(){

Route::get('/login', [AuthController::class, 'index'])->name('login');

Route::post('/login', [AuthController::class, 'login'])->name('login');


Route::get('/register', [AuthController::class,'register_view'])->name('register');
Route::post('/register', [AuthController::class,'register'])->name('register');


Route::group(['middleware'=>'auth'], function(){
    Route::get('/home', [AuthController::class, 'home'])->name('home');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    
//Show Dashboard Data

// Route::get('/showdash', [HomeController::class, 'showdashboarddata'])->name('showdash');
Route::get('/home', [HomeController::class, 'showdashboarddata'])->name('home');

//Admin Page Route
Route::get('/admin', [AdminController::class, 'show'])->name('admin');
Route::get('user/{id}', [AuthController::class, 'getUser'])->name('user.show');
Route::get('/update/{id}',[AdminController::class, 'updateviewuser'])->name('update.view');
Route::post('update/{id}', [AdminController::class, 'urecord'])->name('updateuserrecord');
Route::get('/delete/user/{id}',[AdminController::class, 'deleteuser'])->name('delete.user');

// courier Routes
Route::get('/courier', [CourierController::class, 'showrecord'])->name('showrecords');

Route::get('/deletecourier/{id}',[HomeController::class, 'deletecourier'])->name('delete.courier');

Route::get('viewcourier/{id}', [HomeController::class, 'viewall'])->name('viewrecord');


Route::get('/courier/{id}', [HomeController::class, 'updateviewcourier'])->name('updateviewcourier');

Route::post('/updatecourier/{id}', [HomeController::class, 'updatecourier1'])->name('updatecourier1');

Route::view('/operation', 'operation')->name('operation');

Route::post('/operation', [HomeController::class, 'insert1'])->name('insertbooking');


//Reports Route
Route::view('/report', 'report')->name('report');
Route::get('/userreport', [ReportController::class, 'showusers'])->name('user.report');
Route::get('/courierreprot',[ReportController::class, 'showcouriers'])->name('courier.report');

});