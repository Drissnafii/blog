<?php
class Routes{
    private array $routes=[];
    public function get($path, $action)
    {
        $this->routes['GET'][$path] = $action;
    }
    public function post($path,$action){
        $this->routes["POST"][$path]=[$action];

    }
    public function dispatche($uri,$methode){
        $path=parse_url($uri,PHP_URL_PATH);
        $querryString=parse_url($uri,PHP_URL_QUERY);
        $querryParam=[];
        parse_str($querryString,$querryParam);
        $bodyParam=[];
        if($methode=='POST'){
            $bodyParam=$_POST;
        }
 
        
      ($request=array_merge($bodyParam,$querryParam));
        
        if(isset($this->routes[$methode][$path])){
            echo "yes";
             [$class,$method]=$this->routes[$methode][$path];
             $controller=new $class();
              $controller->$method($request);
        }
       



    }
}
?>