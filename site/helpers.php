<?php 
    session_start();

function dd($_var, ...$_vars) {
    echo "<pre>";
    var_dump($_var);

    if (!empty($_vars)) {
        foreach ($_vars as $var) {
            var_dump($var);
        }
    }

    exit();
    echo "</pre>";
}