<?php
/* Smarty version 3.1.36, created on 2020-11-15 21:30:06
  from 'C:\xampp\htdocs\loja\view\adm_produtos.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fb1b9fee957c4_83631684',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e5997668e7ac2692a6a0cd6056d722f2c1ae9e3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\view\\adm_produtos.html',
      1 => 1605482988,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb1b9fee957c4_83631684 (Smarty_Internal_Template $_smarty_tpl) {
?><div style="padding: 5%;">
    <?php if ($_smarty_tpl->tpl_vars['LOGADO']->value == true) {?>
    <h4 class="text-center">Gerenciar Produtos</h4>
    <hr>
    <section class="row ">

        <div class="col-md-4"> </div>

        <div class="col-md-4"> </div>

        <div class="col-md-4 text-right">
            <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTO_NOVO']->value;?>
" class="btn btn-success"> <i class="glyphicon glyphicon-plus"></i> Novo
                Produto
            </a>
        </div>

    </section>
    <br>

    <!--     exibe mensagem caso nao encontre produtos -->
    <?php if ($_smarty_tpl->tpl_vars['PRO_TOTAL']->value == 0) {?> <h4 class="alert alert-danger">Ops... Nada foi encontrado </h4>
        <?php }?>


        <!--  começa lista de produtos  ---->
        <section id="produtos" class="row">

            
            
            <table class="table table-bordered">

                <tr class="bg-success text-success">

                    <td></td>
                    <td>Produto</td>
                    <td>Categoria</td>
                    <td> </td>
                    <td> </td>
                    <td>Apagar este produto?</td>

                </tr>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>

                <tr>


                    <td> <img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img_p'];?>
" alt=""> </td>
                    <td> <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['P']->value['cate_nome'];?>
</td>
                    <td>
                        <form name="proeditar" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTO_EDITAR']->value;?>
">
                            <input type="hidden" name="pro_id" id="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
                            <button class="btn btn-success"> <i class="glyphicon glyphicon-pencil"></i> Editar</button>

                        </form>

                    </td>

                    <td>

                        <form name="proimg" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTO_IMG']->value;?>
">
                            <input type="hidden" name="pro_id" id="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
                            <input type="hidden" name="pro_nome" id="pro_nome" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
">
                            <button class="btn btn-info"> <i class="glyphicon glyphicon-picture"></i> Adicionar imagens</button>

                        </form>

                    </td>
                    <td>

                        <div class="col-md-12 text-center alert alert-danger" id="btnapagar">



                            <form name="frm_apagar" method="post" action="">
              
                                <input type="radio" name="confirmar" value="SIM" required>
                                <!---botao que apagar o produto de uma vez -->
                                <button class="btn btn-danger " name="btn_apagar"><i class="glyphicon glyphicon-remove"></i> OK
                                </button>
            
            
            
            
                                <input type="hidden" name="pro_id_apagar" value=<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
>
                                <input type="hidden" name="pro_apagar" value="SIM">
            
                                <!----pega o caminho completo da imagem atual -->
                                <input type="hidden" name="pro_img_arquivo" id="pro_img_arquivo" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img_arquivo'];?>
">
            
                            </form>
            
                        </div>

                    </td>


                </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            </table>


        </section>
        <!--  paginação inferior   -->
        <section id="pagincao" class="row">
            <center>
                <?php echo $_smarty_tpl->tpl_vars['PAGINAS']->value;?>

            </center>
        </section>

        <?php } else { ?>

        <?php }?>



</div><?php }
}
