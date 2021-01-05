<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:api']], function () {
    // Permissions
    Route::apiResource('permissions', 'PermissionsApiController');

    // Roles
    Route::apiResource('roles', 'RolesApiController');

    // Users
    Route::apiResource('users', 'UsersApiController');

    // Condominia
    Route::apiResource('condominia', 'CondominiumApiController');

    // Contracts
    Route::apiResource('contracts', 'ContractApiController');
});

Route::post('contracts', 'Api\ContractAppController@create');
Route::get('contracts/{cpf}', 'Api\ContractAppController@show');
