<?php

require_once '../src/helpers/common.php';

require BASE_PATH . '/../vendor/autoload.php';

require  base_path('/config/bootstrap.php');

use App\config\database as Database;
 new Database();

 require base_path('/routes/routes.php');


