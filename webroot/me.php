<?php 
/**
 * This is a Anax frontcontroller for the me-page
 *
 */

// Get environment & autoloader and the $app-object.
require __DIR__.'/config_with_app.php'; 

$app->router->add('', function() use ($app) {
	$title = "Me";
	$app->views->add('me/index');
    $app->theme->setTitle("Me");

});
 
$app->router->add('redovisning', function() use ($app) {
	$app->views->add('me/redovisning');
    $app->theme->setTitle("Redovsning");
});
 
$app->router->add('source', function() use ($app) {
	$app->theme->addStylesheet('css/source.css');
	$app->theme->setTitle("Såsfontänen");
	$source = new \Mos\Source\CSource([
        'secure_dir' => '..', 
        'base_dir' => '..', 
        'add_ignore' => ['.htaccess'],
    ]);

	$app->views->add('me/source', [
        'content' => $source->View(),
    ]);
});

// Render the response using theme engine.
$app->router->handle();
$app->theme->render();