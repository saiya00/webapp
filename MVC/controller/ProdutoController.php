<?php

class ProdutoController extends Controller{
    
    public function __call($m,$a){
        $this->view->renderizar("erro");
    }
    // /produto/informacao
    public function informacao(){
        $id = $_GET["arg0"];
        $proDao = new produtoDAO();
        $prod = $proDao->getProduto($id);
        
        $dado´["id"] =$prod->getId;
        $dado["nome"] = $prod->getNome();
        $dado["valor"] = $prod->getValor();
        $dado["estoque"] = $prod->getEstoque();
        $dado["console"] = $prod->getConsole();
        $dado["descricao"] = $prod->getDescricao();
        $dado["genero"] = $prod->getGenero();
        $dado["idade"] = $prod->getIdade();
        $dado["marca"] = $prod->getMarca();
        $dado["jogador"] = $prod->getJogador();
        $dado["lancamento"] = $prod->getLancamento();
        $dado["online"] = $prod->getOnline();
        
        $this->view->interpolar("informacao",$dado);
        
     
    }

    public function lista(){
        $p = new ProdutoDAO();
        $todosProds = $p->getProducts();
        $this->view->interpolar("lista",$todosProds);
    
}
}
?>