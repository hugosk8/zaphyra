<?php

session_start();

//on definie les constantes

define("LANG", (!empty($_POST['langue'])) ?  '/' . $_POST['langue'] : (!empty($_SESSION['langue']) ? '/' . $_SESSION['langue'] : ""));

define("URL", str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));

define('ROOT', dirname(__DIR__));

require ROOT . '/app/App.php';

App\App::Load();


$getP = (isset($_GET['p']) ? $getP  = $_GET['p'] : $getP = 'index');
$url = ((explode("/", $getP, FILTER_SANITIZE_URL)) !== null) ? $url = explode("/", $getP, FILTER_SANITIZE_URL) : $url = "";


$action = 'index';
if (!isset($url[1])) {
    $url[1] = 'index';
};
if (!isset($url[2])) {
    $url[2] = 'index';
};
if (!isset($url[3])) {
    $url[3] = 'index';
};

if (isset($url[0]) && ($url[0] === 'admin') || $url[0] === 'connexion') {
    if ($url[0] === "admin") {
        $ActionController = 'Admin\\' .  ucfirst($url[1]);
        $action = $url[2];
    } else {
        $ActionController =  ucfirst($url[0]);
        $action = $url[1];
    }
} elseif (isset($url[0]) && ($url[0] === 'Mail')){
        $ActionController = ucfirst($url[0]);
        $action = $url[1];   
} else {
    $ActionController =  'Index';
    $action = $url[0];
}

$controller = '\App\Controller\\' . $ActionController . 'Controller';

//try {
    $controller = new $controller();
    $controller->$action();
//} catch (\Error $e) {
  // header("Location: /404.html");
//}
