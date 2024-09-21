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
Route::get('/', function () {
    return view('welcome');
});
Route::get('score', 'OnlineexamController@score')->name('score');

Route::get('profile', 'OnlineexamController@profile')->name('profile');

Route::get('addBooks', 'OnlineexamController@addBooks')->name('addBooks');

Route::get('insertBooks', 'OnlineexamController@insertBooks')->name('insertBooks');

Route::get('freeBooksTab','OnlineexamController@freeBooksTabList')->name('freeBooksTab');

// routes/web.php

Route::get('edit/{id}', 'OnlineexamController@edit')->name('edit');

Route::get('editBooks/{id}', 'OnlineexamController@editBooks')->name('editBooks');

Route::get('delBooks/{id}','OnlineexamController@delBooks')->name('delBooks');

Route::get('admin/download/{id}', 'OnlineexamController@download')->name('download');

Route::get('selectCategory','OnlineexamController@selectCategory')->name('selectCategory');

Route::get('freeBooks','OnlineexamController@freeBooks')->name('freeBooks');

Route::get('leaderBoard','OnlineexamController@leaderBoard')->name('leaderBoard');

Route::get('contactUs','OnlineexamController@contactUs')->name('contactUs');

Route::get('terms','OnlineexamController@terms')->name('terms');

Route::get('timer','OnlineexamController@timer')->name('timer');

//submit ratings
Route::get('ratingDisplay','OnlineexamController@RatingDisTab')->name('ratingDisplay');

Route::get('ratsubmit', 'OnlineexamController@ratsubmit')->name('ratsubmit');

Route::get('rate','OnlineexamController@rate')->name('rate');

Route::get('examIns','OnlineexamController@examIns')->name('examIns');

Route::get('selqus/{eid}','OnlineexamController@questions')->name('selqus');

Route::get('questions/{qusid}','OnlineexamController@questions')->name('questions');

Route::get('selexam/{eid}','OnlineexamController@exams')->name('selexam');

Route::get('exams/{eid}','OnlineexamController@exams')->name('exams');

Route::get('selexamins/{eid}','OnlineexamController@examIns')->name('selexamins');

Route::get('examIns/{eid}','OnlineexamController@examIns')->name('examIns');

Route::get('/getNextData', 'OnlineexamController@getNextData')->name('getNextData');

Route::get('/getPreviousData', 'OnlineexamController@getPreviousData')->name('getPreviousData');

Route::post('submit', 'OnlineexamController@submit')->name('submit');

Route::get('insertanswer','OnlineexamController@insertanswer')->name('insertanswer');

Route::get('updateanswer','OnlineexamController@updateanswer')->name('updateanswer');

Route::get('exams','OnlineexamController@exams')->name('exams');

Route::get('analytics/{email}','OnlineexamController@analytics')->name('analytics');

Route::get('/ansgetNextData', 'OnlineexamController@ansgetNextData')->name('ansgetNextData');

Route::get('/ansgetPreviousData', 'OnlineexamController@ansgetPreviousData')->name('ansgetPreviousData');

Route::get('selans/{ename}','OnlineexamController@answers')->name('selans');

Route::get('answers/{qusid}','OnlineexamController@answers')->name('answers');

Route::get('editPro/{mobile}','OnlineexamController@editPro')->name('editPro');

Route::get('editProupda/{mobile}','OnlineexamController@editProupda')->name('editProupda');

Route::get('editProfile','OnlineexamController@editProfile')->name('editProfile');

Route::get('view','OnlineexamController@view')->name('view');


Route::get('questionview','OnlineexamController@questionview')->name('questionview');

Route::get('insertqus','OnlineexamController@insertqus')->name('insertqus');

Route::get('insertquslist','OnlineexamController@insertquslist')->name('insertquslist');


Route::get('display','OnlineexamController@extab')->name('display');

Route::get('extabup/{eid}','OnlineexamController@extabup')->name('extabup');

Route::get('extabupdate/{eid}','OnlineexamController@extabupdate')->name('extabupdate');

Route::get('qustab/{eid}','OnlineexamController@qustabli')->name('qustab');

Route::get('qustabup/{qusid}','OnlineexamController@qustabup')->name('qustabup');

Route::get('qustabupdate/{qusid}','OnlineexamController@qustabupdate')->name('qustabupdate');

Route::get('stuDisplay','OnlineexamController@stuDisTab')->name('stuDisplay');

Route::get('stuTab/{email}','OnlineexamController@stuTabList')->name('stuTab');

Route::get('contactUsIns','OnlineexamController@contactUsIns')->name('contactUsIns');

Route::get('ansDisplay','OnlineexamController@ansDisTab')->name('ansDisplay');

// Admin reg and login

Route::get('index', 'AdminController@index')->name('index');

Route::get('adminlogin','AdminController@adminlogin')->name('adminlogin');

Route::get('admin/login','AdminController@login')->name('admin/login');

Route::get('adminregister','AdminController@adminregister')->name('adminregister')->middleware('guest');

Route::get('admin/registration','AdminController@registration')->name('admin/registration');

Route::get('adminlogout','AdminController@adminlogout')->name('adminlogout');




//user Reg and login
Route::get('login', 'Auth\LoginController@Login')->name('login');

Route::get('forgotPassword', 'Auth\LoginController@forgotPassword')->name('forgotPassword');

Route::get('registration','OnlineexamController@registration')->name('registration');

Route::view('registration','student.registration')->middleware('guest');

Route::get('stuReg','Auth\RegisterController@stuReg')->name('stuReg');

Route::get('dashboard','OnlineexamController@dashboard')->name('dashboard');

Route::view('login','student/login')->middleware('guest'); 

Route::get('stuLog','Auth\LoginController@stuLog')->name('stuLog'); 

Route::get('logout','Auth\LoginController@logout')->name('logout');
