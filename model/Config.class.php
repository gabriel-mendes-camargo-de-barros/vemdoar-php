<?php 

Class Config{
    //informações basicas do site
    const SITE_URL = "http://localhost";
    const SITE_PASTA = "vemdoar";
    const SITE_NOME = "VemDoar";
    const SITE_EMAIL_ADM = "gmendescamargodebarros@gmail.com";
    // email que será utilizado posteriomente:      drivedotcc2020@gmail.com

    //informações do banco de dados
    const BD_HOST = "localhost",
          BD_USER = "root",
          BD_SENHA = "",
          BD_BANCO = "vemdoar",
          BD_PREFIX = "qc_";

    // informações para php mailler
    const EMAIL_HOST = "smtp.gmail.com";
    const EMAIL_USER = "gmendescamargodebarros@gmail.com";
    const EMAIL_NOME = "Contato Loja Mendes";
    const EMAIL_SENHA = "Camargo25*";
    const EMAIL_PORTA = 587;
    const EMAIL_SMTPAUTH = true;
    const EMAIL_SMTPSECURE = "tls";
    const EMAIL_COPIA = "gmendescamargodebarros@gmail.com";

}    
?>