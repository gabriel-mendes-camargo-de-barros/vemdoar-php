<?php 

$smarty = new Template();

$smarty->assign('BANNER', Rotas::ImageLink('banner.jpg', 750,230));
$smarty->assign('PAG_ANUNCIOS', Rotas::pag_ProdutosADM());


$smarty->display('home.html');

 ?>