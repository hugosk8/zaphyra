<?php


namespace App\Controller\Admin;

use Core\HTML\BootstrapForm;
use Exception;
use PDOException;

class CategorieController extends AppController
{

    public function __construct()
    {
        parent::__construct();
        $this->loadModel('categorie');
    }

    public function index()
    {
        $categories = $this->categorie->all();
        $this->render('admin.categorie.index', compact('categories'));
        unset($_SESSION['ERROR']['ADMIN']);
    }


    public function add()
    {
        if (!empty($_POST)) {
            $result =  $this->categorie->create([
                'categorie_name' => $_POST['categorie_name'],
                'description' => $_POST['description'],
                'meta_descrption' => $_POST['meta_descrption']
            ]);
            if ($result) {
                header('Location: ' . URL . 'admin/categorie');
            }
        }
        $form = new BootstrapForm();
        $this->render('admin.categorie.edit', compact('form'));
    }

    public function edit()
    {

        if (!empty($_POST)) {
            $result =  $this->categorie->update($_GET['id'], [
                'categorie_name' => $_POST['categorie_name'],
                'description' => $_POST['description'],
                'meta_descrption' => $_POST['meta_descrption']
            ]);
            if ($result) {
                header('Location: ' . URL . 'admin/categorie');
            }
        }
        $categories = $this->categorie->find($_GET['id']);
        $form = new BootstrapForm($categories);
        $this->render('admin.categorie.edit', compact('form', 'categories'));
    }

    public function delete()
    {
        try {
            $result =  $this->categorie->delete($_GET['id']);
        } catch (PDOException $e) {
            if ($e->getCode() === "23000") {
                $_SESSION['ERROR']['ADMIN'] = 'La catégorie est utilisé dans un article de blog vous ne pouvez pas la supprimer';
            }
        }
        header('Location: ' . URL . 'admin/categorie');
    }
}
