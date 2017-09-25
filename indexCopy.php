<?php
error_reporting(0);
date_default_timezone_set('Asia/Jakarta');
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
require 'libs/config.php';

function __autoload($class) {
    require LIBS.$class.'.php';
}

$app = new Booting();
?>