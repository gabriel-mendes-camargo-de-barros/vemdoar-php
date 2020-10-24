<?php 

$smarty = new Template();

$produtos = new Produtos();

if(isset(Rotas::$pag[0])){
	$produtos->GetProdutosCateID(Rotas::$pag[0]);
}else{
	$produtos->ProTrue($_SESSION['CLI']['cli_id']);
}


$smarty->assign('PRO', $produtos->GetItens());
$smarty->assign('PRO_INFO', Rotas::pag_ProdutosInfo());
$smarty->assign('PRO_TOTAL', $produtos->TotalDados());
$smarty->assign('PAGINAS', $produtos->ShowPaginacao());
$smarty->assign('PAG_PRODUTO_NOVO', Rotas::pag_ProdutosNovoADM());
$smarty->assign('PAG_PRODUTO_EDITAR', Rotas::pag_ProdutosEditarADM());
$smarty->assign('PAG_PRODUTO_IMG', Rotas::pag_ProdutosImgADM());
$smarty->assign('LOGADO', Login::Logado());
$smarty->assign('ANUNCIAR', Login::Anunciar());
 

if(Login::Logado()){
	$smarty->assign('USER', $_SESSION['CLI']['cli_nome']);	
}

$smarty->display('adm_produtos.html');

?>