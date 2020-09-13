<?php 

require './lib/autoload.php';

$smarty = new Template();
//Rotas::get_pagina();

//valores para o template
$smarty->assign('NOME', 'GABRIEL MENDES');
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('GET_HOME', Rotas::get_SiteHOME());
$smarty->assign('PAG_PRODUTOS', Rotas::pag_Produtos());
$smarty->assign('PAG_CONTATO', Rotas::pag_Contato());
$smarty->assign('PAG_MINHACONTA', Rotas::pag_MinhaConta());
$smarty->assign('TITULO_SITE', Config::SITE_NOME);

// $dados = new Conexao();
// $sql = "SELECT * FROM categories";
// $dados->ExecuteSQL($sql);
// echo $dados->TotalDados();


//echo Rotas::get_SiteTEMA() . '<br>';


//sempre por último:
$smarty->display('index.tpl');
?>