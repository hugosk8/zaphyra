<?php

namespace App\Controller\Admin;

use App\Controller\PaginationController;
use Core\HTML\BootstrapForm;

class EventController extends AppController
{

    public function __construct()
    {
        parent::__construct();
        $this->loadModel('event');
    }


    public function index()
    {
        $events = $this->event->all();
        $this->render('admin.event.index', compact('events'));
    }

    public function add()
    {
        if (!empty($_POST)) {
            if (isset($_FILES['img']) && $_FILES['img']['name'] != null) {
                $img = $this->AddImageValidation($_FILES['img']);
            }
            $result =  $this->event->create([
                'name' => $_POST['name'],
                'date' => $_POST['date'],
                'texte' => $_POST['texte'],
                'img' => $img
            ]);
            if ($result) {
                header('Location: ' . URL . 'admin/event');
            }
        }

        $form = new BootstrapForm($_POST);
        $this->render('admin.event.edit', compact('form'));
    }

    public function edit()
    {

        if (!empty($_POST)) {
            if (isset($_FILES['img']) && $_FILES['img']['name'] != null) {
                $img = $this->AddImageValidation($_FILES['img']);
                $this->event->update($_GET['id'], [
                    'img' => $img
                ]);
            }
            $result =  $this->event->update($_GET['id'], [
                'name' => $_POST['name'],
                'date' => $_POST['date'],
                'texte' => $_POST['texte'],
                'img' => $img
            ]);
            if ($result) {
                header('Location: ' . URL . 'admin/event');
            }
        }
        $event = $this->event->find($_GET['id']);
        $form = new BootstrapForm($event);
        $this->render('admin.event.edit', compact('form', 'event'));
    }

    public function delete()
    {
        $event = $this->event->find($_GET['id']);
        unlink("assets/img/" . $event->img);
        $result =  $this->event->delete($_GET['id']);
        if ($result == true) {
            header('Location: ' . URL . 'admin/event');
        }
    }
}
