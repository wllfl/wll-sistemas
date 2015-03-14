<?php
	session_start();
	require_once "inc_verifica_acesso.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<title>Sistema CMS</title>
	<link href="http://www.wllsistemas.com.br/admin/css/reset.css" rel="stylesheet" type="text/css"/>
	<link href="http://www.wllsistemas.com.br/admin/css/lib.css" rel="stylesheet" type="text/css"/>
	<link href="http://www.wllsistemas.com.br/admin/css/estilo.css" rel="stylesheet" type="text/css"/>
</head>
<body>
	<div id='topo'>
		<?php include "inc/inc_topo.php" ?>
	</div>
	<div id='geral'>

		<div id="conteudo">
			<div id='box-conteudo'>
				<a href="cadastro_usuario.php"><span class='box-menu box-azul'>Cadastrar Usuário</span></a>
				<a href="consulta_usuario.php"><span class='box-menu box-azul'>Consultar Usuário</span></a>
				<a href="cadastro_noticia.php"><span class='box-menu box-azul' id='adicionar-noticia'>Cadastrar Notícia</span></a>
				<a href="consulta_noticia.php"><span class='box-menu box-azul' id='listar-noticia'>Consultar Notícia</span></a>
				<a href="consulta_banco_dados.php"><span class='box-menu box-azul' id='banco-dados' title='Exibe informações dos bancos de dados disponíveis na hospedagem'>Bancos de Dados</span></a>				
				<a href="index.php"><span class='box-menu box-red' id='sair' title='Sair do Sistema'>Sair</span></a>
			</div>
		</div>
	</div>
</body>
</html>