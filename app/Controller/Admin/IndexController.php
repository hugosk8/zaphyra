<?php


namespace App\Controller\Admin;

use App\Controller\PaginationController;
use Core\HTML\BootstrapForm;

class IndexController extends AppController
{
    public function __construct()
    {
        parent::__construct();
        $this->loadModel('event');
        $this->loadModel('article');
       /* $this->Pagination = new PaginationController;
        $this->page = (isset($_GET['page'])) ? $_GET['page'] : 1; */
    }


    public function index()
    {
     $articles = $this->article->all();
     $events = $this->event->all();
    
     $this->render('admin.index', compact('events', 'articles'));
    }



}