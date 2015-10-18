<?php
/**
 * Start point of application
 */
if(isset($_REQUEST['session_id'])){
    session_id($_REQUEST['session_id']);
}

session_start();

// Autoload
spl_autoload_register( function ($class) {
    if(file_exists($file = str_replace('\\', '/', __DIR__.'\\'.$class . '.php'))){
        include_once $file;
    }
});

// If we've got here, then run the app
require_once('app/app.php');

$app = new app\App();
$app->run();
