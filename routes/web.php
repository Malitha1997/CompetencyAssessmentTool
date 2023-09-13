<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TopLayerController;
use App\Http\Controllers\OperationalLayerController;
use App\Http\Controllers\GovofficialController;



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
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});

Auth::routes();

Route::resource('govofficials', GovofficialController::class);

/*------------------------------------------

--------------------------------------------

All Normal Users Routes List

--------------------------------------------

--------------------------------------------*/

Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('userHome');
    Route::get('/signup', [GovofficialController::class, 'create'])->name('signup');
    Route::get('/toplayer', [TopLayerController::class, 'top'])->name('toplayer');

    Route::get('/operationallayer', [OperationalLayerController::class, 'operational'])->name('operationallayer');
    Route::get('/operational/digitalGovernment/page01', [OperationalLayerController::class, 'digitalGovernmentPage01'])->name('operationalDigitalGovernmentPage01');
    Route::get('/operational/digitalGovernment/page02', [OperationalLayerController::class, 'digitalGovernmentPage02'])->name('operationalDigitalGovernmentPage02');
    Route::get('/operational/digitalGovernment/page03', [OperationalLayerController::class, 'digitalGovernmentPage03'])->name('operationalDigitalGovernmentPage03');
    Route::get('/operational/digitalGovernment/page04', [OperationalLayerController::class, 'digitalGovernmentPage04'])->name('operationalDigitalGovernmentPage04');
    Route::get('/operational/digitalGovernment/page05', [OperationalLayerController::class, 'digitalGovernmentPage05'])->name('operationalDigitalGovernmentPage05');

    Route::post('storeOpChangeManagement', [OperationalLayerController::class, 'storeOpChangeManagement'])->name('storeOpChangeManagement');
    Route::post('storeOpCollaboration', [OperationalLayerController::class, 'storeOpCollaboration'])->name('storeOpCollaboration');
    Route::post('storeOpOrientation', [OperationalLayerController::class, 'storeOpOrientation'])->name('storeOpOrientation');
    Route::post('storeOpQualityManagement', [OperationalLayerController::class, 'storeOpQualityManagement'])->name('storeOpQualityManagement');
    Route::post('storeOpInitiative', [OperationalLayerController::class, 'storeOpInitiative'])->name('storeOpInitiative');
    Route::get('/operational/digitalgovernment/results', [OperationalLayerController::class, 'results'])->name('operationalDigitalgovernmentResults');
});

Route::controller(SearchController::class)->group(function(){
    Route::get('autocomplete', 'autocomplete')->name('autocomplete');
    Route::get('autocomplete2', 'autocomplete2')->name('autocomplete2');
    Route::get('autocomplete3', 'autocomplete3')->name('autocomplete3');

});



/*------------------------------------------

--------------------------------------------

All Admin Routes List

--------------------------------------------

--------------------------------------------*/

Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
});



/*------------------------------------------

--------------------------------------------

All Admin Routes List

--------------------------------------------

--------------------------------------------*/

Route::middleware(['auth', 'user-access:manager'])->group(function () {
    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
});

