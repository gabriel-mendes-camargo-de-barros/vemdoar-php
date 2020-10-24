<?php 

$smarty = new Template();

$smarty->assign('BANNER', Rotas::ImageLink('banner.jpg', 750,230));

$smarty->display('home.html');

 ?>