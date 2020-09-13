<?php

$smarty = new Template();

$produtos = new Produtos();
$produtos->GetProdutos();

$smarty->assign('PAG_MINHACONTA', Rotas::pag_MinhaConta());


$smarty->assign('PROD', $produtos->GetItens());
$smarty->display('produtos.tpl');

// var_dump($produtos->GetItens());

?>