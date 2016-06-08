<!DOCTYPE HTML>
<html>
<head>
<title>cadastro</title>
<meta charset="UTF-8">
 <style>
    <?php include 'static/teste.css'; ?>
 </style>

</head>
<body>
<main>
	
	<h1> Cadastro </h1>
	<table>
	<div id="divCenter">
	<form action="/usuario/inserir" method="POST"  >
	
	<tr>
	<th><label for="nome">Nome: </label></th>
    <td><input type="text" name="nome"  maxlength="50" required/><br></td> 
	</tr>
	
	<tr>
	<th><label for="email">Email: </label></th>
    <td><input type="email" name="email"  maxlength="50" required/><br></td> 
    </tr>
    
    <tr>
	<th><label for="senha">Senha: </label></th>
    <td><input type="password" name="senha" maxlength="100" required/><br></td> 
    </tr>
    
    <tr>
	<th><label for="dtnasci">Data de Nascimento: </label></th>
    <td><input type="date" name="dtnasci"  required /><br></td> 
    </tr>

	<tr>
	<th><label for="cpf">CPF:  </label></th>
	<td><input type="text" name="cpf" maxlength="15" required/><br></td> 
	</tr>

    <tr>
	<th><label for="tel">Telefone </label></th>
    <td><input type="number" name="tel"  maxlength="14" required><br></td> 
    </tr>

	<tr>
	<th><label for="cep">CEP: </label></th>
    <td><input type="number" name="cep" id="cep"  maxlength="10"  required/><br></td> 
	</tr>

	<tr>
	<th><label for="estado">Estado: </label></th>
    <td><select name="estado" id="estado">
        <option>Selecione...</option>
        <option value="AC">AC</option>
        <option value="AL">AL</option>
        <option value="AP">AP</option>
        <option value="AM">AM</option>
        <option value="BA">BA</option>
        <option value="CE">CE</option>
        <option value="ES">ES</option>
        <option value="DF">DF</option>
        <option value="MA">MA</option>
        <option value="MT">MT</option>
        <option value="MS">MS</option>
        <option value="MG">MG</option>
        <option value="PA">PA</option>
        <option value="PB">PB</option>
        <option value="PR">PR</option>
        <option value="PE">PE</option>
        <option value="PI">PI</option>
        <option value="RJ">RJ</option>
        <option value="RN">RN</option>
        <option value="RS">RS</option>
        <option value="RO">RO</option>
        <option value="RR">RR</option>
        <option value="SC">SC</option>
        <option value="SP">SP</option>
        <option value="SE">SE</option>
        <option value="TO">TO</option>
          </select>
	</tr>
    
    <tr>
	<th><label for="cidade">Cidade: </label></th>
    <td><input type="text" name="cidade" maxlength="20" required/><br></td> 
    </tr>

	<tr>
	<th><label for="rua">Rua: </label></th>
    <td><input type="text" name="rua" maxlength="20" required/><br></td> 
	</tr>
	
	<tr>
	<th><label for="bairro">Bairro: </label></th>
    <td> <input type="text" name="bairro" maxlength="20"  required/><br></td> 
    </tr>
   
    <tr>
    <th><label for="num">Número: </label></th>
    <td> <input type="number" name="num"  maxlength="10" required/><br></td> 
    </tr>
    
    <tr>
    <th><label for="complemento">Complemento: </label></th>
    <td> <input type="text" name="complemento"  maxlength="20" /><br></td> 
    </tr>
    
    </table>
	<center>
	<p class="submit">
	<input type="submit" value="Confirmar"/>
	<a href="https://webapp-saiyadin.c9users.io/usuario/login" >Voltar ao Login</a>
	</p>
	</center>
	</form>
	</div>
	
</main>
</body>
</html>
