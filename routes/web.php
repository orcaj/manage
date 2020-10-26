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

    return redirect()->route('login');

});



Auth::routes();



Route::get('fix-bug','HomeController@fix');



Route::group(['middleware' => ['auth']], function(){

    Route::get('pdf-donwload/{id}', 'HomeController@pdf')->name('pdf-download');

    Route::get('/home', 'HomeController@index')->name('home');

    Route::resource('customer', 'CustomerController');

    Route::resource('product', 'ProductController');

    Route::get('sub-index', 'HomeController@sub_index')->name('sub.index');

    Route::patch('profile_update/{id}', 'HomeController@profile_update')->name('profile_update');    
    Route::get('profile_edit', 'HomeController@profile_edit')->name('profile_edit');    
    

    Route::group(['middleware' => ['super']], function(){

        Route::resource('admin-subsidiary', 'Admin\SubsidiaryController');

        Route::get('super-index', 'Admin\HomeController@index')->name('super.index');


        Route::resource('admin-customer', 'Admin\CustomerController');

        Route::resource('admin-product', 'Admin\ProductController');

    });

});

