<?php
/* Smarty version 3.1.36, created on 2020-10-14 14:25:23
  from 'C:\xampp\htdocs\loja\view\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f8734831df602_59912891',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '454e5c75209ace7d2cbaa52f516bd9e1b3cc0129' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\view\\index.html',
      1 => 1602462990,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8734831df602_59912891 (Smarty_Internal_Template $_smarty_tpl) {
?><!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<head>
    <title><?php echo $_smarty_tpl->tpl_vars['TITULO_SITE']->value;?>
</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
tema/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
tema/css/bootstrap-select.css">
    <link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
tema/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
tema/css/flexslider.css" type="text/css" media="screen" />
    <!--<link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
tema/contatos/contatos.css" rel="stylesheet" type="text/css"/>-->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
tema/css/font-awesome.min.css" />
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Resale Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <?php echo '<script'; ?>

        type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } <?php echo '</script'; ?>
>
    <!-- //for-mobile-apps -->
    <!--fonts-->
    <link href='//fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
    <link
        href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic'
        rel='stylesheet' type='text/css'>
    <!--//fonts-->
    <!-- js -->
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
tema/js/jquery.min.js"><?php echo '</script'; ?>
>
    <!-- js -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
tema/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
tema//contatos/contatos.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
tema/js/bootstrap-select.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        $(document).ready(function () {
            var mySelect = $('#first-disabled2');

            $('#special').on('click', function () {
                mySelect.find('option:selected').prop('disabled', true);
                mySelect.selectpicker('refresh');
            });

            $('#special2').on('click', function () {
                mySelect.find('option:disabled').prop('disabled', false);
                mySelect.selectpicker('refresh');
            });

            $('#basic2').selectpicker({
                liveSearch: true,
                maxOptions: 1
            });
        });
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
tema/js/jquery.leanModal.min.js"><?php echo '</script'; ?>
>
    <link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
tema/css/jquery.uls.css" rel="stylesheet" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
tema/css/jquery.uls.grid.css" rel="stylesheet" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
tema/css/jquery.uls.lcd.css" rel="stylesheet" />
    <!-- Source -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
tema/js/jquery.uls.data.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
tema/js/jquery.uls.data.utils.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
tema/js/jquery.uls.lcd.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
tema/js/jquery.uls.languagefilter.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
tema/js/jquery.uls.regionfilter.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
tema/js/jquery.uls.core.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        $(document).ready(function () {
            $('.uls-trigger').uls({
                onSelect: function (language) {
                    var languageName = $.uls.data.getAutonym(language);
                    $('.uls-trigger').text(languageName);
                },
                quickList: ['en', 'hi', 'he', 'ml', 'ta', 'fr'] //FIXME
            });
        });
    <?php echo '</script'; ?>
>
</head>

<body>
    <!-- <?php echo '<script'; ?>
>
        alert("I am an alert box!");
    <?php echo '</script'; ?>
> -->
    <div class="header">
        <div class="container">
            <div class="logo">
                <a href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
"><span>Vem</span>Doar</a>
            </div>
            <div class="header-right">
                <a class="account" href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
">Home</a>
                <?php if ($_smarty_tpl->tpl_vars['LOGADO']->value == FALSE) {?>
                <a class="account" href="<?php echo $_smarty_tpl->tpl_vars['PAG_MINHACONTA']->value;?>
">Login</a>
                <?php } else { ?>
                <a class="account" href="<?php echo $_smarty_tpl->tpl_vars['PAG_MINHACONTA']->value;?>
">Minha Conta</a>
                <?php }?>
                <a class="account" href="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTOS']->value;?>
">Produtos</a>
            </div>
        </div>
    </div>
    <div class="main-banner banner text-center">
        <div class="container">

            <h1>Anuncie <span class="segment-heading"> qualquer objeto </span> com a VemDoar</h1>
            <p>
                desenvolvemos um site para facilitar a Conexão de pessoas
                interessadas em fazer uma boa ação e doar
                objetos em bom estado com pessoas que queiram ou precisam desse objeto
                <br><br>
                A integração da tecnologia nos serviços sociais tem como objetivo
                melhorar a organização das informações
            </p>
            <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_ANUNCIOS']->value;?>
">Anúnciar</a>
        </div>
    </div>
    <div class="content">
       
        <!-- content-starts-here -->
        <!-- <div style="width: 90%; margin-left: 5%; display: grid; "> -->
            <?php 
                Rotas::get_Pagina();
            ?>
        <!-- </div> -->

        <!-- Como funciona -->
    </div>
    <!--footer section start-->
    <footer>
       
        <div class="footer-bottom text-center">
            <div class="container">
                <div class="footer-logo">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
index.html"><span>Vem</span>Doar</a>
                </div>
                <div class="footer-social-icons">
                    <ul>
                        <li><a class="facebook" href="#"><span>Facebook</span></a></li>
                        <li><a class="twitter" href="#"><span>Twitter</span></a></li>
                        <li><a class="flickr" href="#"><span>Flickr</span></a></li>
                        <li><a class="googleplus" href="#"><span>Google+</span></a></li>
                        <li><a class="dribbble" href="#"><span>Dribbble</span></a></li>
                    </ul>
                </div>
                <div class="copyrights">
                    <p> © 2020 <?php echo $_smarty_tpl->tpl_vars['TITULO_SITE']->value;?>
. Todos os Direitos Reservados | Design por <a
                            href="http://w3layouts.com/"> W3layouts</a></p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </footer>
    <!--footer section end-->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
tema/js/select-region.js"><?php echo '</script'; ?>
>
</body>

</html><?php }
}
