<?php
/* Smarty version 3.1.36, created on 2020-11-13 14:40:08
  from 'C:\xampp\htdocs\loja\view\cliente_senha.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5faeb6e8a2e6f6_47018682',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d06043ab159dc11f061e4247ea5d6b56e7646e5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\view\\cliente_senha.html',
      1 => 1605285608,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5faeb6e8a2e6f6_47018682 (Smarty_Internal_Template $_smarty_tpl) {
?><div style="margin: 19% 0 17%; padding-left: 5%; padding-right: 5%;">
    
    <h3 style="margin-top: -230px;" class="text-center">Alteração de senha de acesso</h3>
    <br>
    <br>
    <form name="alterarsenha" method="post" action="">
        <section>
            <div class="col-md-4"></div>

            <div class="col-md-4">
                <label>Digite sua senha atual</label>

                <input type="password" name="cli_senha_atual" id="cli_senha_atual" class="form-control" required />
                <br>
                <label>Digite sua nova senha</label>

                <input type="password" name="cli_senha" id="cli_senha" class="form-control" required />
                <br>
                <br>
                <button type="submit" class="btn btn-success btn-block"> Alterar </button>
            </div>

            <div class="col-md-4"></div>
        </section>
    </form>
</div><?php }
}
