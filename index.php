<?php
/* Giovan Cervantes
 * January 2024
 * https://gecervantes.greenriverdev.com/328/pets/
 * This is my CONTROLLER for the pets app
*/

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once('vendor/autoload.php');

$f3 = Base::instance();

// Define a default route
$f3 ->route('GET /', function() {

    // Display a view page
    $view = new Template();
    echo $view -> render('Pet Home');
});

// Run Fat-Free
$f3 ->run();

