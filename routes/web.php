<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\CompanyController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'admin'])->group(function () {

    // Route::get('/admin', function () {
    //     return view('admin.dashboard');
    // });

    
    Route::get('/admin','App\Http\Controllers\CompanyController@display');
    //downloads
    Route::get('/download','App\Http\Controllers\Admin\DashboardController@downloadpdf');
    
    
Route::get('/company','App\Http\Controllers\CompanyController@index');

    Route::get('/user-registered','App\Http\Controllers\Admin\DashboardController@registered');
    
    Route::get('/user-edit/{id}','App\Http\Controllers\Admin\DashboardController@registedit');

    Route::put('/user_update{id}','App\Http\Controllers\Admin\DashboardController@registerupdate');
    
    Route::get('/user-delete/{id}','App\Http\Controllers\Admin\DashboardController@registerdelete');

    Route::get('/search','App\Http\Controllers\CompanyController@search')->name('search');
});

Route::post('/addimage','App\Http\Controllers\CompanyController@store')->name('addimage');
Route::get('/edit-comp/{id}','App\Http\Controllers\CompanyController@edit');
Route::put('/update-comp/{id}','App\Http\Controllers\CompanyController@update');
Route::get('/delete-comp/{id}','App\Http\Controllers\CompanyController@delete');

Route::get('/send-email','App\Http\Controllers\CompanyController@sendEmail');
//employee
Route::post('/addemp','App\Http\Controllers\EmployeeController@store')->name('addemp');
Route::get('/employee','App\Http\Controllers\EmployeeController@show');
Route::get('/empadd','App\Http\Controllers\EmployeeController@index');
Route::get('/edit-emp/{id}','App\Http\Controllers\EmployeeController@edit');
Route::put('/update-emp/{id}','App\Http\Controllers\EmployeeController@update');

Route::get('/searchemp','App\Http\Controllers\EmployeeController@search')->name('searchemp');
Route::get('/delete-emp/{id}','App\Http\Controllers\EmployeeController@destroy');
Route::get('/inner-join/{name}','App\Http\Controllers\CompanyController@innerjoin')->name('employees.innerjoin');
Route::get('/srch','App\Http\Controllers\EmployeeController@srch')->name('srch');
Route::get('/downlod','App\Http\Controllers\EmployeeController@downloadpdf');
//transaction
Route::get('/transadd','App\Http\Controllers\TransactionController@index');
Route::post('/addtrans','App\Http\Controllers\TransactionController@store')->name('addtrans');
Route::get('/impotrans','App\Http\Controllers\TransactionController@importForm')->name('impotrans');
Route::post('/import','App\Http\Controllers\TransactionController@import')->name('import');

Route::get('/deltrans','App\Http\Controllers\TransactionController@destroy')->name('deltrans');;
Route::get('/transaction','App\Http\Controllers\TransactionController@show');




// Route::get('/searchtran','App\Http\Controllers\TransactionController@search')->name('searchtran');



// Route::get('send-mail', function () {

   
 
   
//     $details = [
//         'name' => $company->name,
//         'title' => 'Mail from ItSolutionStuff.com',
//         'body' => 'This is for testing email using smtp'
//     ];
   
//     \Mail::to('ranianchal2001@gmail.com')->send(new \App\Mail\CompanyMail($company));
   
//     dd("Email is Sent.");
// });
// Route::get('/send-mail','App\Http\Controllers\CompanyController@sendmail');




// Route::post('signup', 'API\AuthController@signup');
// Route::post('login', 'API\AuthController@login');
// Route::post('forgot-password', 'API\AuthController@Forgot_Password');
//         Route::post('verify-mobile-otp', 'API\AuthController@Verify_mobile_Otp');
//         Login with facebook api and login with gmail api