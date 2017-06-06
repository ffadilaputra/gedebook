<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//Custom Route Disini

$route['login'] = 'user/login';
$route['register'] = 'user/register';