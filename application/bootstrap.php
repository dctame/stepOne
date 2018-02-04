<?php
spl_autoload_register(function ($class)
{
    $classname = $class;
    $class = explode("_", $class);
    require_once 'application/' .$class[0] . '/' . $classname . '.php';
});
core_route::start();
