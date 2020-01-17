<?php
/**
 * @author Imelda Medina
 * @author Bridget Black
 * @version 1.0
 * 1/17/2020
 * 328/pets.index.php
 */
//Turn on error reporting
ini_set('display_errors',1);
error_reporting(E_ALL);
//Require autoload file
require("vendor/autoload.php");
//Instantiate F3
$f3 = Base:: instance();

//define a default route
$f3->route('GET /', function(){
    $view = new Template();
    echo $view->render('views/pet-home.html');
});
//Run F3
$f3->run();
