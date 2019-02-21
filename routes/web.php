<?php
use Illuminate\Http\Request;
use App\Test;
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
Route::get('/test', function() {
    return view('test');
});
Route::post('/test}', function(Request $request) {
    $employee = new Test($request->data);
    $employee->save();
});
// User
Route::group(['prefix' => 'users', 'as' => 'users.', 'middleware' => ['auth', 'role:admin|principal']], function(){
	Route::get('list', 'HomeController@userList')->name('list');
	Route::get('create', 'HomeController@userCreate')->name('create');
});
Route::put('profile/{id}', 'HomeController@profileUpdate')->name('profile.update');
Route::group(['prefix' => 'academic', 'middleware' => ['auth', 'role:admin|principal']], function(){
	Route::resource('classes', 'Academic\AcademicClassesController');
	Route::get('/get-classes', 'Academic\ClassSectionsController@getClasses');
	Route::resource('sections', 'Academic\ClassSectionsController');
	Route::resource('subjects', 'Academic\SubjectsController');
});
Route::resource('registration', 'Admission\RegistrationsController')->middleware(['auth', 'role:admin|principal']);
Route::resource('students', 'StudentsController')->middleware(['auth', 'role:admin|principal|teacher']);
Route::resource('gurdians', 'GurdiansController')->middleware(['auth', 'role:admin|principal|teacher']);
Route::resource('teachers', 'TeachersController')->middleware(['auth', 'role:admin|principal|teacher']);

Route::group(['prefix' => 'student-attendances', 'middleware' => ['auth', 'role:admin|principal|teacher']], function(){
	Route::get('add-search-form', 'Attendance\StudentAttendancesController@attendanceAddSearchForm')->name('student-attendances.add-search-form');
	Route::resource('/', 'Attendance\StudentAttendancesController');
	Route::get('monthly', 'Attendance\StudentAttendancesController@attendanceMonthlySearchForm')->name('student-attendances.monthly');
	Route::get('report', 'Attendance\StudentAttendancesController@attendanceReportSearchForm')->name('student-attendances.report');
});
Route::group(['prefix' => 'teacher-attendances', 'middleware' => ['auth', 'role:admin|principal|teacher']], function(){
	Route::get('add-search-form', 'Attendance\TeacherAttendancesController@attendanceAddSearchForm')->name('teacher-attendances.add-search-form');
	Route::resource('/', 'Attendance\TeacherAttendancesController');
	Route::get('monthly', 'Attendance\TeacherAttendancesController@attendanceMonthlySearchForm')->name('teacher-attendances.monthly');
	Route::get('report', 'Attendance\TeacherAttendancesController@attendanceReportSearchForm')->name('teacher-attendances.report');
});

Route::group(['prefix' => 'class-routines', 'middleware' => ['auth', 'role:admin|principal|teacher']], function(){
	Route::get('search-form', 'ClassRoutinesController@classRoutineSearchForm')->name('class-routines.search-form');
	Route::get('/', 'ClassRoutinesController@index')->name('class-routines.index');
	Route::get('create', 'ClassRoutinesController@create')->name('class-routines.create');
});

Route::get('student/class-routine', 'ClassRoutinesController@studentClassRoutine')->middleware(['auth', 'role:student'])->name('student.class-routine');

Route::get('give-attendance', 'AttendancesController@giveAttendance')->middleware(['auth', 'role:teacher|student'])->name('give-attendance');

Route::group(['prefix' => 'exams', 'as' =>'exams.', 'middleware' => ['auth', 'role:admin|principal']], function(){
	Route::resource('/', 'Exam\ExamsController');
});

Route::group(['prefix' => 'exam-schedules', 'as' =>'exam-schedules.', 'middleware' => ['auth', 'role:admin|principal']], function(){
	Route::resource('/', 'Exam\ExamSchedulesController');
	Route::get('search-form', ['as' => 'search-form', 'uses' => 'Exam\ExamSchedulesController@searchForm']);
});

Route::group(['prefix' => 'results', 'as' =>'results.', 'middleware' => ['auth', 'role:admin|principal']], function(){
	Route::resource('grades', 'Result\GradesController');
	Route::get('add-search-form', 'Result\ResultsController@searchForm')->name('add-search-form');
	Route::resource('/', 'Result\ResultsController');
	Route::get('exam-search-form', 'Result\ResultsController@examSearchForm')->name('exam-search-form');
});

// Accounts
Route::group(['prefix' => 'accounts', 'as' => 'accounts.', 'middleware' => ['auth', 'role:admin|principal|accountant']], function(){
	Route::group(['prefix' => 'fees', 'as' => 'fees.'], function(){
		Route::resource('fee-types', 'Account\Fee\FeeTypesController');
		Route::resource('collections', 'Account\Fee\FeeCollectionsController');
	});
});

Route::resource('notices', 'NoticesController')->middleware(['auth', 'role:admin|principal|teacher|student|guest']);
Route::resource('institues', 'InstitutesController')->middleware(['auth', 'role:admin|guest-view']);
Route::resource('certificates', 'CertificatesController')->middleware(['auth', 'role:admin|principal']);
Route::resource('testimonials', 'TestimonialsController')->middleware(['auth', 'role:admin|principal']);
Route::get('locale/{locale}', function($locale) {
    Session::put('locale', $locale);
    return redirect()->back();
});