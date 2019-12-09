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


Route::get('index',[
    'as'=>'trang-chu',
    'uses'=>'PostsController@getIndex'
]);
Route::get('detailpost/{id}',[
    'as'=>'detailpost',
    'uses'=>'PostsController@getdetailpost'
]);
Route::get('dang-nhap',[
    'as'=>'login',
    'uses'=>'PostsController@getLogin'
]);
Route::post('dang-nhap',[
    'as'=>'login',
    'uses'=>'PostsController@postLogin'
]);
Route::get('dang-ki',[
    'as'=>'signin',
    'uses'=>'PostsController@getSignin'
]);
Route::post('dang-ki',[
    'as'=>'signin',
    'uses'=>'PostsController@postSignin'
]);
Route::get('dang-xuat',[
    'as'=>'logout',
    'uses'=>'PostsController@postLogout'
]);

Route::get('/postadd', function () {
    return view('page.post_add');
});
Route::get('/editusers', function () {
    return view('page.edit_users');
});
Route::get('/adminhome', function () {
    return view('page.users_list');
});

Route::get('userslist',[
    'as'=>'userslist',
    'uses'=>'ManageController@getuserslist'
]);
Route::get('/{id}/delete','ManageController@destroy')->name('page.destroy');
Route::get('/{id}/edit','ManageController@edit')->name('page.edit');
Route::post('/{id}/edit','ManageController@update')->name('page.update');
//Route::group(['prefix' => 'quanli'], function () {
//    Route::get('/userslist','ManageController@getuserslist')->name('quanli.index');
//    Route::get('/{id}/delete','ManageController@destroy')->name('quanli.destroy');
////    Route::get('/{id}/edit','QuanliController@edit')->name('quanli.edit');
////    Route::post('/{id}/edit','QuanliController@update')->name('quanli.update');
//
//});
