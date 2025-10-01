<?php

require_once "controllers/ArticleController.php";
require_once "controllers/CategorieController.php";
require_once "controllers/CommandeController.php";

$articleController = new ArticleController();
$CategorieController = new CategorieController();
$CommandeController = new CommandeController();



if (empty($_GET["page"])) {
    echo "La page n'existe pas";
} else {
    $url = explode("/", $_GET['page']);
    print_r($url);

    switch ($url[0]) {
        case "articles":
            if (isset($url[1])) {
                echo "Afficher les informations de l'article : " . $url[1];
            } else {
                print_r($articleController->getAllArticles());
            }
            break;

        case "categories":
            if (isset($url[1])) {
                echo "Afficher les informations de la catégorie : " . $url[1];
            } else {
                echo "Afficher la liste des catégories";
                print_r($CategorieController->getAllCategories());
            }
            break;

        case "commandes":
            if (isset($url[1])) {
                echo "Afficher les détails de la commande : " . $url[1];
            } else {
                echo "Afficher la liste des commandes";
                print_r($CommandeController->getAllCommandes());
            }
            break;

        default:
            echo "La page n'existe pas";
    }
}
