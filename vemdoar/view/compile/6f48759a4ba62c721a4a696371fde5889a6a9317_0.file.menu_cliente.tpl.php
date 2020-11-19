<?php
/* Smarty version 3.1.36, created on 2020-10-07 07:54:31
  from 'C:\xampp\htdocs\loja\view\menu_cliente.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f7d9e67e6d6e4_97898212',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f48759a4ba62c721a4a696371fde5889a6a9317' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\view\\menu_cliente.tpl',
      1 => 1602034984,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f7d9e67e6d6e4_97898212 (Smarty_Internal_Template $_smarty_tpl) {
?><div style="padding: 5%;">
<br>
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

</div><?php }
}
