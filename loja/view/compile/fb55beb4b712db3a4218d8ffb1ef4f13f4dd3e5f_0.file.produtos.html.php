<?php
/* Smarty version 3.1.36, created on 2020-10-07 14:45:44
  from 'C:\xampp\htdocs\loja\view\produtos.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f7dfec881fe40_89318904',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb55beb4b712db3a4218d8ffb1ef4f13f4dd3e5f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\view\\produtos.html',
      1 => 1602092742,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f7dfec881fe40_89318904 (Smarty_Internal_Template $_smarty_tpl) {
?><div style="padding: 5%;">

    <?php if ($_smarty_tpl->tpl_vars['PRO_TOTAL']->value < 1) {?> <H4 class="alert alert-danger">Nenhum produto encontrado!!</H4>
        <meta http-equiv="refresh" content=1;url="<?php echo $_smarty_tpl->tpl_vars['PRODUTOS']->value;?>
">

    <?php }?>

    <div class="col-md-3 focus-grid">
        <a href="produtos/1">
            <div class="focus-border">
                <div class="focus-layout">
                    <div class="focus-image"><i class="fa fa-paw"></i></div>
                    <h4 class="clrchg">Acessórios para Animais</h4>
                </div>
            </div>
        </a>
    </div>
    <div class="col-md-3 focus-grid">
        <a href="produtos/5">
            <div class="focus-border">
                <div class="focus-layout">
                    <div class="focus-image"><i class="fa fa-car"></i></div>
                    <h4 class="clrchg"> Acessórios Automotivos</h4>
                </div>
            </div>
        </a>
    </div>
    <div class="col-md-3 focus-grid">
        <a href="produtos/2">
            <div class="focus-border">
                <div class="focus-layout">
                    <div class="focus-image"><i class="fa fa-laptop"></i></div>
                    <h4 class="clrchg">Eletrônicos</h4>
                </div>
            </div>
        </a>
    </div>
    <div class="col-md-3 focus-grid">
        <a href="produtos/3">
            <div class="focus-border">
                <div class="focus-layout">
                    <div class="focus-image"><i class="fa fa-gamepad"></i></div>
                    <h4 class="clrchg">Infantil</h4>
                </div>
            </div>
        </a>
    </div>
    <div class="col-md-3 focus-grid">
        <a href="produtos/4">
            <div class="focus-border">
                <div class="focus-layout">
                    <div class="focus-image"><i class="fa fa-book"></i></div>
                    <h4 class="clrchg">Livros, Esportes e Hobbies</h4>
                </div>
            </div>
        </a>
    </div>
    <div class="col-md-3 focus-grid">
        <a href="produtos/8">
            <div class="focus-border">
                <div class="focus-layout">
                    <div class="focus-image"><i class="fa fa-shield"></i></div>
                    <h4 class="clrchg">Outros</h4>
                </div>
            </div>
        </a>
    </div>
    <div class="col-md-3 focus-grid">
        <a href="produtos/9">
            <div class="focus-border">
                <div class="focus-layout">
                    <div class="focus-image"><i class="fa fa-asterisk"></i></div>
                    <h4 class="clrchg">Roupas</h4>
                </div>
            </div>
        </a>
    </div>
    <div class="col-md-3 focus-grid">
        <a href="produtos/10">
            <div class="focus-border">
                <div class="focus-layout">
                    <div class="focus-image"><i class="fa fa-home"></i></div>
                    <h4 class="clrchg">Utencilios para Casa</h4>
                </div>
            </div>
        </a>
    </div>
    <div class="clearfix"></div>

    <hr>
    <br>
    <br>
    <!--  começa lista de produtos  ---->
    <section id="produtos">

        <ul style="list-style: none">



            <div class="row" id="pularliha">

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>

                <li class="col-md-4">
                    <br>
                    <div class="thumbnail">

                        <a href="<?php echo $_smarty_tpl->tpl_vars['PRO_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">


                            <img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" width="200" height="200" alt="">

                            <div class="caption">

                                <h4 class="text-center"> <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</h4>

                                <!-- <h3 class="text-center text-danger">Eu Quero</h3> -->

                            </div>

                        </a>

                    </div>


                </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>


        </ul>

    </section>


    <!--  paginação inferior   -->
    <section id="pagincao" class="row">
        <center>
            <?php echo $_smarty_tpl->tpl_vars['PAGINAS']->value;?>

        </center>
    </section>
</div><?php }
}
