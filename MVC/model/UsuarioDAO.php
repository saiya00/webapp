<?php

class UsuarioDAO{
    public function insert(Usuario $u){
        $mysqli = new mysqli("127.0.0.1", "saiyadin", "", "cadastro");
          if ($mysqli->connect_errno) {
            return "Falha no MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }
        
        $stmt = $mysqli->prepare("INSERT INTO usuario(nome,email,senha,dtnasci,cpf,tel,cep,estado,cidade,rua,bairro,num,complemento) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $options = [
             'cost' => 11,
             'salt' => '$abd$opklp$%sd6579$108&19',
             ];
             
        $hash =  password_hash($u->getSenha(), PASSWORD_BCRYPT, $options);

        $stmt->bind_param("sssssssssssss",$u->getNome(),$u->getEmail(),$hash,$u->getDtnasci(),$u->getCpf(),$u->getTel(),$u->getCep(),$u->getEstado(),$u->getCidade(),$u->getRua(),$u->getBairro(),$u->getNum(),$u->getComplemento());
        if (!$stmt->execute()) {
            return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
        }
        return "";
  
    }
    
    public function getUsuario($id){
        $mysqli = new mysqli("127.0.0.1", "saiyadin", "", "cadastro");
        $stmt = $mysqli->prepare("SELECT * FROM usuario WHERE id=?");
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $stmt->bind_result($id,$nome, $email, $senha,$dtnasci,$cpf,$tel,$cep,$estado,$cidade,$rua,$bairro,$num,$complemento);
        $stmt->fetch();
        $usuario = new Usuario($id,$nome,$email,$senha,$dtnasci,$cpf,$tel,$cep,$estado,$cidade,$rua,$bairro,$num,$complemento);
        return $usuario;
    }
    
    public function authUser($email,$senha){
        $mysqli = new mysqli("127.0.0.1", "saiyadin", "", "cadastro");
        $stmt = $mysqli->prepare("SELECT id FROM usuario WHERE email=? AND senha=?");
        $stmt->bind_param("ss",$email,$senha);
        $stmt->execute();
        $stmt->bind_result($id);
        $stmt->fetch();
        if($id > 0){
           
            return $id;
        }else{
            
            return false;
        }
    }
    
}
    
    
    