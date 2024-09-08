<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\AsistenController;

/**
 * @var RouteCollection $routes
 */
$routes->get('ktp', 'Ktp::index');
$routes->get('ktm', 'KtmController::index');
$routes->get('input', 'PesanController::input');
$routes->get('proses', 'PesanController::proses');
$routes->get('kelulusan', 'kelulusanController::input');
$routes->get('status', 'kelulusanController::proses');
$routes->get('buku', 'BukuController::index');

$routes->get('mahasiswa', 'MahasiswaController::index');
$routes->get('inputMahasiswa', 'MahasiswaController::toInputMahasiswa');
$routes->post('submitMahasiswa', 'MahasiswaController::submitMahasiswa');
$routes->get('updateMahasiswa', 'MahasiswaController::updateMahasiswa');
$routes->get('deleteMahasiswa', 'MahasiswaController::deleteMahasiswa');

$routes->get('asisten', 'AsistenController::index');
$routes->match(['get', 'post'], 'asisten/simpan', [AsistenController::class, 'simpan']);
$routes->match(['get', 'post'], 'asisten/update', [AsistenController::class, 'perbarui']);
$routes->match(['get', 'post'], 'asisten/delete', [AsistenController::class, 'hapus']);


$routes->get('ToDoList', 'PenggunaToDoController::index');
$routes->post('ToDoList/login', 'PenggunaToDoController::login');
$routes->get('ToDoList/sign', 'PenggunaToDoController::signUpView');
$routes->post('ToDoList/signup', 'PenggunaToDoController::signUp');
$routes->get('ToDoList/app', 'ToDoListController::index');
$routes->post('ToDoList/simpan', 'ToDoListController::simpan');
$routes->get('ToDoList/perbarui/(:segment)', 'ToDoListController::perbarui');
$routes->get('ToDoList/hapus/(:segment)', 'ToDoListController::hapus');
// $routes->match(['get', 'post'], 'ToDoList/simpan', [ToDoListController::class, 'simpan']);
// $routes->match(['get', 'post'], 'ToDoList/perbarui', [ToDoListController::class, 'perbarui']);
// $routes->match(['get', 'post'], 'ToDoList/hapus', [ToDoListController::class, 'hapus']);


?>