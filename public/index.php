<?php

// date_default_timezone_set("Asia/Jakarta");
// setlocale(LC_ALL, 'IND');
setlocale(LC_ALL, 'id_ID.UTF8', 'id_ID.UTF-8', 'id_ID.8859-1', 'id_ID', 'IND.UTF8', 'IND.UTF-8', 'IND.8859-1', 'IND', 'Indonesian.UTF8', 'Indonesian.UTF-8', 'Indonesian.8859-1', 'Indonesian', 'Indonesia', 'id', 'ID', 'en_US.UTF8', 'en_US.UTF-8', 'en_US.8859-1', 'en_US', 'American', 'ENG', 'English');

ini_set('max_execution_time', 300);


require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../app/config.php';

$app = new mvc\Mvc($config);
$app->run();
