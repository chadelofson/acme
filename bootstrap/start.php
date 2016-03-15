<?php
/**
 * Created by PhpStorm.
 * User: Chad
 * Date: 3/12/2016
 * Time: 12:27 AM
 */
session_start();

require(__DIR__ . "/../vendor/autoload.php");

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

$router = new AltoRouter();