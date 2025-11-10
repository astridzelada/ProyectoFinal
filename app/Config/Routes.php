<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('eventos', 'EventosController::index');
$routes->get('inicio', 'InicioController::index');

$routes->post('agregar_evento','EventosController::agregarEvento');
$routes->get('buscar_evento/(:num)','EventosController::buscarEvento/$1');
$routes->post('modificar_evento','EventosController::modificarEventos');
$routes->get('eliminar_evento/(:num)','EventosController::eliminarEvento/$1');   


//Equipo
$routes->get('equipos', 'EquiposController::index');
$routes->post('agregar_equipo','EquiposController::agregarEquipo');
$routes->get('buscar_equipo/(:num)','EquiposController::buscarEquipo/$1');
$routes->post('modificar_equipo','EquiposController::modificarEquipo');
$routes->get('eliminar_equipo/(:num)','EquiposController::eliminarEquipo/$1');

//Pagos
$routes->get('pagos', 'PagosController::index');
$routes->post('agregar_pago','PagosController::agregarPago');
$routes->get('buscar_pago/(:num)','PagosController::buscarPagos/$1');
$routes->post('modificar_pago','PagosController::modificarPagos');
$routes->get('eliminar_pago/(:num)','PagosController::eliminarPagos/$1');

//Usuarios
$routes->get('usuarios', 'UsuariosController::index');
$routes->post('agregar_usuario','UsuariosController::agregarUsuario');
$routes->get('buscar_usuario/(:num)','UsuariosController::buscarUsuarios/$1');
$routes->post('modificar_usuario','UsuariosController::modificarUsuarios');
$routes->get('eliminar_usuario/(:num)','UsuariosController::eliminarUsuarios/$1');


//LOGIN
$routes->post('iniciar_sesion','AdministradorController::index');
