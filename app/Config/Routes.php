<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('principal', 'Home::index');
$routes->get('quienes_somos', 'Home::quienes_somos');
$routes->get('acerca', 'Home::acerca');
$routes->get('iniciar_sesion', 'Home::iniciar_sesion');
$routes->get('registro', 'Home::registro');