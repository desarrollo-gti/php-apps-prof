<?php

namespace app\controllers;
use League\Plates\Engine;

class FrontController {
    private $templates;
    
    public function _construct() {
        //Traer todas las vista te plates
        $this->templates = new Engine('../views');
    }

    public function home() {
        echo $this->templates->render('sections/home');
    }

    public function error404(){
        echo $this->templates->render('sections/404.php');
    }
}
