<?php 

$smarty = new Template();

$produtos = new Produtos();
$gravar = new Produtos();

if(Login::Logado() === true){
	if(isset(Rotas::$pag[0])){
		$produtos->ProTrue($_SESSION['CLI']['cli_id']);
	}
}else{
	$produtos->GetProdutosCateID(Rotas::$pag[0]);
}

if(isset($_POST['pro_apagar']) && isset($_POST['pro_id_apagar']) && $_POST['pro_apagar'] == 'SIM'){
	if($gravar->Apagar($_POST['pro_id_apagar'])){
		echo '<div class="alert alert-success">Produto Excluido com Sucesso!!</div>';
		@unlink($_POST['pro_img_arquivo']);
		Rotas::Redirecionar(2, Rotas::pag_ProdutosADM());
		exit();
	}else{
		echo '<div class="alert alert-danger">O produto não pode ser excluido!!</div>';
	}
}

// $gravar->Preparar($pro_nome, $pro_categoria, $pro_ativo, $pro_cli, $pro_valor, $pro_img, $pro_desc);

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