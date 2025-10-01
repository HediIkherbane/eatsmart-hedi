<?php

require_once "./models/CategorieModel.php";

class CategorieController
{
    private $model;

    public function __construct()
    {
        $this->model = new CategorieModel();
    }

    public function getAllCategories()
    {
        $categorie = $this->model->getDBAllCategories();
        echo json_encode($categorie);
    }
}
//$chauffeurController = new ChauffeurController();
//$chauffeurController->getAllChauffeurs();