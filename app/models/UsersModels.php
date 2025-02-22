<?php 
include_once __DIR__."/../core/Database.php";
class UsersModels{
private $table="users";
private $db;
public function __construct(){
    $this->db=Database::connect();
    
}
public function getAll(){
  
}

public function add($request){
    $stmt=$this->db->prepare("INSERT INTO $this->table (name,email,password) values (?,?,?)");
    $stmt->execute([$request['name'],$request['email'],$request['password']]);


  
}
}
?>