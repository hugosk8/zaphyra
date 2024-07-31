<?php

namespace App\Controller;


class PaginationController extends AppController
{

    public $nbr_page;

    public function __construct()
    {
        $this->per_page = 6;
        parent::__construct();
        $this->loadModel('product');
    }

    public function pagination($model, $categorie = null, $per_page = null, $PageNumber = null)
    {
        if ($per_page != null) {
            $this->per_page = $per_page;
        }
        $count = $model[0]->nbr;
        $this->nbr_page = ceil($count / $this->per_page);
        ($PageNumber != null) ? $page = $PageNumber : $page = 1;
        if ($page > $this->nbr_page) {
            $page = $this->nbr_page;
        }
        $firstPage = (($page - 1) * $this->per_page);
        if($firstPage < 1) {
            $firstPage = 1;
        }
        if ($categorie != null) {
            return $this->product->paginateQueryBycategorie($firstPage, $this->per_page, $categorie);
        } else {
            return $this->product->paginateQuery($firstPage, $this->per_page);
        }
    }

    public function paginationHtml()
    {
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            $suffix = '';
        } else {
            $page = '';
            $suffix = '&page=';
        }
        $paginationHtml = [];
        $paginationHtml[0] = $this->nbr_page;
        $paginationHtml[1] = URL . str_replace([$page, '/public/?p='], '', $_SERVER['REQUEST_URI']) . $suffix;
        return $paginationHtml;
    }
}
