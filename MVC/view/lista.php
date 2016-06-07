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
        
        <table border="6px">
            
        <tr>
	    <th bgcolor="#e79a24"><label> Jogo </label></th>
        <th bgcolor="#e79a24"><label> Preço </label><br></th> 
        <th bgcolor="#e79a24"><label> Saiba Mais </label><br></th> 
	    </tr>
            
            <?php
                 foreach($dado as $produto){
                     echo "<tr><td>" . $produto->getNome() . "</td><td>" . $produto->getValor() .  "</td>";
                 }
            ?>
        <td><label><a href="https://webapp-saiyadin.c9users.io/produto/informacao/1" >Jogo</a></label></td></tr>
        
        </table>
        	
    </main>
    </body>
</html>


    
