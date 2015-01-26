<?php 
/**
 * This is a Anax pagecontroller for the redovisning-page //svenglish for the vin
 * >:3
 *
 */

// Get environment & autoloader and the $app-object.
require __DIR__.'/config_with_app.php'; 

// Prepare the page content
$title = "Redovisning";
$app->theme->setVariable('title', $title)
           ->setVariable('main', "
    <h1>{$title}</h1>
    <h2>Kmom01</h2>
");

// Render the response using theme engine.
$app->theme->render();
$app->router->handle();