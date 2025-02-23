<?php 
class   Session{
    private $user=[];
    public function donnes($request){
        $_SESSION['name']=$request['name'];
        $_SESSION['email']=$request['email'];
        // $_SESSION['role']=$request['role'];
        echo "yes";
        var_dump($_SESSION);

    }
}
?>