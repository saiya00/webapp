<?php

class Produto{
    private $id, $nome, $valor,$estoque,$console,$descricao,$genero,$idade,$marca,$qtjogador,$dtlancamento,$online;
    public function __construct($id=0, $nome, $valor,$estoque,$console,$descricao,$genero,$idade,$marca,$qtjogador,$dtlancamento,$online){
        $this->id = $id;
        $this->nome = $nome;
        $this->valor = $valor;
        $this->estoque= $estoque;
        $this->console = $console;
        $this->descricao = $descricao;
        $this->genero = $genero;
        $this->idade = $idade;
        $this->marca = $marca;
        $this->jogador = $qtjogador;
        $this->lancamento = $dtlancamento;
        $this->online = $online;
    }
    
    public function getId(){
        return $this->id;
    }
    
    public function getNome(){
        return $this->nome;
    }
    
    public function getValor(){
        return $this->valor;
    }
      public function getEstoque(){
        return $this->estoque;
    }
        public function getConsole(){
        return $this->console;
    }
    
      public function getDescricao(){
        return $this->descricao;
    }
    
      public function getGenero(){
        return $this->genero;
    }
    
      public function getIdade(){
        return $this->idade;
    }
    
      public function getMarca(){
        return $this->marca;
    }
    
      public function getJogador(){
        return $this->jogador;
    }
    
        public function getLancamento(){
        return $this->lancamento;
    }
    
          public function getOnline(){
        return $this->online;
    }
    
   
}

?>