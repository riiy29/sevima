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
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Web';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['perpustakaan'] = 'buku/perpus';
$route['bukudetail/(:num)'] = 'buku/bukudetail/$1';
$route['belajar'] = 'pelajaran/belajar';
$route['subbelajar/(:num)'] = 'pelajaran/subbelajar/$1';
$route['belajardetail/(:num)'] = 'video/belajardetail/$1';
$route['murid'] = 'Web/murid';
$route['absen'] = 'absen/absen';
$route['hubungiguru'] = 'guru/hubungiguru';
$route['guru'] = 'Web/guru';
$route['mengajar'] = 'Web/mengajar';

// Auth
$route['auth'] = 'Auth/view';
$route['register'] = 'Auth/register';

// Dashboard 
$route['dashboard'] = 'Dashboard/home';
$route['dashboard/absen'] = 'absen/home';
$route['dashboard/pelajaran'] = 'pelajaran/home';
$route['dashboard/video'] = 'video/home';
$route['dashboard/jurusan'] = 'Jurusan/home';
$route['dashboard/buku'] = 'buku/home';
$route['dashboard/guru'] = 'guru/home';
$route['dashboard/user'] = 'user/home';