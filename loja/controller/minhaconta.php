<?php 

$smarty = new Template();

if(!isset($_SESSION)){
	session_start();
}


$smarty->assign('PAG_ANUNCIOS', Rotas::pag_ProdutosADM());


Login::MenuCliente();
$smarty->assign('LOGADO', Login::Logado());

if(Login::Logado()){
	$smarty->assign('USER', $_SESSION['CLI']['cli_nome']);	
}

$smarty->display('minha_conta.html');

 ?>