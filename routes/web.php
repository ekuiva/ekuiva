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

Route::get('/', function () { return view('e-front-end.home'); });

Auth::routes();

Route::prefix('home')->group(function () {
    $c = 'HomeController';

    Route::get('/',             $c.'@index');
    Route::get('/help',         $c.'@help');
    Route::get('/about',        $c.'@about');
});

// Change Password
$c = 'UserController';
Route::get('/changePassword',   $c.'@showChangePasswordForm');
Route::post('/changePassword',  $c.'@changePassword');

// Route Middleware Auth
Route::group(['middleware' => 'auth'], function() {

    // Role Admin
    Route::group(['middleware' => ['role:Admin']], function () {
        // Route RoleController
        Route::resource('/roles', 'RoleController')->except([
            'create', 'show', 'edit', 'update'
        ]);

        // UserController
        Route::prefix('users')->group(function () {
            $c = 'UserController';
           
            // User
            Route::get('/',                  $c.'@index')->name('users.index');
            Route::get('create',             $c.'@create');
            Route::post('/',                 $c.'@store')->name('users.store');
            Route::delete('/{id}',           $c.'@destroy');

            // Role
            Route::get('/roles/{id}',        $c.'@roles');
            Route::put('/roles/{id}',        $c.'@setRole');
            Route::post('/add-ermission',    $c.'@addPermission');
            Route::get('/role-permission',   $c.'@rolePermission');
            Route::put('/permission/{role}', $c.'@setRolePermission');
        });
    });
    
    //Permision Create|Update|Delete
    Route::group(['middleware' => ['permission:Create|Update|Delete']], function () {
        //
    });

    // Permision Read
    Route::group(['middleware' => ['permission:Read']], function () {

        // Activity Log
        Route::get('activity-log',          'ActivityLogController@index');

        // User
        Route::get('users/edit/{id}',       'UserController@edit');
        Route::put('users/{id}',            'UserController@update')->name('users.update');
    });
});
