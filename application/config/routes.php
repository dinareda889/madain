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
|	https://codeigniter.com/user_guide/general/routing.html
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
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

/*
$route['default_controller'] = 'dashboard';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
*/

$route['default_controller'] = 'Web';
/*$route['default_controller'] = 'Dashboard';*/
/*$route['404_override'] = 'Web';*/
$route['404_override'] = 'Dashboard';
$route['translate_uri_dashes'] = true;

/*
$route['about_us'] = 'Web/about_us';
$route['services'] = 'Web/services';
$route['clients'] = 'Web/clients';
$route['launch_project'] = 'Web/launch_project';
$route['services_details/(:num)'] = 'Web/services_details/$1';
$route['works/(:any)'] = 'Web/all_products/$1';
$route['all_works/(:any)'] = 'Web/all_works/$1';
$route['products/(:any)'] = 'Web/jobs/$1';
$route['products/(:num)/(:num)'] = 'Web/jobs/$1/$1';
$route['product_details/(:any)'] = 'Web/product_details/$1';
$route['services_details/(:any)'] = 'Web/services_details/$1';
$route['contact'] = 'Web/contact';
//$route['price_list'] = 'Web/price_list';
$route['subscription'] = 'Web/subscription';
*/

/****************************************************/
/*
$route['Customer/add'] = 'Pelanggan/add';
$route['Customer/process'] = 'Pelanggan/process';
$route['Customer/edit/(:num)'] = 'Pelanggan/edit/$1';
$route['Customer/del/(:num)'] = 'Pelanggan/del/$1';

$route['Stock/in'] = 'Stock/stock_in_data';
$route['Stock/in/add'] = 'Stock/stock_in_add';
$route['Stock/in/del/(:num)/(:num)'] = 'Stock/stock_in_del';

$route['Stock/out'] = 'Stock/stock_out_data';
$route['Stock/out/add'] = 'Stock/stock_out_add';
$route['Stock/out/del/(:num)/(:num)'] = 'Stock/stock_out_del';

*/
$route['Success'] = 'Api/Success';

