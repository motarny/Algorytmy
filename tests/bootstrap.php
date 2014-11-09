<?php

include_once 'phpunit.phar';

function loadClass($className)
{
    include_once 'classes/' . $className . '.php';
}