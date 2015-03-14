<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<title>Login - WLL Sistemas</title>
	<link href="http://www.wllsistemas.com.br/admin/css/reset.css" rel="stylesheet" type="text/css"/>
	<link href="http://www.wllsistemas.com.br/admin/css/lib.css" rel="stylesheet" type="text/css"/>
	<link href="http://www.wllsistemas.com.br/admin/css/estilo.css" rel="stylesheet" type="text/css"/>
</head>
<body>
	<div id='geral'>
		<div id="conteudo">
			<fieldset id='box-login'>
				<span id='titulo'>Login do Sistema</span>
				<img src="img/cadeado.jpg" height="170" />
				<form action="valida_login.php" method="post">
					<label>E-mail:</label>
					<input type="text" name='email' id='email' required placeholder='Informe o E-mail'/><br>
					<label>Senha:</label>
					<input type="password" name='senha' id='senha' required placeholder='Informe a Senha'/><br>
					<input type="submit" name='envia' id='envia' value="Login" class='botao'/><br>
				</form>
			</fieldset>
		</div>
	</div>
</body>
</html>