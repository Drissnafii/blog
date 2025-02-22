<?php 
include __DIR__."/../models/UsersModels.php";

class userControllers
{
private $model;
public function __construct(){
    $this->model=new UsersModels();

}
public function login(){
    require_once __DIR__."/../views/login.php";
}
public function add($request){
$this->model->add($request);

    require_once __DIR__."/../views/login.php";
}
}

?>