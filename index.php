<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

// ! Подключаем все наши общие классы: Модель, Контроллер и Представление.
require_once 'core/Model.php';
require_once 'core/Controller.php';
require_once 'core/View.php';
require_once 'core/Route.php';  // ! Подключаем роутинг.
Route::start();     // ! Запускаем маршрутизатор.