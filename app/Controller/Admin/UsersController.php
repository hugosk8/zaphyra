<?php


namespace App\Controller\Admin;


class UsersController extends AppController
{
    public function __construct()
    {
        parent::__construct();
        $this->loadModel('user');
    }


    public function login()
    {
        $errors = false;

        if (!empty($_POST)) {
            $auth = $this->user;
            if ($auth->login($_POST['username'], $_POST['password'])) {
                header('Location: index.php?p=admin.posts.index');
            } else {
                $errors = true;
            }
        }
        $form = new \Core\HTML\BootstrapForm($_POST);

        $this->render('users.login', compact('form', 'errors'));
    }
}
