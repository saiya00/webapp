<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">        
<style>
    <?php include 'static/teste.css'; ?>
</style>    
</head>
    <body>
        <main>  
        
        <table border="10px">
        
        <tr>    
        <th bgcolor="#e79a24"><label><strong>Nome: </label></th> <td><label> <?= $dado["nome"] ?> </strong></label><br></td>
        </tr>
       
        <tr>
        <th bgcolor="#e79a24"><label>Valor: </label></th> <td><label> <?= $dado["valor"] ?> </label><br></td>
        </tr>    
        
        <tr>
        <th bgcolor="#e79a24"><label>Estoque: </label></th> <td><label>  <?=$dado["estoque"]?> </label><br></td>
        </tr>
        
        <tr>
        <th bgcolor="#e79a24"><label>Console: </label></th> <td><label> <?=$dado["console"] ?> </label><br></td>
        </tr>
        
        <tr>
        <th bgcolor="#e79a24"><label>Descrição: </label></th> <td><label> <?=$dado["descricao"] ?> </label><br></td>
        </tr>    
        
        <tr>
        <th bgcolor="#e79a24"><label>Gênero: </label></th> <td><label> <?=$dado["genero"] ?> </label><br></td>
        </tr>  
        
        <tr>
        <th bgcolor="#e79a24"><label>Idade recomendada: </label></th> <td><label> <?=$dado["idade"] ?> </label><br></td>
        </tr>
        
        <tr>
        <th bgcolor="#e79a24"><label>Marca: </label></th> <td><label>  <?=$dado["marca"] ?> </label><br></td>
        </tr>    
        
        <tr>
        <th bgcolor="#e79a24"><label>Jogadores permitidos: </label></th> <td><label> <?=$dado["jogador"] ?> </label><br></td>
        </tr>
        
        <tr>
        <th bgcolor="#e79a24"><label>Data de lançamento: </label></th> <td><label> <?=$dado["lancamento"]?> </label><br></td>
        </tr>
        
        <tr>
        <th bgcolor="#e79a24"><label>Pode jogar online? </label></th> <td><label> <?=$dado["online"] ?> </label><br></td>
        </tr>    
        
        </table>
        <center>
        <a href="https://webapp-saiyadin.c9users.io/produto/lista" >Voltar a lista</a>	
        </center>
        </main>
        
    </body>
</html>