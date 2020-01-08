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

    return redirect()->route('admin.dashboard');
});

Route::get('/dashboard', 'Admin\AdminDashboard@index')->name('home');

Auth::routes();



/* Admin Routes Start Here*/
Route::group(['as'=>'admin.','prefix'=>'admin','namespace'=>'Admin','middleware'=>['auth','admin']],function(){

	Route::get('dashboard','AdminDashboard@index')->name('dashboard');
	Route::resource('department','DepartmentController');
	Route::resource('member','MemberController');
	Route::resource('designation','DesignationController');
	Route::resource('book','BookController');
	Route::resource('chapter','ChapterController');
	Route::resource('rule','RuleController');
	Route::resource('subrule','SubruleController');
	Route::get('book/chapter/{id}','RuleController@getChapter');



});


/* Admin Routes Start Here*/





/* Member Routes Start Here*/
Route::group(['as'=>'member.','prefix'=>'member','namespace'=>'Member','middleware'=>['auth','member']],function(){

	Route::get('dashboard','MemberDashboard@index')->name('dashboard');



});

/* Member Routes Start Here*/

