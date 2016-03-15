<?php namespace Acme\Controllers;

/**
 * Created by PhpStorm.
 * User: Chad
 * Date: 3/12/2016
 * Time: 12:44 AM
 */


use duncan3dc\Laravel\BladeInstance;

class BaseController
{
    protected $blade;

    public function __construct()
    {
        $this->blade = new BladeInstance("/vagrant/views", "/vagrant/cache/views");
    }


}