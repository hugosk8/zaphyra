<?php

namespace App\Controller\Admin;

use Core\HTML\BootstrapForm;
use DateTime;
use Exception;

class BlogController extends AppController
{

    public function __construct()
    {
        parent::__construct();
        $this->loadModel('categorie');
        $this->loadModel('article');
    }


    public function index()
    {
        $articles = $this->article->AllAndCat();
        $this->render('admin.blog.index', compact('articles'));
        unset($_SESSION['ERROR']['ADMIN']);
    }

    public function add()
    {

        try {
            if (!empty($_POST)) {
                if (isset($_FILES['img']) && $_FILES['img']['name'] != null) {
                    $img = $this->AddImageValidation($_FILES['img']);
                }
                if (isset($_FILES['vignette']) && $_FILES['vignette']['name'] != null) {
                    $vignette = $this->AddImageValidation($_FILES['vignette']);
                }  
                $result =  $this->article->create([
                    'name' => $_POST['name'],
                    'description' => $_POST['description'],
                    'categorie_id' => $_POST['categorie_id'],
                    'date' => date('d-m-Y'),
                    'vignette' => $vignette,
                    'altVignette' => $_POST['altVignette'],
                    'img' => $img,
                    'altImg' => $_POST['altImg'],
                    'texte' => $_POST['texte'],
                ]);
                if ($result) {
                    header('Location: ' . URL . 'admin/blog');
                }
            }
        } catch(Exception $e) {
            $_SESSION['ERROR']['ADMIN'] = 'Une erreur est survenue pendant l\'edition de l\'article';
            header('Location: ' . URL . 'admin/blog');
        }

        $form = new BootstrapForm($_POST);
        $categories = $this->categorie->extract('id', 'categorie_name');
        $this->render('admin.blog.edit', compact('form', 'categories'));
    }

    public function edit()
    {
        $article = $this->article->find($_GET['id']);
        if (!empty($_POST)) {
            if (isset($_FILES['img']) && $_FILES['img']['name'] != null) {
                $img = $this->AddImageValidation($_FILES['img']);
                $this->article->update($_GET['id'], [
                    'img' => $img
                ]);
            }
            if (isset($_FILES['vignette']) && $_FILES['vignette']['name'] != null) {
                $vignette = $this->AddImageValidation($_FILES['vignette']);
                $this->article->update($_GET['id'], [
                    'vignette' => $vignette
                ]);
            };


            $result =  $this->article->update($_GET['id'], [
                'name' => $_POST['name'],
                'description' => $_POST['description'],
                'categorie_id' => $_POST['categorie_id'],
                'date' => date('d-m-Y'),
                'altVignette' => $_POST['altVignette'],
                'altImg' => $_POST['altImg'],
                'texte' => $_POST['texte'],
            ]);
            if ($result) {
                header('Location: ' . URL . 'admin/blog');
            }
        }

        $categories = $this->categorie->extract('id', 'categorie_name');
        $form = new BootstrapForm($article);
        $this->render('admin.blog.edit', compact('form', 'categories', 'article'));
    }

    public function delete()
    {
        $article = $this->article->find($_GET['id']);
        unlink("assets/img/" . $article->img);
        unlink("assets/img/" . $article->vignette);
        $result =  $this->article->delete($_GET['id']);
        if ($result == true) {
            header('Location: ' . URL . 'admin/blog');
        }
    }

    public function ajax()
    {
        if ($_POST['online']) {
            var_dump($_POST['online']);
            $result =  $this->formation->update($_POST['id'], ['online' => $_POST['online']]);
        }
    }
}
