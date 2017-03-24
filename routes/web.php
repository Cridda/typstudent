<?php
use App\Http\Controllers\AdminController;
use App\Offerte;
?>

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
    return view('welcome', ['offertesCount' => Offerte::all()->where('status', '0')->count()]);
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/admin', 'AdminController@adminDashboard');



//GUEST
Route::get('/succes', 'GuestController@succes');



//OFFERTES
Route::get('/offertes', 'AdminController@allOffertes');
Route::post('/offerte', 'OfferteController@store');
Route::get('/offertes/{id}/done', 'AdminController@setOfferteDone');
Route::get('/offertes/{id}', 'AdminController@showOfferte');
Route::put('/offertes/{id}/edit', 'AdminController@editOfferte');