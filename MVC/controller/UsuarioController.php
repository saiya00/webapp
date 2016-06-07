<?php

class UsuarioController extends Controller{
    
    public function __call($m,$a){
        $this->view->renderizar("erro");
    }
    
    public function perfil(){
        $id = $_GET["arg0"];
        //PEGANDO DADOS DO MODEL
        $userDao = new UsuarioDAO();
        $usuario = $userDao->getUsuario($id);
        // -----------------------------
        // MANDANDO PARA VIEW
        $dado["nome"] = $usuario->getNome();
        $dado["email"] = $usuario->getEmail();
        $this->view->interpolar("perfil",$dado);
    }
    
    public function cadastro(){
        $this->view->renderizar("cadastro");
    }
    public function sucesso(){
        $this->view->renderizar("sucesso");
    }
    
      public function login(){
        $this->view->renderizar("login");
    }

    public function inserir(){
        
        $nome = $_POST ["nome"];
        $email = $_POST ["email"];
        $senha = $_POST ["senha"];
        $dtnasci = $_POST ["dtnasci"];
        $cpf = $_POST ["cpf"];
        $tel = $_POST ["tel"];
        $celular = $_POST ["celular"];
        $cep = $_POST ["cep"];
        $estado = $_POST ["estado"];
        $cidade = $_POST ["cidade"];
        $rua = $_POST ["rua"]; 
        $bairro = $_POST ["bairro"];
        $num = $_POST ["num"];
        $complemento = $_POST["complemento"];
        
       
        $usuario = new Usuario(0,$nome,$email,$senha,$dtnasci,$cpf,$tel,$celular,$cep,$estado,$cidade,$rua,$bairro,$num,$complemento);
        
        $userDao = new UsuarioDAO();
        
        
        $ret = $userDao->insert($usuario);
        if($ret === ""){
            header("Location: /usuario/sucesso");    
        }else{
            $this->view->interpolar("errosql",$ret);
        }
    }
        
    }
    
    
    


?>