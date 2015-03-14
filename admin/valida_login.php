<?php
	session_start();
	require_once "classes/controller.class.php";

	$email = (isset($_POST['email'])) ? $_POST['email'] : '' ;
	$senha = (isset($_POST['senha'])) ? $_POST['senha'] : '' ;

	if (!empty($email) && !empty($senha)):
		$controller = new controller();
		$sql = "SELECT id, nome, privilegio, email FROM tab_usuario WHERE email = ? AND senha = ? AND status = ?";
		$param = array($email, $senha, "Ativo");
		$dados = $controller->getDados($sql, $param, FALSE);

		if (!empty($dados)):
			$_SESSION['id'] = $dados->id;
			$_SESSION['nome'] = $dados->nome;
			$_SESSION['privilegio'] = $dados->privilegio;
			$_SESSION['email'] = $dados->email;
			$_SESSION['LIBERADO'] = TRUE;
			echo "<script>window.location='principal.php'</script>";
		else:
			echo "<script>window.location='index.php'</script>";
		endif;
	else:
		echo "<script>window.location='index.php'</script>";
	endif;
?>
