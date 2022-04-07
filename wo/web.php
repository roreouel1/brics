<?php

use Illuminate\Support\Facades\Route;

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



Route::get('/', function () {

    return view('auth.login');
});

Route::get('/ex', function () {

    return view('ex');
});

Route::post('/autocomplete/getAutocomplete/',[App\Http\Controllers\ExController::class, 'getAutocomplete'])->name('Autocomplte.getAutocomplte');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Admin routes
Route::resource('admin', App\Http\Controllers\AdminController::class);

//Student routes
Route::resource('student', App\Http\Controllers\StudentController::class);
Route::post('/searchajax',[App\Http\Controllers\StudentController::class, 'autoComplete'])->name('searchajax');

//Staff routes
Route::resource('staff', App\Http\Controllers\StaffController::class);
Route::post('/sajax',[App\Http\Controllers\StaffController::class, 'autoComplete'])->name('sajax');

//school routes
Route::resource('school', App\Http\Controllers\SchoolController::class);

//Account routes
Route::resource('account', App\Http\Controllers\AccountController::class);
Route::post('searchamt',[App\Http\Controllers\AccountController::class, 'autoComplete'])->name('searchamt');

//Debtors routes
Route::resource('debtors', App\Http\Controllers\DebtorsController::class);

//Special Fees routes
Route::resource('special', App\Http\Controllers\SpecialController::class);
Route::resource('addspecial', App\Http\Controllers\AddspecialController::class);
Route::get('searchtype',array('as'=>'searchtype','uses'=>'App\Http\Controllers\SpecialController@autoComplete'));
Route::post('/searchspe',[App\Http\Controllers\SpecialController::class, 'autoComplete'])->name('searchspe');

//Bus Fees routes
Route::resource('bus', App\Http\Controllers\PaybusController::class);
Route::post('/searchbus',[App\Http\Controllers\PaybusController::class, 'autoComplete'])->name('searchbus');

//Canteen Fees routes
Route::resource('canteen', App\Http\Controllers\CanteenController::class);
Route::post('/searchcan',[App\Http\Controllers\CanteenController::class, 'autoComplete'])->name('searchcan');

//Extraclasses routes
Route::resource('extra', App\Http\Controllers\ExtrafController::class);
Route::post('/searchex',[App\Http\Controllers\ExtrafController::class, 'autoComplete'])->name('searchex');

//Salary routes
Route::resource('salary', App\Http\Controllers\SalaryController::class);

//Expenses routes
Route::resource('expense', App\Http\Controllers\ExpenseController::class);
Route::get('/soa', [App\Http\Controllers\ExpenseController::class, 'soa'])->name('soa');

//Setting routes
Route::resource('setting', App\Http\Controllers\SettingController::class);

//Classes routes
Route::resource('clss', App\Http\Controllers\ClssController::class);

//Stock routes
Route::resource('stock', App\Http\Controllers\StockController::class);

//Sales routes
Route::post('/searchitem',[App\Http\Controllers\StockController::class, 'autoComplete'])->name('searchitem');
Route::resource('sales', App\Http\Controllers\SalesController::class);
Route::get('/sforms', [App\Http\Controllers\SalesController::class, 'sform'])->name('sforms');
Route::post('/searchsr',[App\Http\Controllers\SalesController::class, 'autoComplete'])->name('searchsr');
Route::post('/searchor',[App\Http\Controllers\SalesController::class, 'obComplete'])->name('searchor');

//Change Password
Route::resource('changep', App\Http\Controllers\ChangepassController::class);

//Admission Fees
Route::resource('adms', App\Http\Controllers\AdmsController::class);
Route::post('/searchadms',[App\Http\Controllers\AdmsController::class, 'autoComplete'])->name('searchadms');

//Book routes
Route::resource('book', App\Http\Controllers\BookController::class);
Route::post('/paybook', [App\Http\Controllers\BookController::class, 'paybook'])->name('paybook');
Route::get('/display', [App\Http\Controllers\BookController::class, 'display'])->name('display');
Route::get('/bform', [App\Http\Controllers\BookController::class, 'bform'])->name('bform');
Route::get('/oform', [App\Http\Controllers\BookController::class, 'oform'])->name('oform');
Route::post('/searchbook',[App\Http\Controllers\BookController::class, 'autoComplete'])->name('searchbook');
Route::resource('paybook', App\Http\Controllers\PaybookController::class);
Route::post('/searchob',[App\Http\Controllers\PaybookController::class, 'obComplete'])->name('searchob');
Route::post('/searchpb',[App\Http\Controllers\PaybookController::class, 'autoComplete'])->name('searchpb');



//  Route::get('/',function (Exception $e,Request $request) {

//     if ( $e  instanceof \Illuminate\Database\QueryException) {
//         // // $request->session()->flash('alert-danger', 'Sorry! Operation failed');
//         // return view('setting.form');
//         echo("You koraa waiii");
//     } 
    
// });