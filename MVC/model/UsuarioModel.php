<?php

class Usuario{
    private $id, $nome, $email, $senha, $dtnasci, $cpf, $tel, $cep, $estado, $cidade, $rua, $bairro, $num, $complemento;
    
    public function __construct($id, $nome, $email, $senha, $dtnasci, $cpf, $tel, $cep, $estado, $cidade, $rua, $bairro, $num, $complemento){
        $this->id = $id;
        $this->nome = $nome;
        $this->email = $email;
        $this->senha =$senha;
        $this->dtnasci = $dtnasci;
        $this->cpf = $cpf;
        $this->tel = $tel;
        $this->cep = $cep;
        $this->estado = $estado;
        $this->cidade = $cidade;
        $this->rua = $rua;
        $this->bairro = $bairro;
        $this->num = $num;
        $this->complemento = $complemento;
        
        
    }
    
    public function getId(){
        return $this->id;
    }
    
    public function getNome(){
        return $this->nome;
    }
    
    public function getEmail(){
        return $this->email;
    }
    
     public function getSenha(){
        return $this->senha;
    }
    
     public function getDtnasci(){
        return $this->dtnasci;
    }
      public function getCpf(){
        return $this->cpf;
    }
    
     public function getTel(){
        return $this->tel;
    }
    
     public function getCep(){
        return $this->cep;
    }
    
     public function getEstado(){
        return $this->estado;
    }
    
     public function getCidade(){
        return $this->cidade;
    }
    
    public function getBairro(){
        return $this->bairro;
    }
    
     public function getRua(){
        return $this->rua;
    }
    
    public function getNum(){
        return $this->num;
    }
    
    public function getComplemento(){
        return $this->complemento;
    }
    
    
    
}

?>