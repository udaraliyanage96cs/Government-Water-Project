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
Route::get('/signout',function(){
    Auth::logout();
    return redirect('/');
});


Route::Post('/login','UserController@login');
Route::get('/attachuser/{id}','UserController@attachuser');
Route::get('/viewuser/{id}','UserController@viewuser');
Route::post('/addahuser/{id}','UserController@addahuser');



Route::get('/dashboard','DashboardController@dashboard');
Route::get('/projectscreen',"DashboardController@projectscreen");
Route::get('/newproject',"DashboardController@newproject");
Route::get('/settings','DashboardController@settings');
Route::get('/permissions','DashboardController@permissions');



Route::get('/viewproject/{id}','ProjectController@viewproject');
Route::post('/insert_new_project','ProjectController@insert_new_project');
Route::get('/attachuser','ProjectController@attachuser');


Route::post('/adduserpermissions','PermissionController@adduserpermissions');

Route::post('/addpostoffice','AddressController@addpostoffice');
Route::post('/addarea','AddressController@addarea');
Route::post('/addvillage','AddressController@addvillage');
Route::post('/addlane','AddressController@addlane');

Route::get('/consumers','ConsumerController@consumers');
Route::get('/newconsumer','ConsumerController@newconsumer');
Route::post('/addnewconsumer','ConsumerController@addnewconsumer');
Route::get('/viewconsumers/{id}','ConsumerController@viewconsumers');
Route::get('/removeconsumers/{id}','ConsumerController@removeconsumers');



Route::get('/connection/{id}','ConnectionController@connection');
Route::get('/newconnection','ConnectionController@newconnection');
Route::get('/getArea/{id}','ConnectionController@getArea');
Route::get('/getVillage/{id}','ConnectionController@getVillage');
Route::get('/getlane/{id}','ConnectionController@getlane');
Route::get('/addconnection/{id}','ConnectionController@addconnection');
Route::post('/addnewconnection/{id}','ConnectionController@addnewconnection');
Route::get('/addbeneficiaries/{id}','ConnectionController@addbeneficiaries');
Route::post('/addnewbenif/{id}','ConnectionController@addnewbenif');


Route::post('/addvalve','SettingController@addvalve');
Route::post('/addgndev','SettingController@addgndev');
Route::post('/addbillzone','SettingController@addbillzone');
Route::post('/addconsumerprefix','SettingController@addconsumerprefix');
Route::post('/addconnerefix','SettingController@addconnerefix');

