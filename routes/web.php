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

 Route::get('/welcome', function () {
     return view('welcome');
 });

//Auth::routes();

//Route::get('/home', 'HomeController@index');
Route::get('/travel-insurance', function () {
    return view('cruise.insurance');
});
Route::get('/brochures-collection', function () {
    return view('cruise.brochures');
});
Route::get('/home', ['as' => 'home', 'uses' => 'CruiseController@index']);
Route::get('/', 'CruiseController@index');
//Route::get('sitemap.xml', 'CruiseController@sitemap');

//Route::get('/m/{id}/{name}', 'CruiseController@pagemenu');
//Route::get('/cruise/', 'CruiseController@getCruise');

//Route::get('/l/{id}/{name}', ['as' => 'pagelistofmenu', 'uses' => 'CruiseController@pagelistofmenu']);
Route::get('/posts/{id}/{name}', ['as' => 'pageofpost', 'uses' => 'CruiseController@pageofpost']);
Route::get('/p/{id}/{name}', ['as' => 'pageofpost', 'uses' => 'CruiseController@pageofpost']);
Route::post('/cart', 'CartController@cart');
Route::get('/cart', ['as' => 'cart', 'uses' => 'CartController@cart']);
Route::get('/make-book', ['as' => 'makebook', 'uses' => 'CartController@makebook']);
Route::post('/make-book', ['as' => 'storeorder', 'uses' => 'CartController@storeorder']);
Route::get('/bookingpayment', ['as' => 'bookingpayment', 'uses' => 'CartController@bookingpayment']);
Route::post('/bookingpayment', ['as' => 'bookingpaymentPost', 'uses' => 'CartController@bookingpaymentPost']);
Route::get('/category/{id}', 'CruiseController@index');
Route::get('/contactform', ['as' => 'contactform', 'uses' => 'CruiseController@contactform']);
Route::post('/contactstore', 'CruiseController@contactstore');
// Route::post('/contactonrequest', 'CruiseController@contactonrequest');

Route::get('/contactformresult', 'CruiseController@contactformresult');


Route::post('/enquireForm', 'CruiseController@enquireForm');

Route::get('/new-teacher-registration', ['as' => 'newteacherregistration', 'uses' => 'CruiseController@newteacherregistration']);
Route::post('/newteacherregistrationstore', ['as' => 'newteacherregistrationstore', 'uses' => 'CruiseController@newteacherregistrationstore']);




Route::get('/newsletter', ['as' => 'newsletter', 'uses' => 'CruiseController@newsletter']);
Route::post('/newsletterstore', 'CruiseController@newsletterstore');
Route::get('/askforbrochure', ['as' => 'askforbrochure', 'uses' => 'CruiseController@askforbrochure']);
Route::post('/askforbrochurestore', 'CruiseController@askforbrochurestore');
Route::post('/ask-a-question', 'CruiseController@askaquestion');
Route::get('/bookingresult/{ordercode}', ['as' => 'bookingresult', 'uses' => 'CartController@bookingresult']);
Route::get('/bookingresultrequest/{ordercode}', ['as' => 'bookingresultrequest', 'uses' => 'CartController@bookingresultrequest']);

Route::get('/booking/{id}', ['as' => 'booking', 'uses' => 'CartController@booking']);
Route::get('/check-order', ['as' => 'check-order', 'uses' => 'CartController@checkorder']);


Route::get('/schools', ['as' => 'europecruise', 'uses' => 'CruiseController@europecruises']);
Route::get('/worldwide-cruises', ['as' => 'europecruise', 'uses' => 'CruiseController@worldwidecruises']);
Route::get('/themed-cruises', ['as' => 'europecruise', 'uses' => 'CruiseController@themedcruise']);
Route::get('/terms-conditions', ['as' => 'europecruiseterm', 'uses' => 'CruiseController@europecruiseterm']);
Route::get('/privacy-policy', ['as' => 'europepolicy', 'uses' => 'CruiseController@europepolicy']);
Route::get('/search', ['as' => 'search', 'uses' => 'CruiseController@search']);

//

Route::get('/find-agent', ['as' => 'findagent', 'uses' => 'CruiseController@findagent']);
Route::post('/find-agent', ['as' => 'findagent', 'uses' => 'CruiseController@findagent']);
// Mock
Route::get('/mock', ['as' => 'demotest', 'uses' => 'CruiseController@demotest']);
Route::get('/my-profile', ['as' => 'myprofile', 'uses' => 'CruiseController@myprofile']);
Route::get('/my-bookings', ['as' => 'mybooking', 'uses' => 'CartController@mybooking']);
Route::post('/my-profile', ['as' => 'myprofilepost', 'uses' => 'CruiseController@myprofilepost']);
// Route::prefix('admin')->group(function () {
//     Route::get('/', 'AdminController@index');
// });
//new

Route::get('/projects', ['as' => 'projects', 'uses' => 'CruiseController@projects']);
//Route::get('/projects/community', ['as' => 'projects', 'uses' => 'CruiseController@mock2']);
//Route::get('/projects/{slug}', ['as' => 'projectsslug', 'uses' => 'CruiseController@mock21']);
Route::get('/projects/{id}/{slug}', ['as' => 'pageofpostslug', 'uses' => 'CruiseController@pageofpostslug']);
Route::get('/projects/{slug}', ['as' => 'triptypeslug', 'uses' => 'CruiseController@projectsslug']);

Route::get('/trip-types', ['as' => 'triptype', 'uses' => 'CruiseController@triptype']);
// Route::get('/trip-types/details', ['as' => 'triptypedetail', 'uses' => 'CruiseController@triptypedetail']);
Route::get('/trip-types/{slug}', ['as' => 'triptypeslug', 'uses' => 'CruiseController@triptypeslug']);
Route::get('/trip-types/{id}/{name}', ['as' => 'pageofpost', 'uses' => 'CruiseController@pageofposttrip']);


Route::get('/destination', ['as' => 'projects', 'uses' => 'CruiseController@destination']);
Route::get('/destination/{slug}', ['as' => 'projects', 'uses' => 'CruiseController@destinationdetail']);
Route::get('/destination/Projects/{slug}', ['as' => 'projects', 'uses' => 'CruiseController@destinationproject']);
Route::get('/teachers', ['as' => 'teachers', 'uses' => 'CruiseController@teachers']);
Route::get('/teachers/{slug}', ['as' => 'teachersslug', 'uses' => 'CruiseController@teachersslug']);



Route::get('/safety', ['as' => 'safety', 'uses' => 'CruiseController@safety']);
Route::get('/safety/{slug}', ['as' => 'safetyslug', 'uses' => 'CruiseController@safetyslug']);
Route::get('/mock1', ['as' => 'mock1', 'uses' => 'CruiseController@mock1']);
Route::get('/mock2', ['as' => 'mock2', 'uses' => 'CruiseController@mock2']);
Route::get('/mock3', ['as' => 'mock3', 'uses' => 'CruiseController@mock3']);
Route::get('/about-us', ['as' => 'aboutus', 'uses' => 'CruiseController@aboutus']);
Route::post('/tracker/tracker.html', ['as' => 'tracker', 'uses' => 'CruiseController@tracker']);


Route::get('/{slug}', ['as' => 'pageofpost', 'uses' => 'CruiseController@pageofpostslugview']);


Route::group(['prefix' => 'admins','middleware' => 'auth'], function () {
	Route::get('/home', 'HomeController@index');
   Route::get('/', 'AdminController@index');
   //Route::get('/pricetable', 'PriceTableController@index');
   Route::resource('pricetable', 'PriceTableController');
   Route::get('/pricetables/imports', ['as' => 'pricetableimport', 'uses' => 'PriceTableController@imports']);
   Route::post('pricetables/importExcel', 'PriceTableController@importExcel');

   Route::resource('userview', 'UserViewController');
   Route::resource('contacts', 'ContactController');
   Route::resource('posts', 'PostsController');
    Route::resource('slide', 'SlideController');
});
