<?php

class ArticleModel
{
    private $pdo;

    public function __construct()
    {
        try {
            $this->pdo = new PDO("mysql:host=localhost;dbname=eatsmart_bdd_hedi;charset=utf8", "root", "");
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Erreur de connexion à la base de données : " . $e->getMessage());
        }
    }
    public function getDBAllArticles()
    {
        $stmt = $this->pdo->query("SELECT * FROM article");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
//$chauffeur = new ChauffeurModel();
//print_r($chauffeur->getDBAllChauffeurs());