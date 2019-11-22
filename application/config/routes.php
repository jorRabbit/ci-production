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


$route['default_controller']    = 'AuthController';
$route['404_override']          = '';
$route['translate_uri_dashes']  = FALSE;
