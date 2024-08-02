<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['about'] = 'welcome/demo';

$route['home'] = 'PageController/index';

// pass paramiter 

$route['blog/(:any)'] = 'PageController/blog/$1';

// $route['blog/(:num)'] = 'PageController/blog/$1';

$route['employee'] = 'Frontend/EmployeeController/index';
$route['employee/add'] = 'Frontend/EmployeeController/create';
$route['employee/store'] = 'Frontend/EmployeeController/store';
$route['employee/edit/(:any)'] = 'Frontend/EmployeeController/edit/$1';
