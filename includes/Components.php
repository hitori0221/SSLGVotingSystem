<?php 

$directory = '../components/superadmin/';

$files = glob($directory . '*.php');
foreach ($files as $file) {
    require_once $file;
}


?>