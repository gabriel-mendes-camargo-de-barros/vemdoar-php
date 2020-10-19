<?php 

Class Config{

	// INFORMÃÇÕES BÁSICAS DO SITE
	const SITE_URL = "http://localhost";
	const SITE_PASTA = "loja";
	const SITE_NOME = "VemDoar";
	const SITE_EMAIL_ADM = "lojavirtualfreitas@gmail.com";
	const BD_LIMIT_POR_PAG = 15;
	//const SITE_CEP = '31535522';


	// INFORMAÇÕES DO BANCO DE DADOS
	const BD_HOST = "localhost",
		  BD_USER = "root",
		  BD_SENHA = "",
		  BD_BANCO = "vemdoar",
		  BD_PREFIX = "qc_"; 

	// //INFORMÃÇÕES BÁSICAS DO SITE HOSPEDADO
	// const SITE_URL = "http://lojadofreitas-cc.umbler.net";
	// const SITE_PASTA = "";
	// const SITE_NOME = "Loja do Freitas - PHP 7 e Mysqli";
	// const SITE_EMAIL_ADM = "lojavirtualfreitas@gmail.com";
	// const BD_LIMIT_POR_PAG = 6;
	// const SITE_CEP = '31535522';


	// //INFORMAÇÕES DO BANCO DE DADOS HOSPEDADO
	// const BD_HOST = "mysql552.umbler.com",
	// 	  BD_USER = "hugovasconcelos",
	// 	  BD_SENHA = "hugo123456",
	// 	  BD_BANCO = "lojafreitas",
	// 	  BD_PREFIX = "qc_";

	//INFORMAÇÕES PARA PHP MAILLER
	const EMAIL_HOST = "smtp.gmail.com";
	const EMAIL_USER = "lojavirtualfreitas@gmail.com";
	const EMAIL_NOME = "Contato Loja Freitas";
	const EMAIL_SENHA = "lojadofreitas";
	const EMAIL_PORTA = 587;
	const EMAIL_SMTPAUTH = true;
	const EMAIL_SMTPSECURE = "tls";
	const EMAIL_COPIA = "lojavirtualfreitas@gmail.com";

}
 ?>

