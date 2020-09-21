<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes(['login', 'logout']);


Route::get('/', function () {
    return view('site.index');
});

Route::get('solicitacao', 'Site\SiteController@showForm')->name('form.show');
Route::post('solicitacao', 'Site\SiteController@saveContract')->name('contracts.save');

Route::prefix('admin')
    ->namespace('Admin')
    ->middleware('auth')
    ->group(function () {

        Route::get('/', 'DashboardController@index');

        Route::resources([
            'condominius' => 'CondominiusController',
            'contracts' => 'ContractsController'
        ]);
    });
