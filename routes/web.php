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

Route::get('/', 'HomeController@Index');
Route::get('/home', 'HomeController@home');

Route::get('/cart', 'HomeController@Cart');

Route::get('/categories', 'HomeController@categories');
Route::get('/checkout', 'HomeController@checkout');
Route::get('/contact', 'HomeController@contact');
Route::get('/product', 'HomeController@product');


//Admin

Route::namespace('Admin')
    ->prefix('admin')
    ->group(function () {
        Route::get('/', 'AdminController@index');
		

});

Route::namespace('Admin')
    ->prefix('admin')
    ->group(function () {
        Route::get('/dashboardv2', 'AdminController@index');


});
Route::namespace('Admin')
    ->prefix('admin')
    ->group(function () {
        Route::get('/dashboardv1', 'AdminController@dashboardv1');
	

});

Route::namespace('Admin')
    ->prefix('admin')
    ->group(function () {
        Route::get('/forms/general', 'AdminController@forms_general');
	

});

Route::namespace('Admin')
    ->prefix('admin')
    ->group(function () {
        Route::get('/forms/advanced', 'AdminController@forms_advanced');
	

});

Route::namespace('Admin')
    ->group(function () {
        Route::get('admin/forms/editors', 'AdminController@forms_editors');
	

});

Route::namespace('Admin')
    ->group(function () {
        Route::get('admin/charts/chartjs', 'AdminController@chartjs');
	

});


Route::namespace('Admin')
    ->group(function () {
        Route::get('admin/charts/flot', 'AdminController@flot');
	

});


Route::namespace('Admin')
    ->group(function () {
        Route::get('admin/charts/inline', 'AdminController@inline');
	

});


Route::namespace('Admin')
    ->group(function () {
        Route::get('admin/charts/morris', 'AdminController@morris');
	

});


Route::namespace('Admin')
    ->group(function () {
        Route::get('admin/widgets', 'AdminController@widgets');
	

});

Route::namespace('Admin')
    ->group(function () {
        Route::get('admin/calendar', 'AdminController@calendar');
	

});
//layout
Route::namespace('Admin')
    ->group(function () {
        Route::get('admin/layout/top-nav', 'AdminController@topnav');
	

});

Route::namespace('Admin')
    ->group(function () {
        Route::get('admin/layout/boxed', 'AdminController@boxed');
	

});

Route::namespace('Admin')
    ->group(function () {
        Route::get('admin/layout/collapsed-sidebar', 'AdminController@collapsedsidebar');
	

});

Route::namespace('Admin')
    ->group(function () {
        Route::get('admin/layout/fixed', 'AdminController@fixed');
	

});

//mailbox

Route::namespace('Admin')
    ->group(function () {
        Route::get('admin/mailbox/mailbox', 'AdminController@mailbox');
	

});

Route::namespace('Admin')
    ->group(function () {
        Route::get('admin/mailbox/compose', 'AdminController@compose');
	

});

Route::namespace('Admin')
    ->group(function () {
        Route::get('admin/mailbox/read-mail', 'AdminController@readmail');
	

});

//tables
Route::namespace('Admin')
    ->group(function () {
        Route::get('admin/tables/simple', 'AdminController@simpletable');
	

});

Route::namespace('Admin')
    ->group(function () {
        Route::get('admin/tables/data', 'AdminController@datatable');
	

});

//UI
Route::namespace('Admin')
    ->group(function () {
        Route::get('admin/UI/general', 'AdminController@general');
	

});

Route::namespace('Admin')
    ->group(function () {
        Route::get('admin/UI/buttons', 'AdminController@buttons');
	

});
Route::namespace('Admin')
    ->group(function () {
        Route::get('admin/UI/icons', 'AdminController@icons');
	

});

Route::namespace('Admin')
    ->group(function () {
        Route::get('admin/UI/modals', 'AdminController@modals');
	

});
Route::namespace('Admin')
    ->group(function () {
        Route::get('admin/UI/sliders', 'AdminController@sliders');
	

});
Route::namespace('Admin')
    ->group(function () {
        Route::get('admin/UI/timeline', 'AdminController@timeline');
	

});

//examples
Route::namespace('Admin')
    ->group(function () {
        Route::get('admin/examples/404', 'AdminController@fourzerofour');
	

});
Route::namespace('Admin')
    ->group(function () {
        Route::get('admin/examples/500', 'AdminController@fivezerozero');
	

});
Route::namespace('Admin')
    ->group(function () {
        Route::get('admin/examples/blank', 'AdminController@blank');
	

});
Route::namespace('Admin')
    ->group(function () {
        Route::get('admin/examples/invoice', 'AdminController@invoice');
	

});

Route::namespace('Admin')
    ->group(function () {
        Route::get('admin/examples/invoice-print', 'AdminController@invoiceprint');
	

});
Route::namespace('Admin')
    ->group(function () {
        Route::get('admin/examples/lockscreen', 'AdminController@lockscreen');
	

});
Route::namespace('Admin')
    ->group(function () {
        Route::get('admin/examples/login', 'AdminController@login');
	

});
Route::namespace('Admin')
    ->group(function () {
        Route::get('admin/examples/pace', 'AdminController@pace');
	

});
Route::namespace('Admin')
    ->group(function () {
        Route::get('admin/examples/profile', 'AdminController@profile');
	

});
Route::namespace('Admin')
    ->group(function () {
        Route::get('admin/examples/register', 'AdminController@register');
	

});

