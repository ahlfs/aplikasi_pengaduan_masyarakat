<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Login and register
$routes->get('/', 'Auth::login');
$routes->get('/auth/login', 'Auth::login');
$routes->get('/auth/register', 'Auth::register');
$routes->post('/auth/valid_login', 'Auth::valid_login');
$routes->post('/auth/valid_register', 'Auth::valid_register');

// Login Admin
$routes->get('/LoginAdmin', 'LoginAdmin::index');

// Login User
$routes->get('/LoginUser', 'LoginUser::index');

// User
$routes->get('/user/add', 'User::AddAduanUser');
$routes->get('/user/home', 'User::Home');
$routes->get('/user/show', 'User::Show');
$routes->get('/logout', 'LoginUser::Logout');
$routes->get('/user/ldata_sleman', 'User::Show');
$routes->post('/aduanUser/save', 'AduanUser::save');
$routes->delete('/aduanUser/delete/(:num)', 'AduanUser::delete/$1');
$routes->get('/aduanUser/edit/(:num)', 'AduanUser::edit/$1'); 
$routes->post('/aduanUser/update/(:num)', 'AduanUser::update/$1');


// Admin
$routes->get('/admin/add', 'Admin::AddAduanAdmin');
$routes->get('/admin/dashboard', 'Admin::dashboard');
$routes->get('/admin/aduan', 'Admin::aduan');
$routes->get('/admin/akun', 'Admin::akuncenter');
$routes->post('/aduanAdmin/save', 'AduanAdmin::save');
$routes->delete('/aduanAdmin/delete/(:num)', 'AduanAdmin::delete/$1');
$routes->get('/aduanAdmin/edit/(:num)', 'AduanAdmin::edit/$1'); 
$routes->post('/aduanAdmin/update/(:num)', 'AduanAdmin::update/$1');