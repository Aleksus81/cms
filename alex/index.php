

<?php

/*error_reporting(E_ALL);
ini_set("display_errors", 1);
require_once 'engine/bootstrap.php';*/


error_reporting(E_ALL);
ini_set("display_errors", 1);
ini_set('error_log', '/var/www/alex/SmotryOshibku.txt');

define('ROOT_DIR', __DIR__);
define('ENV', 'Cms');
require_once 'engine/bootstrap.php';


?>