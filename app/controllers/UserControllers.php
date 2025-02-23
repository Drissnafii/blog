<?php 
include __DIR__."/../models/UsersModels.php";
include __DIR__."/../core/Session.php";

class userControllers
{
private $model;
private $session;
public function __construct(){
    $this->model=new UsersModels();
    $this->session=new Session();

}
public function loginForm(){
    require_once __DIR__."/../views/login.php";
}

public function login($request){
    
    $this->session->donnes($request);
    // require_once __DIR__."/../views/login.php";
}


public function add($request){
$this->model->add($request);

    require_once __DIR__."/../views/login.php";
}
}

?>