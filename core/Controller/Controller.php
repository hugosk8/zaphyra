<?php

namespace Core\Controller;

use App\App;
use Core\Auth\DBAuth;

class Controller
{
    protected $viewPath;
    protected $template;
    protected $loged;
   

    public function loged() {
 
        $app = App::getInstance();
        $auth = new DBAuth($app->getDb());
        return $auth->logged();
        if(!$auth->logged()){
        
        }
    }

    protected function render($view, $variables = []) {
        ob_start();
        if (!empty($variables)) {
            extract($variables);
        }
        require($this->viewPath . str_replace('.', '/', $view) . '.php');
        $content = ob_get_clean();
        require($this->viewPath . 'templates/' . $this->template . '.php');
    }

    protected function forbiden()
    {
        header('HTTP/1.0 404 Forbiden');
        header('Location:' . URL . '404');
    }

    protected function notFound()
    {
        header('HTTP/1.0 404 Not found');
    }
}
