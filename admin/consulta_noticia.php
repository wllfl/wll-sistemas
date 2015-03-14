<?php
session_start();
require_once "inc_verifica_acesso.php";
require_once "classes/controller.class.php";

$controller = new controller();
$sql = "SELECT id, titulo, status, (CAST(data AS DATE)) FROM tab_noticias ORDER BY id DESC";
$dados = $controller->getDados($sql);

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
			<fieldset id='box-consulta-noticia'>
				<legend>Informações da Notícia</legend>
				<table border='1' id='tbl-noticias'>
					<thead>
						<tr>
							<th>ID</th>
							<th>TITULO</th>
							<th>STATUS</th>
							<th>DATA</th>
							<th>AÇÃO</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($dados as $noticia): ?>
							<tr>
								<td><?=$noticia->id?></td>
								<td><?=$noticia->titulo?></td>
								<td><?=$noticia->status?></td>
								<td><?=$noticia->data?></td>
								<td>
									<input type="button" title='Editar Notícia' value="Editar" class='botao' onclick="window.location='cadastro_noticia.php?acao=editar&id=<?=$noticia->id?>'"/>
									<input type="button" title='Excluir Notícia' value="Excluir" class='botao' onclick="window.location='client-noticia.php?acao=excluir&id=<?=$noticia->id?>'"/>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
				<div class='controle-noticia'>
					<input type="button" title='Página Principal' value="Principal" class='botao' onclick="window.location='principal.php'"/>
					<input type="button" title='Cadastrar Notícias' value="Cadastrar" class='botao' onclick="window.location='cadastro_noticia.php'" /><br>
				</div>
			</fieldset>
		</div>
	</div>
</body>