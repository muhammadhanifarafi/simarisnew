<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

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
$routes->setAutoRoute(true);
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
// $routes->get('/login', 'Auth::index', ['filter' => 'noauth']);
// $routes->post('/loginCheck', 'Auth::loginCheck');

// Filter on route group
//Common Routes
$routes->get('/', 'Welcome::index');
$routes->post('GetLogin', 'Welcome::index');
$routes->get('welcome/logout', 'Welcome::logout');
$routes->get('blocked', 'Welcome::forbiddenPage');
$routes->get('register', 'Welcome::register');
$routes->post('register', 'Welcome::registration');
$routes->get('home', 'Home::index');
$routes->get('users', 'Users::index');

// Setting Routes
$routes->get('users/userRoleAccess', 'Users::userRoleAccess');
$routes->post('users/createRole', 'Users::createRole');
$routes->post('users/updateRole', 'Users::updateRole');
$routes->delete('users/deleteRole', 'Users::deleteRole');
$routes->post('users/createUser', 'Users::createUser');
$routes->post('users/updateUser', 'Users::updateUser');
$routes->delete('users/deleteUser', 'Users::deleteUser');
$routes->post('users/changeMenuPermission', 'Users::changeMenuPermission');
$routes->post('users/changeMenuCategoryPermission', 'Users::changeMenuCategoryPermission');
$routes->post('users/changeSubMenuPermission', 'Users::changeSubMenuPermission');

$routes->post('menuManagement/createMenuCategory', 'Developers\MenuManagement::createMenuCategory');
$routes->post('menuManagement/createMenu', 'Developers\MenuManagement::createMenu');
$routes->post('menuManagement/createSubMenu', 'Developers\MenuManagement::createSubMenu');

//Developer Routes
$routes->get('menuManagement', 'Developers\MenuManagement::index');
$routes->get('crudGenerator', 'Developers\CRUDGenerator::index');
$routes->get('penilaianRisikoUnit', 'ProfilRisikoUnitController::index');

$routes->group('master', function ($routes) {
    // Sasaran
    $routes->get('master_profil_sasaran', 'MasterProfilSasaranController::index');
    $routes->get('master_profil_sasaran/data', 'MasterProfilSasaranController::getData');
    $routes->post('master_profil_sasaran/save', 'MasterProfilSasaranController::saveData');
    $routes->get('master_profil_sasaran/edit/(:num)', 'MasterProfilSasaranController::editData/$1');
    $routes->post('master_profil_sasaran/delete/(:num)', 'MasterProfilSasaranController::deleteData/$1');

    // Peristiwa
    $routes->get('master_profil_peristiwa', 'MasterProfilPeristiwaController::index');
    $routes->get('master_profil_peristiwa/data', 'MasterProfilPeristiwaController::getData');
    $routes->post('master_profil_peristiwa/save', 'MasterProfilPeristiwaController::saveData');
    $routes->get('master_profil_peristiwa/edit/(:num)', 'MasterProfilPeristiwaController::editData/$1');
    $routes->post('master_profil_peristiwa/delete/(:num)', 'MasterProfilPeristiwaController::deleteData/$1');

     // Penyebab
     $routes->get('master_profil_penyebab', 'MasterProfilPenyebabController::index');
     $routes->get('master_profil_penyebab/data', 'MasterProfilPenyebabController::getData');
     $routes->post('master_profil_penyebab/save', 'MasterProfilPenyebabController::saveData');
     $routes->get('master_profil_penyebab/edit/(:num)', 'MasterProfilPenyebabController::editData/$1');
     $routes->post('master_profil_penyebab/delete/(:num)', 'MasterProfilPenyebabController::deleteData/$1');

    // Mitigasi
     $routes->get('master_profil_mitigasi', 'MasterProfilMitigasiController::index');
     $routes->get('master_profil_mitigasi/data', 'MasterProfilMitigasiController::getData');
     $routes->post('master_profil_mitigasi/save', 'MasterProfilMitigasiController::saveData');
     $routes->get('master_profil_mitigasi/edit/(:num)', 'MasterProfilMitigasiController::editData/$1');
     $routes->post('master_profil_mitigasi/delete/(:num)', 'MasterProfilMitigasiController::deleteData/$1');
});


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
