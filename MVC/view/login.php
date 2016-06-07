<!DOCTYPE HTML>
<html>
<head>
<title>login</title>
<meta charset="UTF-8">
<style>
    <?php include 'static/teste.css'; ?>
</style>
</head>
<body>
<main>
	
	<h1> Entrar em sua conta </h1>
	
	<div id="divCenter">
	<form action="/login/autenticar" method="POST">
	
	<label for="email">Email</label>
    <br> <input type="text" name="email" maxlength="25" required/> <br>
    
	<label for="senha">Senha</label>
	<br> <input type="password" name="senha" maxlength="15" required /> <br>
    
	<p class="submit">
	<input type="submit" value="OK"/>
	<a href="https://webapp-saiyadin.c9users.io/usuario/cadastro" >Nova conta</a>
	</p>
	
	</form>
	</div>
	
</main>
</body>
</html>