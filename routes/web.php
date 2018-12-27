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
    return redirect('/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', 'HomeController@profile')->name('profile');
Route::put('profile/{id}', 'HomeController@profileUpdate')->name('profile.update');
Route::group(['prefix' => 'academic', 'middleware' => ['auth']], function(){
	Route::resource('classes', 'Academic\AcademicClassesController');
	Route::resource('sections', 'Academic\ClassSectionsController');
	Route::resource('subjects', 'Academic\SubjectsController');
});
Route::resource('registration', 'Admission\RegistrationsController')->middleware('auth');
Route::resource('students', 'StudentsController')->middleware('auth');
Route::resource('gurdians', 'GurdiansController')->middleware('auth');

Route::group(['prefix' => 'attendances', 'middleware' => ['auth']], function(){
	Route::get('add-search-form', 'Attendance\AttendancesController@attendanceAddSearchForm')->name('attendances.add-search-form');
	Route::resource('/', 'Attendance\AttendancesController');
	Route::get('monthly', 'Attendance\AttendancesController@attendanceMonthlySearchForm')->name('attendances.monthly');
	Route::get('report', 'Attendance\AttendancesController@attendanceReportSearchForm')->name('attendances.report');
});