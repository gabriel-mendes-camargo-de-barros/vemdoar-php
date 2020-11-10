<?php
/* Smarty version 3.1.36, created on 2020-11-09 12:55:41
  from 'C:\xampp\htdocs\loja\view\clientes_recovery.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fa9586d6adc04_08204070',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54a5b74ed2320c2ab820b23dd554f0469b65e6d2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\view\\clientes_recovery.html',
      1 => 1604933737,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa9586d6adc04_08204070 (Smarty_Internal_Template $_smarty_tpl) {
?><br><br><br><br><br>

<h4 class="text-center" sytle="color: #01ca95;" >Digite seu email cadatrado para receber uma nova senha </h4>
<br>
<br>
<br>
<form name="recuperarsenha" method="post" action="">

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


</form>
<br><br><br><br>
<br><br><br><br><?php }
}
