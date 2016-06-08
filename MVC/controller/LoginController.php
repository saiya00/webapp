<?php

class LoginController extends Controller{
    
    public function __call($m,$a){
        $this->view->renderizar("erro");
    }
    
    public function logout(){
        $this->estaAutorizado();
        unset($_SESSION["_ID"]);
        $this->view->renderizar("logout");
    }
    
    public function entrar(){
        unset($_SESSION["_ID"]);
        $this->view->renderizar("login");
    }
    
    public function autenticar(){
        $um = new usuarioDAO();
        $email = $_POST["email"];
        $senha = $_POST["senha"];
     
        $ehLoginCorreto = $um->authUser($email,$senha);
        if($ehLoginCorreto === false){
            echo"usuario e senha incorretos";
            header("Location: /usuario/login");
            
        }else{
            $_SESSION["_ID"] = $ehLoginCorreto;
            header("Location: /usuario/perfil/" . $ehLoginCorreto);
        }
    }
    
}