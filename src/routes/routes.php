<?php

use App\config\routes as Route;
use App\controllers\BookController;

Route::get('/', [BookController::class, 'index']);

Route::run();




