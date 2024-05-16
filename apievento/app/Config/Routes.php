<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
//rutas para recintoss
$routes->get('/recintos', 'RecintoController::index');
$routes->get('/recintos/documentacion', 'RecintoController::documentacionIndex');
$routes->get('/recintos/getByNombre/(:any)', 'RecintoController::getByNombre/$1');
$routes->get('/recintos/getByDireccion/(:any)', 'RecintoController::getByDireccion/$1');

//rutas para recintoss
$routes->get('/organizadores', 'OrganizadoresController::index');
$routes->get('/organizadores/documentacion', 'OrganizadoresController::documentacionIndex');
$routes->get('/organizadores/getByNombre/(:any)', 'OrganizadoresController::getByNombre/$1');
$routes->get('/organizadores/getByEmpresa/(:any)', 'OrganizadoresController::getByEmpresa/$1');
$routes->get('/organizadores/getByTelefono/(:any)', 'OrganizadoresController::getByTelefono/$1');
$routes->get('/organizadores/getByEmail/(:any)', 'OrganizadoresController::getByEmail/$1');

//rutas para artistas
$routes->get('/artistas', 'ArtistaController::index');
$routes->get('/artistas/documentacion', 'ArtistaController::documentacionIndex');
$routes->get('/artistas/getByNombre/(:any)', 'ArtistaController::getByNombre/$1');
$routes->get('/artistas/getByGenero/(:any)', 'ArtistaController::getByGenero/$1');
$routes->get('/artistas/getBySitio/(:any)', 'ArtistaController::getBySitio/$1');
$routes->get('/artistas/getByDescripcion/(:any)', 'ArtistaController::getByDescripcion/$1');
$routes->get('/artistas/getByNombreAndGenero/(:any)/(:any)', 'ArtistaController::getByNombreAndGenero/$1/$2');


// Rutas
$routes->get('/eventos', 'EventoController::index');
$routes->get('/eventos/documentacion', 'EventoController::documentacionIndex');
$routes->get('/eventos/getByNombre/(:any)', 'EventoController::getByNombre/$1');
$routes->get('/eventos/getByDescripcion/(:any)', 'EventoController::getByDescripcion/$1');
$routes->get('/eventos/getByTipo/(:any)', 'EventoController::getByTipo/$1');
$routes->get('/eventos/getByEstado/(:any)', 'EventoController::getByEstado/$1');
$routes->get('/eventos/getByFechaHora/(:any)', 'EventoController::getByFechaHora/$1');
$routes->get('/eventos/getByOrganizador/(:any)', 'EventoController::getByOrganizador/$1');
$routes->get('/eventos/getByArtistaAndUbicacion/(:any)/(:any)', 'EventoController::getByArtistaAndUbicacion/$1/$2');
$routes->get('/eventos/getByArtista/(:any)', 'EventoController::getByArtista/$1');
$routes->get('/eventos/getByUbicacion/(:any)', 'EventoController::getByUbicacion/$1');
