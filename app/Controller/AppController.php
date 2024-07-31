<?php

namespace App\Controller;

use Core\Controller\Langue;
use Core\Controller\NavLangue;
use App\App;
use Core\Controller\Controller;

class AppController extends Controller
{

    protected $template = 'default';
    protected $langue = 'fr';
    protected $recaptcha = "";

    public function __construct()
    {
        $this->viewPath = ROOT . '/app/Views/';
        $this->template = 'front/template';
        $this->recaptcha = URL;
    }

    protected function loadModel($model_name)
    {
        $this->$model_name  =  App::getInstance()->getTable($model_name);
    }

}
