<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DocController;
use App\Http\Controllers\Admin\LabController;
use App\Http\Controllers\Admin\PharController;
use App\Http\Controllers\Admin\RecpController;
use App\Http\Controllers\Admin\PaController;

use App\Http\Controllers\Recp\RecpPaController;

use App\Http\Controllers\Doc\DocPaController;

use App\Http\Controllers\Lab\LabPaController;

use App\Http\Controllers\Phar\PharPaController;

use App\Http\Controllers\Auth\AdminController;


Route::get('/', function () {
    return view('auth.login');
});
Route::get('/app', function () {
    return view('layout.app');
});
Route::get('/DashBord', function () {
    return view('admin.DashBord');
});
Route::get('/viewDoc', function () {
    return view('admin.viewDoc');
});

Route::post('login', [AdminController::class, 'login'])->name('login');

    ////////Admin Route//////////
Route::get('viewDoc', [DocController::class, 'index'])->name('viewDoc');
Route::get('Admin_Dash', [DocController::class, 'DashBord'])->name('Admin_Dash');
Route::get('viewLab', [LabController::class, 'index'])->name('viewLab');
Route::get('viewPhar', [PharController::class, 'index'])->name('viewPhar');
Route::get('viewRecp', [RecpController::class, 'index'])->name('viewRecp');
Route::get('viewPa', [PaController::class, 'index'])->name('viewPa');



////////////Recp Route///////////////////
Route::get('AddPa', [RecpPaController::class, 'index'])->name('AddPa');
Route::get('viewRecpPa', [RecpPaController::class, 'viewPa'])->name('viewRecpPa');
Route::post('Phar_store', [RecpPaController::class, 'Store'])->name('Phar_store');
Route::post('Recp_statusUpdate', [RecpPaController::class, 'StatusUpdate'])->name('Recp_statusUpdate');

////////////Doc Route////////////////////////////

Route::get('Doc_Dash', [DocPaController::class, 'DashBord'])->name('Doc_Dash');
Route::get('Doc_viewPa', [DocPaController::class, 'viewPa'])->name('Doc_viewPa');
Route::get('Doc_singlePa/{id}', [DocPaController::class, 'singelPa'])->name('Doc_singlePa/{id}');
Route::post('Doc_store', [DocPaController::class, 'Store'])->name('Doc_store');
Route::post('Doc_storeLab', [DocPaController::class, 'StoreLab'])->name('Doc_storeLab');
Route::post('Doc_update', [DocPaController::class, 'Update'])->name('Doc_update');
Route::post('Doc_PaConfirm', [DocPaController::class, 'PaConfirm'])->name('Doc_PaConfirm');

Route::post('Doc_sendToLab', [DocPaController::class, 'SendToLab'])->name('Doc_sendToLab');


////////////Lab Route/////////////////////////
Route::get('Lab_Dash', [LabPaController::class , 'DashBord'])->name('Lab_Dash');
Route::get('Lab_viewPa', [LabPaController::class , 'ViewPa'])->name('Lab_viewPa');
Route::post('Lab_resultstore', [LabPaController::class , 'Store'])->name('Lab_resultstore');
Route::get('Lab_singelPa/dagim', [LabPaController::class , 'singlePa'])->name('Lab_singelPa/dagim');
Route::post('Lab_send', [LabPaController::class , 'Send'])->name('Lab_send');

////////////Pahrmacy Route////////////////////

Route::get('Phar_Dash', [PharPaController::class, 'DashBord'])->name('Phar_Dash');
Route::get('Phar_viewPa', [PharPaController::class, 'viewPa'])->name('Phar_viewPa');
Route::get('Phar_singelPa/dagim', [PharPaController::class, 'singelPa'])->name('Phar_singelPa/dagim');


///////Admin/////
Route::post('store_user', [AdminController::class, 'Store_User'])->name('store_user');
Route::get('logout', [AdminController::class, 'logout'])->name('logout');




