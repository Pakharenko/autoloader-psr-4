<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once '../Autoloader.php';

//require __DIR__ . '/../App/App.php';
//require __DIR__ . '/../App/Data1.php';
//require __DIR__ . '/../App/Data2.php';


$load = new \Load\Autoloader();
$load->register();
$load->addNamespace('App', __DIR__ .'/../App');

$app = new App\App();


//$data1 = new App\Data1();
//echo $data1->get();

//$data2 = new App\Data2();
//echo $data2->get();

