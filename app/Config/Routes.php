<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
/*
    ROUTER SETUP
*/
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Crud');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);
/*
    ROUTE DEFINITIONS
*/ 
//$routes->get('/', 'Home::index');
$routes->get('/', 'Crud::index');
$routes->get('editar/(:segment)', 'Crud::editar/$1');
$routes->get('/eliminar/(:any)','Crud::eliminar/$1');
$routes->post('/crear','Crud::crear');
$routes->post('/actualizar','Crud::actualizar');