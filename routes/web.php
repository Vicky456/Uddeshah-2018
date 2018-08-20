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


use Illuminate\Support\Facades\Auth;




Route::get('/','LandingHomeController@index');
Route::get('/loading',function (){
    return view('loading');
});
Route::get('/comming',function (){
    return view('comming');
});





Route::get('/test',function (){
    return view('testing.page');
});




Auth::routes();
Route::get('/Events',function (){
    return view('eventsList');
});




Route::group(['middleware' => 'auth' ], function() {

    Route::get('/home', 'LandingHomeController@index')->name('home');

    Route::get('/admin', 'AdminPageController@index');

    //admin clube
    Route::resource('/EventsInsert','AdminEventController');

    Route::resource('/UserSetting','SettingUserController');


    Route::get('/Events_Timeline',function (){
        return view('admin.timeline');
    });

    Route::get('/Events_list',function (){
        return view('admin.UserEvnetsList');
    });


    Route::resource('/EventsReg','UserEventRegController');

    Route::get('/Events_Mlist',function (){
        return view('admin.events_list');
    });


});


