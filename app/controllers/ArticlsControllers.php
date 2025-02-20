<?php 
include __DIR__."/controllers.php";
include __DIR__."/../models/ArticleModels.php";
// include __DIR__."/../core/database.php";
class ArticlsControllers{
    private $model;
    public function __construct(){
        $this->model=new ArticleModels();
    }
    public function index(){
      
        $articls= $this->model->getAll();
        require __DIR__ . "/../../app/views/articls.php";

    }

    
}
?>