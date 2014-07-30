<?php

function load_lib($class){
    include 'lib/'.$class . '.php';
};
spl_autoload_register('load_lib');

session_start();
session_regenerate_id(true);
