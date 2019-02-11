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
Route::get('/test/{id}',['uses'=>'newcontroller@show']);
Route::resource('register','CreateUser');
Route::get('user/edit/{id}',['uses'=>'usercontroller@edit'])->name('user.edit');
Route::get('dashboard', function () {
    return redirect('home/dashboard');
});
Route::get('user/login',function(){
    return View::make('welcome',array('name'=>'Taylor'));
});
Route::get('user/create','usercontroller@create')->name('user.register');
Route::post('user/store','usercontroller@store')->name('user.store');
Route::get('user/show/{id}','usercontroller@show')->name('user.show');
Route::get('user','usercontroller@index')->name('user.index');
Route::put('user/update/{id}','usercontroller@update')->name('user.update');
Route::get('user/delete/{id}','usercontroller@delete')->name('user.delete');
Route::delete('user/destroy/{id}','usercontroller@destroy')->name('user.destroy');
Route::get('index',['uses'=>'usercontroller@index']);
Route::get('test',['uses'=>'usercontroller@model']);
Route::post('match',function(){
    echo "successful";
    
})->middleware('mymiddle')->name('match');
Route::get('error',function()
           {
               echo "failed";
           })->name('error');
Route::get('input',function()
           {
               return view('input');
           });
/*Auth::routes();
Route::get('/login','')
Route::get('/home', 'HomeController@index')->name('home');*/
Route::get('login','php_28_1@login')->name('login');
Route::post('login_success','php_28_1@login_success')->name('login_success');
Route::resource('php','usercontroller');
