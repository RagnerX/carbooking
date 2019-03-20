<?php

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
    return redirect()->route('home');
});

Auth::routes();


Route::prefix('admin')->middleware(['auth', 'role:admin'])->group(function () {

    Route::get('/home', 'Admin\HomeController@index')->name('admin.home');

    Route::resource('/vehicle', 'Admin\VehicleController');

    Route::get('/hiring-requests/pending', 'Admin\HiringRequestController@pendingHiringRequests')->name('admin.pending.hiring.requests');
    Route::get('/hiring-requests/approved', 'Admin\HiringRequestController@approvedHiringRequests')->name('admin.approved.hiring.requests');
    Route::get('/hiring-requests/completed', 'Admin\HiringRequestController@completedHiringRequests')->name('admin.completed.hiring.requests');
    Route::post('/approve-request/{hiringRequest}', 'Admin\HiringRequestController@approveRequest')->name('admin.approve.hiring.requests');
    Route::post('/complete-request/{hiringRequest}', 'Admin\HiringRequestController@completeRequest')->name('admin.complete.hiring.requests');

});

Route::middleware(['auth', 'role:employee'])->group(function () {

    Route::get('/home', 'Employee\HomeController@index')->name('home');

    Route::get('/available-vehicles', 'Employee\HiringRequestController@availableVehicles')->name('available.vehicles');

    Route::get('/hiring-requests', 'Employee\HiringRequestController@myRequests')->name('hiring.requests');
    Route::get('/completed-requests', 'Employee\HiringRequestController@myCompletedRequests')->name('completed.hiring.requests');
    Route::post('/hiring-request', 'Employee\HiringRequestController@makeRequest')->name('hiring.request');


});

