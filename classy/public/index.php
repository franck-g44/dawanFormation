<?php

define('SRC_DIR', _DIR_.'/../src' );

require_once SRC_DIR.'/Application.php';

$app = new Application();

$response = $app->run();

$response->send();

