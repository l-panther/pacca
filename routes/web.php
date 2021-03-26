<?php

use Illuminate\Support\Facades\Route;

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

/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');
*/

/* Web page */
Route::get('/', 'WebpagesController@index');
Route::get('/terms', 'WebpagesController@terms');
Route::get('/privacy', 'WebpagesController@privacy');

// Account pages
Route::resource('activities', 'ActivitiesController');
Route::resource('events', 'EventsController');
Route::resource('staff', 'StaffController');
Auth::routes();


// Admin 
Route::get('/admin', 'AdminController@index')->name('admin');

Route::get('/admin/staff', 'StaffController@index')->name('staff'); // Admin View Staff
Route::get('/admin/staff/create', 'StaffController@create')->name('staff'); // Admin Create Staff
Route::get('/admin/staff/store', 'StaffController@store')->name('staff'); // Admin Store Staff
Route::get('/admin/staff/show/{id}', 'StaffController@show')->name('staff'); // Admin Show Staff
Route::get('/admin/staff/{id}/edit', 'StaffController@edit')->name('staff'); // Admin Edit Staff

Route::get('/admin/activity', 'ActivitiesController@index')->name('activity'); // Admin View Activity
Route::get('/admin/activity/create', 'ActivitiesController@create')->name('activity'); // Admin Create Activity
Route::get('/admin/activity/store', 'ActivitiesController@store')->name('activity'); // Admin Create Activity
Route::get('/admin/activity/show/{id}', 'ActivitiesController@show')->name('activity'); // Admin Show Activity
Route::get('/admin/activity/{id}/edit', 'ActivitiesController@edit')->name('activity'); // Admin Edit Activity

Route::get('/admin/event', 'EventsController@index')->name('events'); // Admin View Event
Route::get('/admin/event/create', 'EventsController@create')->name('events'); // Admin Create Event
Route::get('/admin/event/store', 'EventsController@store')->name('events'); // Admin Store Event
Route::get('/admin/event/show/{id}', 'EventsController@show')->name('events'); // Admin Show Event
Route::get('/admin/event/{id}/edit', 'EventsController@edit')->name('events'); // Admin Edit Event

Route::get('/admin/member', 'MemberController@index')->name('member');
Route::get('/admin/member/show/{id}', 'MemberController@show')->name('member'); // Admin Show Event

Route::get('/admin/child', 'ChildrenController@index')->name('child'); // Admin View Event
Route::get('/admin/child/show/{id}', 'ChildrenController@show')->name('child'); // Admin Show Event

Route::get('/admin/forms', 'FormsController@index')->name('forms'); // Admin View Forms
Route::get('/admin/forms/create', 'FormsController@create')->name('forms'); // Admin Create Forms
Route::get('/admin/forms/store', 'FormsController@store')->name('forms'); // Admin Store Forms
Route::get('/admin/forms/show/{id}', 'FormsController@show')->name('forms'); // Admin Show Forms
Route::get('/admin/forms/{id}/edit', 'FormsController@edit')->name('forms'); // Admin Edit Forms

Route::get('/admin/budget', 'BudgetController@index')->name('budget'); // Admin View Budget
Route::get('/admin/budget/create', 'BudgetController@create')->name('budget'); // Admin Create Budget
Route::get('/admin/budget/store', 'BudgetController@store')->name('budget'); // Admin Store Budget


// Staff 
Route::get('/employee', 'EmployeeController@index')->name('employee');

Route::get('/employee/staff', 'StaffController@index')->name('member');
Route::get('/employee/staff/show/{id}', 'StaffController@show')->name('member');
Route::get('/employee/activity', 'ActivitiesController@index')->name('activity');
Route::get('/employee/activity/show/{id}', 'ActivitiesController@show')->name('activity');
Route::get('/employee/event', 'EventsController@index')->name('event');
Route::get('/employee/event/show/{id}', 'EventsController@show')->name('event');
Route::get('/employee/member', 'MemberController@index')->name('event');
Route::get('/employee/member/show/{id}', 'MemberController@show')->name('event');
Route::get('/employee/child', 'ChildrenController@index')->name('child');
Route::get('/employee/child/show/{id}', 'ChildrenController@show')->name('child');


// Member 
Route::get('/member/activity', 'ActivitiesController@index')->name('activity');
Route::get('/member/event', 'EventsController@index')->name('event');
Route::get('/member', 'MemberController@index')->name('member');

