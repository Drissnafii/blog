<?php 
include __DIR__."/../core/Database.php";

class ArticleModels{
private $model="articles";
private $pdo;
public function __construct(){
    
    $this->pdo=Database::connect();
}
public function getAll(){
    $stmt=$this->pdo->prepare("SELECT * FROM $this->model");
    $stmt->execute();
   return $stmt->fetchAll(PDO::FETCH_ASSOC);


  
}
}
?>