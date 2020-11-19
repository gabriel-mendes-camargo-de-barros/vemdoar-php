<?php
/* Smarty version 3.1.36, created on 2020-11-18 11:19:33
  from 'C:\xampp\htdocs\loja\view\produtos_info.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fb51f65e6c584_32341284',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd7c365ffae092b000a4b09b9b38a99ecc917879' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\view\\produtos_info.html',
      1 => 1605705572,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb51f65e6c584_32341284 (Smarty_Internal_Template $_smarty_tpl) {
?><div style="padding: 5%;">


  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>

  <h3 style="color: #01A185;" class="text-center"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</h3>
  <hr>

  <div class="row">


        <div class="col-md-6 ">

      <img class="thumbnail" src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img_g'];?>
" alt="">

    </div>


        <div class="col-md-6 thumbnail">

      <img src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/images/logo-pagseguro.png" alt="">
      <hr>


      <div class="col-md-6">
        <h3 style="color: #01A185;" class="text-center preco"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_cli_nome'];?>
</h3>
      </div>

      <div class="col-md-6">
        <form name="carrinho" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_COMPRAR']->value;?>
">
          <input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
          <input type="hidden" name="acao" value="add">
          <!-- <button class="btn btn-success btn-lg">Entrar em Contato</button> -->
          <a style="
              text-decoration: none;
              color: #01A185;
              font-size: 1.6rem;
              width: 340px;
            " 
            target="blank" 
            href="https://wa.me/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
"
          >
            <!-- <div class="prod-info-banner"></div> -->
            Entrar em contato
          </a>
        </form>

      </div>








    </div>




  </div>
  <!-- -->
    <div class="row">
    <hr>
    <h4 style="color: #01A185;" class="text-center">Mais imagens</h4>
    <br>
    <ul style="list-style: none">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['IMAGES']->value, 'I');
$_smarty_tpl->tpl_vars['I']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['I']->value) {
$_smarty_tpl->tpl_vars['I']->do_else = false;
?>

      <li class="col-md-3 ">
        <img src="<?php echo $_smarty_tpl->tpl_vars['I']->value['img_nome'];?>
" alt="" class="thumbnail">


      </li>

      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


    </ul>


  </div>
  
  <div style="color: #01A185;" class="row">
    <hr>
    <h4 style="color: #01A185;" class="text-center">Descrição do produto</h4>

    <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_desc'];?>


  </div>
  <br>
  <br>


  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</div><?php }
}
