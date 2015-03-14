<?php
session_start();
require_once "classes/controller.class.php";
require_once "classes/helper/helper_format.class.php";

/*
* Esta sendo atribuido os valores enviados via formulário ou via URL
* para esse exemplo estou usando o recurso do PHP $_REQUEST[] para capturar tanto POST quanto GET.
*/
$acao 	= (isset($_REQUEST['acao'])) ? $_REQUEST['acao'] : '';
$id 	= (isset($_REQUEST['id'])) ? $_REQUEST['id'] : '';
$titulo = (isset($_POST['titulo'])) ? $_POST['titulo'] : '';
$previa = (isset($_POST['previa'])) ? $_POST['previa'] : '';
$url    = (isset($_POST['url'])) ? $_POST['url'] : '';
$status = (isset($_POST['status'])) ? $_POST['status'] : '';

/*
* Instâncio o objeto controller e configuro a opções de 
* Campos que deverão ser comparados para identificar duplicidade de registros
* Campos que podem ser inseridos como NULL
*/
$controller = new controller('tab_noticias');
$arrayCondicaoDuplicidade = array('titulo=' => $titulo);
$controller->setCondicaoDuplicidade($arrayCondicaoDuplicidade);
$arrayNullAceito = array('previa');
$controller->setNullAceito($arrayNullAceito);

// Verifica se foi requisitada uma inclusão de registros
if($acao == 'incluir'):
	$array = array(
			'titulo' => $titulo,
			'previa' => $previa,
			'url' => $url,
			'status' => $status,
		);

	$_SESSION['MENSAGEM'] = $controller->insert($array);
	echo "<script>window.location='principal.php'</script>";
endif;


// Verifica se foi requisitada uma edição de registros
if($acao == 'editar'):
	$condicao = array('id=' => $id);
	$array = array(
			'titulo' => $titulo,
			'previa' => $previa,
			'url' => $url,
			'status' => $status
		);

	$_SESSION['MENSAGEM'] = $controller->update($array, $condicao);
	echo "<script>window.location='principal.php'</script>";
endif;


// Verifica se foi requisitada uma exclusão de registros
if($acao == 'excluir'):
	$condicao = array('id=' => $id);
	$_SESSION['MENSAGEM'] = $controller->delete($condicao);
	echo "<script>window.location='consulta.php'</script>";
endif;

?>
