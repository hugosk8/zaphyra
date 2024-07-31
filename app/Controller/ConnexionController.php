<?php

namespace App\Controller;

use App\App;
use Core\Auth\DBAuth;

class ConnexionController extends AppController
{

    public function __construct()
    {
        parent::__construct();
        $this->loadModel('user');
    }

    public function index()
    {
        if($this->loged() === true) {
            header('Location: ' . URL . 'admin');
        } else {
            $user = ['test'];
            $this->render('users/login', compact('user'));
        }
    }

    public function traitement()
    {
        $errors = false;
        $app = App::getInstance();
        $auth = new DBAuth($app->getDb());
        if (!empty($_POST)) {
            if ($auth->login($_POST['username'], $_POST['password'])) {
                header('location: ' . URL . 'admin');
            } else {
                header('location: ' . URL . 'connexion');
            }
        }
    }

    public function disconnect()
    {
        unset($_SESSION['auth']);
        header('Location: ' . URL . 'connexion');
    }
}
