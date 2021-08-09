<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackendAboutController;
use App\Http\Controllers\BackendEducationController;
use App\Http\Controllers\BackendPortfolioController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\loginController;






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

Route::get('/','FrontEndController@index')->name('home');
Route::get('send/sms','FrontEndController@messageStore')->name('sms.store');

Route::get('/login','loginController@login')->name('login');
Route::post('/login/store','loginController@store')->name('login.store');

/* BackendAboutController*/
Route::middleware(['auth'])->group(function () {
	Route::get('/backend/about','BackendAboutController@index')->name('about');
	Route::get('/backend/about/create','BackendAboutController@create')->name('about.create');
	Route::post('/backend/about/store','BackendAboutController@store')->name('about.store');
	Route::get('/backend/about/edit/{id}','BackendAboutController@edit')->name('about.edit');
	Route::put('/backend/about/update/{id}','BackendAboutController@update')->name('about.update');
	/* BackendAboutController*/

	Route::get('/backend/education','BackendEducationController@index')->name('education');
	Route::get('/backend/education/create','BackendEducationController@create')->name('education.create');
	Route::post('/backend/education/store','BackendEducationController@store')->name('education.store');
	Route::get('/backend/education/edit/{id}','BackendEducationController@edit')->name('education.edit');
	Route::put('/backend/education/update/{id}','BackendEducationController@update')->name('education.update');

	/* BackendEducationController*/
	Route::get('/backend/portfolio','BackendPortfolioController@index')->name('portfolio');
	Route::get('/backend/portfolio/create','BackendPortfolioController@create')->name('portfolio.create');
	Route::post('/backend/portfolio/store','BackendPortfolioController@store')->name('portfolio.store');
	Route::get('/backend/portfolio/edit/{id}','BackendPortfolioController@edit')->name('portfolio.edit');
	Route::put('/backend/portfolio/update/{id}','BackendPortfolioController@update')->name('portfolio.update');
	Route::delete('/backend/portfolio/update/{id}','BackendPortfolioController@destroy')->name('portfolio.delete');

	/* SkillsController*/
	Route::get('/backend/skills','SkillsController@index')->name('skills');
	Route::get('/backend/skills/create','SkillsController@create')->name('skills.create');
	Route::post('/backend/skills/store','SkillsController@store')->name('skills.store');
	Route::get('/backend/skills/edit/{id}','SkillsController@edit')->name('skills.edit');
	Route::put('/backend/skills/update/{id}','SkillsController@update')->name('skills.update');
	Route::delete('/backend/skills/update/{id}','SkillsController@destroy')->name('skills.delete');

	/* SkillsController*/
	Route::get('/backend/contacts','ContactController@index')->name('contacts');
	Route::get('/backend/contacts/create','ContactController@create')->name('contacts.create');
	Route::post('/backend/contacts/store','ContactController@store')->name('contacts.store');
	Route::get('/backend/contacts/edit/{id}','ContactController@edit')->name('contacts.edit');
	Route::put('/backend/contacts/update/{id}','ContactController@update')->name('contacts.update');
	Route::delete('/backend/contacts/update/{id}','ContactController@destroy')->name('contacts.delete');

	Route::get('sms/all','FrontEndController@showAll')->name('sms.showAll');
	Route::get('sms/show/{id}','FrontEndController@show')->name('message.show');
	Route::delete('sms/delete/{id}','FrontEndController@destroy')->name('message.delete');

	Route::get('/login/logout','loginController@logout')->name('logout');
});