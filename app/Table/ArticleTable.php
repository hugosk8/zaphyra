<?php 

namespace App\Table;

use Core\Table\Table;

class ArticleTable extends Table
{
    public function AllAndCat()
    {
        return $this->query("SELECT articles.id, articles.name, articles.description, articles.categorie_id, articles.date, articles.vignette, articles.altVignette, articles.img, articles.altImg, articles.texte, categories.categorie_name FROM articles
        LEFT JOIN categories ON articles.categorie_id = categories.id");
    }

    public function AllByCat($id)
    {
        return $this->query("SELECT * FROM articles
        WHERE articles.categorie_id = ? ORDER BY id DESC",[$id]);
    }

    public function GetLangue($langue)
    {
        return $this->query("SELECT * FROM articles WHERE langue = ? ORDER BY id DESC",[$langue],false);
    }

    public function GetBySlug($slug)
    {
        return $this->query("SELECT * FROM articles LEFT JOIN categories ON categories.slug = ? ORDER BY id DESC", [$slug],false);
    }

    public function LimitLangue($langue)
    {
        return $this->query("SELECT * FROM articles WHERE langue = ? LIMIT 3",[$langue],false);
    }

}