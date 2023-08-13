<?php

function pre($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

function get_controller()
{
    return strtolower(class_basename(service('router')->controllerName()));
}