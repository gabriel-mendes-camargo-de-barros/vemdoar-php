<?php 

$smarty = new Template();


if(isset($_POST['cli_nome']) and isset($_POST['cli_email'])){
	//variaveis
	$cli_nome = $_POST['cli_nome'];
	$cli_sobrenome = $_POST['cli_sobrenome'];
     $cli_celular   = $_POST['cli_celular'];
     $cli_cidade    = $_POST['cli_cidade'];
     $cli_uf        = $_POST['cli_uf'];
     $cli_email     = $_POST['cli_email'];
     $cli_senha     = $_POST['cli_pass'];
     $cli_data_cad  = Sistema::DataAtualUS();
     $cli_hora_cad  = Sistema::HoraAtual();


     $clientes = new Clientes();

     $clientes->Preparar($cli_nome, $cli_sobrenome, $cli_celular, $cli_cidade, $cli_uf, $cli_email, $cli_data_cad, $cli_hora_cad, $cli_senha);


     $clientes->Inserir();


     //ASSIGNS PARA TEMPLATE
     $smarty->assign('NOME', $cli_nome);
     $smarty->assign('SITE', Config::SITE_NOME);
     $smarty->assign('EMAIL', $cli_email);
     //$smarty->assign('SENHA', $cli_senha);
     $smarty->assign('PAG_MINHA_CONTA', Rotas::pag_ClienteConta());
     $smarty->assign('SITE_HOME', Rotas::get_SiteHOME());

     //echo'<div class="alert alert-success"> Cadastro Efetuado!! A senha para fazer login foi enviada para seu email cadastrado. <br>' . 'Acesse seu email e confira!</div>';
     Rotas::Redirecionar(3, Rotas::pag_ClienteLogin());

}else{
	$smarty->display('cadastro.html');
}

 ?>