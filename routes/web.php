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
    return view('home');
});

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome')
  ->middleware('auth');

Route::get('/unauthenticated', function () {
    return view('unauthenticated');
});

Route::get('/info', function () {
    return view('information.info');
});


Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');
Route::get('/home', 'HomeController@index')->name('home');

//info methods charts

Route::get('/mental-health/getMentalHealth', 'MentalHealthController@getAll');
Route::get('/first-use/getFirstUse', 'FirstUseController@getAll');
Route::get('/trend/getTrend', 'TrendController@getAll');
Route::get('/source/getSource', 'SourceController@getAll');

Route::group(
[
    'prefix' => 'roles',
], function () {

    Route::get('/', [
        'uses'=>'RolesController@index',
        'middleware' => 'roles',
        'roles' =>'Administrator'
        ])
         ->name('roles.role.index');

    Route::get('/create','RolesController@create')
         ->name('roles.role.create');

    Route::get('/show/{role}','RolesController@show')
         ->name('roles.role.show')
         ->where('id', '[0-9]+');

    Route::get('/{role}/edit','RolesController@edit')
         ->name('roles.role.edit')
         ->where('id', '[0-9]+');

    Route::post('/', 'RolesController@store')
         ->name('roles.role.store');
               
    Route::put('role/{role}', 'RolesController@update')
         ->name('roles.role.update')
         ->where('id', '[0-9]+');

    Route::delete('/role/{role}','RolesController@destroy')
         ->name('roles.role.destroy')
         ->where('id', '[0-9]+');

});

Route::group(
[
    'prefix' => 'users',
], function () {

    Route::get('/', 'UsersController@index')
         ->name('users.user.index');

    Route::get('/create','UsersController@create')
         ->name('users.user.create');

    Route::get('/show/{user}','UsersController@show')
         ->name('users.user.show')
         ->where('id', '[0-9]+');

    Route::get('/{user}/edit','UsersController@edit')
         ->name('users.user.edit')
         ->where('id', '[0-9]+');

    Route::post('/', 'UsersController@store')
         ->name('users.user.store');
               
    Route::put('user/{user}', 'UsersController@update')
         ->name('users.user.update')
         ->where('id', '[0-9]+');

    Route::delete('/user/{user}','UsersController@destroy')
         ->name('users.user.destroy')
         ->where('id', '[0-9]+');

});

Auth::routes();


Route::group(
[
    'prefix' => 'events',
], function () {

    Route::get('/', 'EventsController@index')
         ->name('events.event.index');

    Route::get('/create','EventsController@create')
         ->name('events.event.create');

    Route::get('/show/{event}','EventsController@show')
         ->name('events.event.show')
         ->where('id', '[0-9]+');

    Route::get('/{event}/edit','EventsController@edit')
         ->name('events.event.edit')
         ->where('id', '[0-9]+');

    Route::post('/', 'EventsController@store')
         ->name('events.event.store');
               
    Route::put('event/{event}', 'EventsController@update')
         ->name('events.event.update')
         ->where('id', '[0-9]+');

    Route::delete('/event/{event}','EventsController@destroy')
         ->name('events.event.destroy')
         ->where('id', '[0-9]+');

    Route::get('/register/{event}','WebserviceController@register')
        ->name('events.event.register');

    Route::get('/testRegister','WebserviceController@testRegister')
          ->name('events.event.testRegister');

    Route::get('/info', 'EventsController@getInfo');

    Route::get('/timeline', 'EventsController@displayTimeline')
         ->name('events.event.timeline');   


});

Route::group(
    [
        'prefix' => 'reports',
    ], function () {
           
        Route::get('/','ReportsController@index');

        Route::post('/generate','ReportsController@generate')
            ->name('reports.report.generate'); 
    
    });
Route::group(
        [
            'prefix' => 'maps',
        ], function () {
               
            Route::get('/','MapsController@index');            
            
        });
        Route::group(
            [
                'prefix' => 'help',
            ], function () {
                   
                Route::get('/','HelpController@index');            
                
            });    