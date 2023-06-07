<?php
function Controller()
{

    if (empty($_GET['controller']) || !file_exists("content/" . $_GET['controller'] . ".php")) {
        $_GET['controller'] = "home";
    }

    include "content/" . $_GET['controller'] . ".php";
    $function = $_GET['controller'];
    return $function();

}