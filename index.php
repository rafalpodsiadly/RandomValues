<?php

 spl_autoload_register(function ($class_name) {
     if (file_exists($class_name . '.php')) {
        include $class_name . '.php';

     } else {
        throw new Exception("Class not found", 1);        
     }
});

// Script example.php
$shortopts  = "";

$longopts  = array(
    "count:",     // Required value
    "size:",     // Required value
    "type::",    // Optional value
    "file::",   // Optional value
);

$options = getopt($shortopts, $longopts);

/** $app App */
$app = new App();

if (empty($options) && empty($_POST)) {
    die('Params is epmty');

} else if (!empty($options)) {
    $code = $app->runConsole($options);

    if (isset($options['file'])) {
        file_put_contents($options['file'], implode('|', $code));

    } else {
        print_r($app->runConsole($options));
    }

} else if (false) {
    $app->runWeb($options);
}





