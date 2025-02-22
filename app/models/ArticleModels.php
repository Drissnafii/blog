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
public function addArticls($request){
    $stmt=$this->pdo->prepare("INSERT INTO $this->model(title,content,category_id) VALUES(?,?,?) ");
    $stmt->execute([$request["name"],$request["content"],$request["category_id"]]);
   return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
public function formulaireArticle($request){
    $stmt=$this->pdo->prepare("SELECT * FROM $this->model WHERE id=?");
    $stmt->execute([$request['id']]);
   return $stmt->fetch(PDO::FETCH_ASSOC); 
}
public function updateArticle($request){
    $stmt=$this->pdo->prepare("UPDATE  $this->model set title=?,content=?,category_id=? WHERE id=?");
    $stmt->execute([$request['name'],$request['content'],$request['category_id'],$request['id']]);
}
public function deleteArticls($request){
    $stmt=$this->pdo->prepare("delete from $this->model  WHERE id=?");
    $stmt->execute([$request['id']]);
   return $stmt->fetchAll(PDO::FETCH_ASSOC); 
}

}
?>