<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TopLayerController;
use App\Http\Controllers\GovofficialController;
use App\Http\Controllers\MiddleLayerController;
use App\Http\Controllers\OperationalLayerController;



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
    Route::get('/operational/digitalGovernment/page2', [OperationalLayerController::class, 'digitalGovernmentPage05'])->name('operationalDigitalGovernmentPage05');

    Route::post('storeOpChangeManagement', [OperationalLayerController::class, 'storeOpChangeManagement'])->name('storeOpChangeManagement');
    Route::post('storeOpCollaboration', [OperationalLayerController::class, 'storeOpCollaboration'])->name('storeOpCollaboration');
    Route::post('storeOpOrientation', [OperationalLayerController::class, 'storeOpOrientation'])->name('storeOpOrientation');
    Route::post('storeOpQualityManagement', [OperationalLayerController::class, 'storeOpQualityManagement'])->name('storeOpQualityManagement');
    Route::post('storeOpInitiative', [OperationalLayerController::class, 'storeOpInitiative'])->name('storeOpInitiative');
    Route::get('/operational/digitalgovernment/results', [OperationalLayerController::class, 'results'])->name('operationalDigitalgovernmentResults');
    Route::get('/operational/digitalgovernment/report', [OperationalLayerController::class, 'digitalGovernmentReport'])->name('operationalDigitalgovernmentReport');

    Route::get('/operational/ict/page01', [OperationalLayerController::class, 'ictPage01'])->name('operationalIctPage01');
    Route::get('/operational/ict/page02', [OperationalLayerController::class, 'ictPage02'])->name('operationalIctPage02');
    Route::get('/operational/ict/page03', [OperationalLayerController::class, 'ictPage03'])->name('operationalIctPage03');

    Route::post('storeOpIctInWorkPlace', [OperationalLayerController::class, 'storeOpIctInWorkPlace'])->name('storeOpIctInWorkPlace');
    Route::post('storeOpInformationManagement', [OperationalLayerController::class, 'storeOpInformationManagement'])->name('storeOpInformationManagement');
    Route::post('storeOpDigitalCitizenship', [OperationalLayerController::class, 'storeOpDigitalCitizenship'])->name('storeOpDigitalCitizenship');
    Route::get('/operational/ict/results', [OperationalLayerController::class, 'opIctResults'])->name('operationalIctResults');
    Route::get('/operational/ict/report', [OperationalLayerController::class, 'opIctReport'])->name('operationalIctReport');

    Route::get('/operational/management/page01', [OperationalLayerController::class, 'opManagementPage01'])->name('operationalManagementPage01');
    Route::get('/operational/management/page02', [OperationalLayerController::class, 'opManagementPage02'])->name('operationalManagementPage02');
    Route::get('/operational/management/page03', [OperationalLayerController::class, 'opManagementPage03'])->name('operationalManagementPage03');
    Route::get('/operational/management/page04', [OperationalLayerController::class, 'opManagementPage04'])->name('operationalManagementPage04');
    Route::get('/operational/management/page05', [OperationalLayerController::class, 'opManagementPage05'])->name('operationalManagementPage05');

    Route::post('storeOpCommunication', [OperationalLayerController::class, 'storeOpCommunication'])->name('storeOpCommunication');
    Route::post('storeOpWorkplaceManagement', [OperationalLayerController::class, 'storeOpWorkplaceManagement'])->name('storeOpWorkplaceManagement');
    Route::post('storeOpStakeholderManagement', [OperationalLayerController::class, 'storeOpStakeholderManagement'])->name('storeOpStakeholderManagement');
    Route::post('storeOpTeamwork', [OperationalLayerController::class, 'storeOpTeamwork'])->name('storeOpTeamwork');
    Route::post('storeOpPersonalDevelopment', [OperationalLayerController::class, 'storeOpPersonalDevelopment'])->name('storeOpPersonalDevelopment');
    Route::get('/operational/management/results', [OperationalLayerController::class, 'opManagementResult'])->name('operationalManagementResults');
    Route::get('/operational/management/report', [OperationalLayerController::class, 'opManagementReport'])->name('operationalManagementReport');
    Route::get('/operational/overal', [OperationalLayerController::class, 'overalresult'])->name('operationalOveral');

    Route::get('/operational/overall/report', [OperationalLayerController::class, 'overalreport'])->name('operationalOverallReport');

    Route::get('/middlelayer', [MiddleLayerController::class, 'middle'])->name('middlelayer');
    Route::get('/middle/ict/page01', [MiddleLayerController::class, 'midIctPage01'])->name('middleIctPage01');
    Route::get('/middle/ict/page02', [MiddleLayerController::class, 'midIctPage02'])->name('middleIctPage02');
    Route::get('/middle/ict/page03', [MiddleLayerController::class, 'midIctPage03'])->name('middleIctPage03');

    Route::post('storeMidIctInWorkplace', [MiddleLayerController::class, 'storeMidIctInWorkplace'])->name('storeMidIctInWorkplace');
    Route::post('storeMidInformationManagement', [MiddleLayerController::class, 'storeMidInformationManagement'])->name('storeMidInformationManagement');
    Route::post('storeMidDigitalCitizenship', [MiddleLayerController::class, 'storeMidDigitalCitizenship'])->name('storeMidDigitalCitizenship');
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

