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



Route::get("/","UserController@index")->name('index');
Route::get("/village","LocationController@village")->name('village');
Route::post("/village-store","LocationController@villageStore")->name('village-store');


Route::resource('offices', 'OfficeController');
Route::resource('doctors', 'DoctorController');

Route::resource('farmers', 'FarmerController');
Route::resource('medichines', 'MedichineController');
Route::resource('medichine-categories', 'MedichineCategoryController');


Route::resource('advices', 'AdviceController');
Route::resource('clinical-signs', 'ClinicalSignController');
Route::resource('necropsy', 'NecropsyController');
Route::resource('diagnosis', 'DiagnosisController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');










//////////   Api Links

Route::get('divisions_list_api', 'LocationController@divisionListApi')->name('divisions_list_api');
Route::get('district_list_api', 'LocationController@districtListApi')->name('district_list_api');
Route::get('upazilla_list_api', 'LocationController@upazillatListApi')->name('upazilla_list_api');
Route::get('union_list_api', 'LocationController@unionListApi')->name('union_list_api');
Route::get('village_list_api', 'LocationController@villageListApi')->name('village_list_api');

Route::get('village_farmer_list_api', 'FarmerController@villageFarmerListApi')->name('village_farmer_list_api');
Route::get('medichine_category_list_api', 'MedichineCategoryController@medichineCategoryListApi')->name('medichine_category_list_api');
Route::get('office_list_api', 'OfficeController@officeListApi')->name('office_list_api');





Route::resource('test', 'TestController');
