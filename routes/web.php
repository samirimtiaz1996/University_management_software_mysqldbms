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
Route::view('about','about');//url,view_name/class to call
Route::view('adminblock','internals.adminblock');
Route::view('teacherblock','internals.teacherblock');
Route::view('studentblock','internals.studentblock');

Route::get('viewstudentdata','StudentsController@viewstudentdata');
Route::post('addstudentdata','StudentsController@store');
Route::get('addstudentdata','StudentsController@inputstudentdata');
Route::post('editstudentdata','StudentsController@storeforedit');
Route::get('editstudentdata','StudentsController@edit');
Route::post('deletestudentdata','StudentsController@storefordelete');
Route::get('deletestudentdata','StudentsController@delete');


Route::get('customers','CustomersController@list');
Route::get('insert','CustomersController@insert');
Route::post('customers','CustomersController@store');

Route::get('viewteacherdata','TeachersController@viewteacherdata');
Route::post('addteacher','TeachersController@store');
Route::get('addteacher','TeachersController@inputteacherdata');
Route::post('editteacher','TeachersController@storeforedit');
Route::get('editteacher','TeachersController@edit');
Route::post('deleteteacher','TeachersController@storefordelete');
Route::get('deleteteacher','TeachersController@delete');

Route::get('viewroomdata','RoomsController@viewroomdata');
Route::post('addroomdata','RoomsController@store');
Route::get('addroomdata','RoomsController@inputroomdata');
Route::post('editroomdata','RoomsController@storeforedit');
Route::get('editroomdata','RoomsController@edit');
Route::post('deleteroomdata','RoomsController@storefordelete');
Route::get('deleteroomdata','RoomsController@delete');

Route::get('viewcoursedata','CoursesController@viewcoursedata');
Route::post('addcoursedata','CoursesController@store');
Route::get('addcoursedata','CoursesController@inputcoursedata');
Route::post('editcoursedata','CoursesController@storeforedit');
Route::get('editcoursedata','CoursesController@edit');
Route::post('deletecoursedata','CoursesController@storefordelete');
Route::get('deletecoursedata','CoursesController@delete');



Route::get('studentstakencourseunderme','StudentsController@studentstakencourseunderme');
Route::get('allteachersdata','TeachersController@allteachersdata');
Route::get('allstudentsresult','StudentsController@allstudentsresult');
Route::get('studentblock','StudentsController@studentblock');
Route::get('showalldata','UnionsController@showalldata');
//Route::get('showdata','StudentsController@show');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
