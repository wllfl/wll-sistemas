<?php
session_start();
require_once "inc_verifica_acesso.php";
require_once "classes/controller.class.php";

$controller = new controller();
$sql = "SELECT banco_dados, usuario, senha, host, sgbd, descricao FROM tab_banco_dados ORDER BY sgbd, id DESC";
$dados = $controller->getDados($sql);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<title>Sistema CMS- Consulta Banco de Dados</title>
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
			<fieldset id='box-consulta-noticia'>
				<legend>Informações da Notícia</legend>
				<table border='1' id='tbl-noticias'>
					<thead>
						<tr>
							<th>Banco de Dados</th>
							<th>Usuario</th>
							<th>Senha</th>
							<th>Host</th>
							<th>SGDB</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($dados as $banco): ?>
							<tr>
								<td><a href="#" title="<?=$banco->descricao?>"><?=$banco->banco_dados?></td>
								<td><?=$banco->usuario?></td>
								<td><?=$banco->senha?></td>
								<td><?=$banco->host?></td>
								<td><?=$banco->sgbd?></td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
				<div class='controle-noticia'>
					<input type="button" title='Página Principal' value="Principal" class='botao' onclick="window.location='principal.php'"/>
				</div>
			</fieldset>
		</div>
	</div>
</body>