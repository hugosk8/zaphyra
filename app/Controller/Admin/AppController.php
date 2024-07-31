<?php

namespace App\Controller\Admin;

use App\App;
use Core\Auth\DBAuth;
use Exception;


class AppController extends \App\Controller\AppController
{

    public function __construct()
    {
        parent::__construct();
        if($this->loged() == false) {
            header('Location: ' . URL . 'index');
        };
        $this->template = 'admin/default';
    }

    public function NotNullImg($img)
    {
        $str =  substr($img, 0, 3);
    }

    public function UpdateImageValidation()
    {
        $imageActuelle = $this->SliderController->GetSliderById($_POST['id'])->getImage();
        $file = $_FILES["image"];
        if ($file['size'] > 0) {
            unlink("assets/images/slider/" . $imageActuelle);
            $repertoire = "assets/images/slider/";
            $nomImageAjoute = $this->ajoutImage($file, $repertoire);
        } else {
            $nomImageAjoute = $imageActuelle;
        }
        $this->SliderController->updateSliderBdd($_POST['id'], $nomImageAjoute, $_POST['online'], $_POST['priority']);
        header('location: views/validation.view.php');
    }


    public function AddImageValidation($file)
    {
        $file = $file;
        $repertoire = "assets/img/";
        $nomImageAjoute = $this->ajoutImage($file, $repertoire);
        $_SESSION["alert"] = [
            "type" => "success",
            "msg" => "Ajout réalisée"
        ];
        return $nomImageAjoute;
    }

    private function ajoutImage($file, $dir)
    {
        if (!isset($file['name']) || empty($file['name']))
            throw new Exception("Vous devez indiquer une image");

        if (!file_exists($dir)) mkdir($dir, 0777);

        $extension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
        $random = rand(0, 99999);
        $target_file = $dir . $random . "_" . $file['name'];

        if ($extension !== "svg"  && $extension !== "pdf") {
            if (!getimagesize($file["tmp_name"]))
                throw new Exception("Le fichier n'est pas une image");
            if ($extension !== "jpg" && $extension !== "jpeg" && $extension !== "png" && $extension !== "gif" && $extension !== "webp")
                throw new Exception("L'extension du fichier n'est pas reconnu");
        }
        if (file_exists($target_file))
            throw new Exception("Le fichier existe déjà");
        if ($file['size'] > 5000000)
            throw new Exception("Le fichier est trop gros");
        if (!move_uploaded_file($file['tmp_name'], $target_file))
            throw new Exception("l'ajout de l'image n'a pas fonctionné");
        else return ($random . "_" . $file['name']);
    }
}
