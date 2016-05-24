<?php

class HomeController extends Controller{
    
    public function __call($m,$a){
        $this->view->renderizar("erro");
    }
    // /home/inicial
    public function inicial(){
        $this->view->renderizar("home");
        $_SESSION["_OI"] = "Ola";
    }
    // /home/cadastro
    public function cadastro(){
        $this->view->renderizar("cadastro");
    }
    // /home/produto
    public function produto(){
           $this->view->renderizar("produto");
    }
    
}

?>