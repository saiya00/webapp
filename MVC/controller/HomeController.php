<?php

class HomeController extends Controller{
    
    public function __call($m,$a){
        $this->view->renderizar("erro");
    }
   
    
  
}

?>