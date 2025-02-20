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
    public function addArticls($request){
        $articls= $this->model->addArticls($request);
        $articls= $this->model->getAll();
        require __DIR__ . "/../views/articls.php";

    }
    public function formulaireArticle($request){
      
        $articls= $this->model->formulaireArticle($request);
        require __DIR__ . "/../../app/views/articls.php";

    }
    public function updateArticle($request){
      
        $articls= $this->model->updateArticle($request);
        require __DIR__ . "/../../app/views/articls.php";

    }

    
}
?>