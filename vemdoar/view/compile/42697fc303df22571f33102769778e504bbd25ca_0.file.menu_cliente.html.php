<?php
/* Smarty version 3.1.36, created on 2020-11-19 14:41:15
  from 'C:\xampp\htdocs\loja\view\menu_cliente.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fb6a02bcb5760_09417465',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42697fc303df22571f33102769778e504bbd25ca' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\view\\menu_cliente.html',
      1 => 1605803707,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb6a02bcb5760_09417465 (Smarty_Internal_Template $_smarty_tpl) {
?><div style="padding-left: 5%; padding-right: 5%; padding-bottom: 0;">
  <br><br>
  <h4 class="text-center text-danger"> Olá <b><?php echo $_smarty_tpl->tpl_vars['USER']->value;?>
</b>, seja bem vindo! O que deseja fazer agora?</h4>
  <br>
  <section class="row">

    <div class="text-center">

      <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CONTA']->value;?>
" class="btn btn-success"><i class="glyphicon glyphicon-home"></i> Minha Conta</a>

      <!--<a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CLIENTE_PEDIDOS']->value;?>
" class="btn btn-success"><i class="glyphicon glyphicon-barcode"></i> Pedidos</a>-->

      <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CLIENTE_DADOS']->value;?>
" class="btn btn-success"><i class="glyphicon glyphicon-edit"></i> Meus Dados </a>
      <!--<a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO']->value;?>
" class="btn btn-success"><i class="glyphicon glyphicon-shopping-cart"></i> Carrinho </a>-->
      <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CLIENTE_SENHA']->value;?>
" class="btn btn-warning"> Alterar Senha </a>
      <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_LOGOFF']->value;?>
" class="btn btn-danger"><i class="glyphicon glyphicon-log-out"></i> Sair </a>




    </div>





  </section>

  <br><br><br><br>
  <div class="banner-button" >
    <a style="text-decoration: none; color: #fff; font-weight: 600;" href="<?php echo $_smarty_tpl->tpl_vars['PAG_ANUNCIOS']->value;?>
">
      DOAR
    </a>
  </div>

</div><?php }
}
