<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| $2y$10$Y4qLfb2DRbDQ0tPHPAetYuwkEg6e5NTDTi9PH.Rns.cRI/mlyNl6i
*/
if(SITE_MAINTENANCE=='NO')
{
	Route::get('/','HomeController@home_page');
	Route::get('/home1','HomeController@another_home_page');
}
else
{
	Route::get('/','HomeController@comming_soon');
}