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
    return view('welcome');
});



Route::get('/home', 'HomeController@index')->name('home');
Route::get('/services', 'IndexController@services')->name('services');
Route::get('/programmes', 'IndexController@programmes')->name('programmes');
Route::get('/courses', 'IndexController@courses')->name('courses');
Route::get('/gallery', 'IndexController@gallery')->name('gallery');
Route::get('welcome', 'IndexController@welcome')->name('welcome');
Route::get('/team', 'IndexController@team')->name('team');
Route::get('/curriculum', 'IndexController@curriculum')->name('curriculum');

Route::get('/RequestInformation', 'IndexController@RequestInformation')->name('RequestInformation');
Route::post('/RequestInformation', 'RequestInformationController@create')->name('RequestInformation.submit');
// Route::get('/testimonals', 'IndexController@testimonals')->name('testimonals');




Route::get('/staffPages/osEnilolobo', 'StaffController@osEnilolobo')->name('osEnilolobo');
Route::get('/staffPages/ooAremu', 'StaffController@ooAremu')->name('ooAremu');
Route::get('/staffPages/cOgboi', 'StaffController@cOgboi')->name('cOgboi');
Route::get('/staffPages/boNjogo', 'StaffController@boNjogo')->name('boNjogo');
Route::get('/staffPages/baBello', 'StaffController@baBello')->name('baBello');
Route::get('/staffPages/gcDaramola', 'StaffController@gcDaramola')->name('gcDaramola');
Route::get('/staffPages/mkOnifade', 'StaffController@mkOnifade')->name('mkOnifade');
Route::get('/staffpages/cfNwoye', 'StaffController@cfNwoye')->name('cfNwoye');
Route::get('/staffpages/limeokparia', 'StaffController@limeokparia')->name('limeokparia');
Route::get('/staffpages/ydAdegbite', 'StaffController@ydAdegbite')->name('ydAdegbite');

// Routes to get departments page
Route::get('/departments/accounting', 'DepartmentController@accounting')->name('accounting');
Route::get('/departments/BusAdmin', 'DepartmentController@businessAdministration' )->name('BusAdmin');
Route::get('/departments/economics', 'DepartmentController@economics')->name('economics');
Route::get('/departments/finance', 'DepartmentController@finance')->name('finance');
Route::get('/departments/Project_Management', 'DepartmentController@projectManagement')->name('ProjMgt');
Route::get('/departments/businessCurriculum', 'DepartmentController@businessCurriculum')->name('businessCurriculum');





Route::get('/contact', 'IndexController@contact')->name('contact');
Auth::routes();