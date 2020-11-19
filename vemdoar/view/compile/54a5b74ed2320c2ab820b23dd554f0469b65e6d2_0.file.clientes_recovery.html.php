<?php
/* Smarty version 3.1.36, created on 2020-11-13 14:45:27
  from 'C:\xampp\htdocs\loja\view\clientes_recovery.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5faeb827d22ca9_11606290',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54a5b74ed2320c2ab820b23dd554f0469b65e6d2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\view\\clientes_recovery.html',
      1 => 1605285926,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5faeb827d22ca9_11606290 (Smarty_Internal_Template $_smarty_tpl) {
?><h4 class="text-center" style="color:#00BFA6; margin: 10% 0 0;" >Digite seu email cadatrado para receber uma nova senha </h4>
<br>
<br>
<br>
<form name="recuperarsenha" method="post" action="" style="color:#00BFA6; margin: 0 0 14.8%;">

    <section>
        <div class="col-md-4"></div>

        <div class="col-md-4">
            <input type="email" name="cli_email" id="cli_email" placeholder="Digite seu email cadastrado" class="form-control" required style="color: #01A185; border-color: #01ca95; color: #01ca95;" >
            <br>
            <button type="submit" class="btn btn-warning btn-block" > Recuperar </button>
        </div>

        <div class="col-md-4">



        </div>



    </section>


</form><?php }
}
