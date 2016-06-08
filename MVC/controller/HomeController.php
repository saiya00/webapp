<?php

class HomeController extends Controller{
    
    public function __call($m,$a){
        $this->view->renderizar("erro");
    }
   
    public function inicial(){
        $this->view->renderizar("home");
        $_SESSION["_OI"] = "Ola";
    }
    
  
}

?>