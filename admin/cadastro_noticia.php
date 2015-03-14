<?php
session_start();
require_once "inc_verifica_acesso.php";
require_once "classes/controller.class.php";

$id = (isset($_GET['id']))? $_GET['id'] : '' ;
$acao = (isset($_GET['acao']))? $_GET['acao'] : '' ;
if (!empty($acao)):
	$controller = new controller();
	$sql = "SELECT id, titulo, previa, url, status FROM tab_noticias WHERE id = ?";
	$param = array($id);
	$dados = $controller->getDados($sql, $param, FALSE);

	if(!empty($dados)):
		$id = $dados->id;
		$titulo = $dados->titulo;
		$previa = $dados->previa;
		$url = $dados->url;
		$status = $dados->status;
	endif;
endif

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
			<fieldset id='box-cadastro-noticia' class='clearfix'>
				<legend>Informações da Notícia</legend>
				<form action="client-noticia.php" method="post">
					<input type="hidden" name='acao' value="<?=(!empty($acao))?$acao:'incluir'?>">
					<input type="hidden" name='id' value="<?=(!empty($id))?$id:''?>">
					<label>Título da Notícia:</label>
					<input type="text" name='titulo' id='titulo'value="<?=(!empty($titulo))?$titulo:''?>" required placeholder='Informe o Título'/><br>
					<label>Prévia da Notícia:</label>
					<textarea name='previa' id='previa' placeholder='Informe a Prévia (Máximo de 150 caracteres)'><?=(!empty($previa))?$previa:''?></textarea><br>
					<label>URL da Notícia:</label>
					<input type="text" name='url' id='url'value="<?=(!empty($url))?$url:''?>" required placeholder='Informe o URL'/><br>
					<label>Status da Notícia:</label>
					<select name="status">
						<?php if(isset($status)):?>
							<option value="<?=$status?>" selected><?=$status?></option>
						<?php else:?>
							<option value="" selected>Selecione o Status</option>
						<?php endif;?>
						<option value="Ativo">Ativo</option>
						<option value="Inativo">Inativo</option>
					</select><br><br><br>
					<div class='controle-noticia'>
						<input type="submit" title='Gravar Notícia' name='gravar' id='gravar' value="Gravar" class='botao'/>
						<input type="button" title='Página Principal' value="Principal" class='botao' onclick="window.location='principal.php'"/>
						<input type="button" title='Consultar Notícias' name='consultar' id='consultar' value="Consultar" class='botao' onclick="window.location='consulta_noticia.php'" /><br>
					</div>
				</form>
			</fieldset>
		</div>
	</div>
</body>