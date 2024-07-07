<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes with
| underscores in the controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['barang/data_barang'] = 'beranda/data_barang';
$route['barang/search_barang'] = 'beranda/search_barang';
$route['barang/create'] = 'beranda/create';
$route['login'] = 'login'; 
$route['logout'] = 'login/logout';
$route['admin'] = 'admin/index';
$route['data_petugas'] = 'data_petugas/data_petugas';
$route['petugas/tambah_petugas'] = 'petugas/tambah_petugas';

$route['petugas/tambah_petugas'] = 'petugas/tambah_petugas';
$route['petugas/store'] = 'petugas/store';
$route['petugas/edit_petugas'] = 'petugas/edit_petugas';

$route['petugas/edit_petugas/(:num)'] = 'petugas/edit_petugas/$1';
$route['petugas/update/(:num)'] = 'petugas/update/$1';





