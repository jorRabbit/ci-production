<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['home']                  = 'HomeController/index';
$route['content']               = 'HomeController/content';
$route['login']                 = 'AuthController';
$route['logout']                = 'AuthController/logout';

$route['user']                  = 'UserController/index';
$route['user-add']              = 'UserController/add';
$route['user-edit/(:num)']      = 'UserController/edit/$1';
$route['user-delete/(:num)']    = 'UserController/delete/$1';

$route['level']                  = 'LevelController/index';
$route['level-add']              = 'LevelController/add';
$route['level-edit/(:num)']      = 'LevelController/edit/$1';
$route['level-delete/(:num)']    = 'LevelController/delete/$1';

$route['event']                  = 'EventController/index';
$route['event-add']              = 'EventController/add';
$route['event-edit/(:num)']      = 'EventController/edit/$1';
$route['event-delete/(:num)']    = 'EventController/delete/$1';

$route['request']                  = 'RequestController/index';
$route['request-add']              = 'RequestController/add';
$route['request-edit/(:num)']      = 'RequestController/edit/$1';
$route['request-delete/(:num)']    = 'RequestController/delete/$1';

$route['request-child-delete/(:num)']    = 'RequestController/deletechild/$1';

$route['product']                  = 'ProductController/index';
$route['product-add']              = 'ProductController/add';
$route['product-edit/(:num)']      = 'ProductController/edit/$1';
$route['product-delete/(:num)']    = 'ProductController/delete/$1';


$route['default_controller']    = 'AuthController';
$route['404_override']          = '';
$route['translate_uri_dashes']  = FALSE;
