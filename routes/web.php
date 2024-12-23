<?php

use App\Http\Controllers\TransactionController;
use App\Http\Livewire\TransactionComponent;
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
Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
});

Route::middleware('auth')->group(function () {
	Route::resource('/units', 'UnitController');
	Route::resource('/categories', 'CategoryController');
    Route::resource('/products', 'ProductController');
    Route::resource('/recipes', 'RecipeController');
    
    Route::get('/work-orders/daily/{workOrder}/prepare', 'WorkOrderController@prepare')->name('work-orders.prepare');
    Route::get('/work-orders/daily', 'WorkOrderController@daily')->name('work-orders.daily');
    Route::resource('/work-orders', 'WorkOrderController');
    
    Route::resource('/stock-moves', 'StockMoveController');
    Route::resource('/inventory', 'InventoryController');
    Route::resource('/companies', 'CompanyController');

    Route::get('/dispatchorders/daily/{dispatchOrder}/prepare', 'DispatchOrderController@prepare')->name('dispatchorders.prepare');
    Route::get('/dispatchorders/daily', 'DispatchOrderController@daily')->name('dispatchorders.daily');
    Route::resource('/dispatchorders', 'DispatchOrderController');
    
    Route::resource('/salestype', 'SalesTypeController');

    Route::resource('/roles', 'RoleController');

    Route::get('/users', 'UserController@index')->name('users.index');

    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('/transaction', [TransactionController::class, 'index'])->name('transaction');



});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');
});
