<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('home/', 'Home::index');


$routes->get('courses/', 'Courses::index');
$routes->match(['get', 'post'], 'courses/add', 'Courses::add');
$routes->match(['get', 'post'], 'courses/edit/(:num)', 'Courses::edit/$1');
$routes->get('courses/delete/(:num)', 'Courses::delete/$1');

$routes->get('enrollments/', 'Enrollments::index');
$routes->match(['get', 'post'], 'enrollments/add', 'Enrollments::add');
$routes->match(['get', 'post'], 'enrollments/edit/(:num)', 'Enrollments::edit/$1');
$routes->get('enrollments/delete/(:num)', 'Enrollments::delete/$1');

$routes->get('grades/', 'Grades::index');
$routes->match(['get', 'post'], 'grades/add', 'Grades::add');
$routes->match(['get', 'post'], 'grades/edit/(:num)', 'Grades::edit/$1');
$routes->get('grades/delete/(:num)', 'Grades::delete/$1');

$routes->get('students/', 'Students::index');
$routes->match(['get', 'post'], 'students/add', 'Students::add');
$routes->match(['get', 'post'], 'students/edit/(:num)', 'Students::edit/$1');
$routes->get('students/delete/(:num)', 'Students::delete/$1');

$routes->get('instructors/', 'Instructors::index');
$routes->match(['get', 'post'], 'instructors/add', 'Instructors::add');
$routes->match(['get', 'post'], 'instructors/edit/(:num)', 'Instructors::edit/$1');
$routes->get('instructors/delete/(:num)', 'Instructors::delete/$1');


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
