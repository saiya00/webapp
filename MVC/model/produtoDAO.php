<?php

class ProdutoDAO{
    public function insert(Produto $p){
        $mysqli = new mysqli("127.0.0.1", "saiyadin", "", "produto");
        if ($mysqli->connect_errno) {
            echo "Falha no MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }
        $stmt = $mysqli->prepare("INSERT INTO jogos(nome,valor,estoque,console,descricao,genero,idade,marca,jogador,lancamento,online) VALUES (?,?,?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param("sd",$p->getNome(),$p->getValor(),$p->getEstoque(),$p->getConsole(),$p->getDescricao(),$p->getGenero(),$p->getIdade(),$p->getMarca(),$p->getJogador(),$p->getLancamento(),$p->getOnline());
        if (!$stmt->execute()) {
            echo "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
        }
        $stmt->close();
    }
    
    
    public function getProduto($id){
        $mysqli = new mysqli("127.0.0.1", "saiyadin", "", "produto");
        $stmt = $mysqli->prepare("SELECT * FROM jogos WHERE id=?");
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $stmt->bind_result($id,$nome, $valor,$estoque,$console,$descricao,$genero,$idade,$marca,$jogador,$lancamento,$online);
        $stmt->fetch();
        $prod = new Produto($id,$nome,$valor,$estoque,$console,$descricao,$genero,$idade,$marca,$jogador,$lancamento,$online);
        return $prod;
    }
    //$stmt->bind_result($col1, $col2);
}

?>