<?php namespace Acme\Controllers;

/**
 * Created by PhpStorm.
 * User: Chad
 * Date: 3/12/2016
 * Time: 12:44 AM
 */

use duncan3dc\Laravel\BladeInstance;

class PageController extends BaseController
{


    public function getShowHomePage() {

        echo $this->blade->render("home");
    }

}