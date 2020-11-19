<?php
/* Smarty version 3.1.36, created on 2020-11-19 14:34:50
  from 'C:\xampp\htdocs\loja\view\home.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fb69eaab41098_64183821',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7e3a84883b516b03d84e1c36afce62b2fce2a06' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\view\\home.html',
      1 => 1605803684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb69eaab41098_64183821 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="work-section">
    <div class="banner-side" style="margin: 100px auto -100px;">
        <div class="main-banner"></div>
        <div class="banner text-center">
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
" style="font-weight: 600;">DOAR</a>
            </div>
        </div>
    </div>
    <div class="container">
        <h2 class="head">Como Funciona?</h2>
        <div class="work-section-head text-center">
            <p style="color: #01ca95;">Rápido, fácil e livre para postar um anúncio e você vai encontrar o que você está procurando.</p>
        </div>
        <!-- <div class="work-section-grids text-center"> -->
        <div class="col-md-3 work-section-grid">
            <i class="fa fa-pencil-square-o"></i>
            <h4 style="color: #01ca95;">Faça Um Anúncio</h4>
            <!-- <p></p> -->
            <span class="arrow1"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
images/arrow1.png" alt="" /></span>
        </div>
        <div class="col-md-3 work-section-grid">
            <i class="fa fa-eye"></i>
            <h4 style="color: #01ca95;">Encontre Um Item</h4>
            <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                    been</p> -->
            <span class="arrow2"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
images/arrow2.png" alt="" /></span>
        </div>
        <div class="col-md-3 work-section-grid">
            <i class="fa fa-phone"></i>
            <h4 style="color: #01ca95;">Entre Em Contato Com O Anunciante</h4>
            <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                    been</p> -->
            <span class="arrow1"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
images/arrow1.png" alt="" /></span>
        </div>
        <div class="col-md-3 work-section-grid">
            <i class="fa fa-exclamation"></i>
            <h4 style="color: #01ca95;">Atenção! Não nos responsabilizamos pela negociação ou pelo transporte.</h4>
        </div>
        <!-- <div class="clearfix"></div> -->
        <!-- <a class="work" href="#">Get start Now</a> -->
        <!-- </div> -->
    </div>
</div>
<div class="mobile-app">
    <div class="container">
        <div class="col-md-5">
            <div class="clearfixx"></div>
        </div>
        <div class="col-md-7 app-right">
            <h3>Sobre nós</h3>
            <p style="font-size: 2rem; font-family: 'Ubunto';">
                VemDoar é uma Organização Não Governamental, onde os usuários poderão expor seus objetos que
                ainda estejam em boas condições de uso, ao alcance de pessoas interessadas tanto em “adota-los”
                quanto em troca-los; também é um meio de facilitar a vida de pessoas que estão precisando de
                ajuda, mas não sabem aonde recorrer. Como o site está focado totalmente nos usuários o acesso a
                ele é realmente muito fácil, além de ter total comodidade durante o manuseio, o que facilita
                mesmo para os menos experientesno uso da área da informática.
            </p>
        </div>
    </div>
</div>
<!-- <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIAS']->value, 'C');
$_smarty_tpl->tpl_vars['C']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
$_smarty_tpl->tpl_vars['C']->do_else = false;
?>
                    
    <a href="<?php echo $_smarty_tpl->tpl_vars['C']->value['cate_link'];?>
" class="list-group-item"><span class="glyphicon glyphicon-menu-right"></span> <?php echo $_smarty_tpl->tpl_vars['C']->value['cate_nome'];?>
</a> 

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> -->
<div class="categories">
    <div class="container">
        <div class="col-md-3 focus-grid">
            <a href="produtos/1">
                <div class="focus-border" style="border: 0">
                    <div class="focus-layout">
                        <div class="focus-image"><i class="fa fa-paw"></i></div>
                        <h4 class="clrchg"">Acessórios para Animais</h4>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 focus-grid">
            <a href="produtos/5">
                <div class="focus-border" style="border: 0">
                    <div class="focus-layout">
                        <div class="focus-image"><i class="fa fa-car"></i></div>
                        <h4 class="clrchg"> Acessórios Automotivos</h4>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 focus-grid">
            <a href="produtos/2">
                <div class="focus-border" style="border: 0">
                    <div class="focus-layout">
                        <div class="focus-image"><i class="fa fa-laptop"></i></div>
                        <h4 class="clrchg">Eletrônicos</h4>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 focus-grid">
            <a href="produtos/3">
                <div class="focus-border" style="border: 0">
                    <div class="focus-layout">
                        <div class="focus-image"><i class="fa fa-gamepad"></i></div>
                        <h4 class="clrchg">Infantil</h4>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 focus-grid">
            <a href="produtos/4">
                <div class="focus-border" style="border: 0">
                    <div class="focus-layout">
                        <div class="focus-image"><i class="fa fa-book"></i></div>
                        <h4 class="clrchg">Livros, Esportes e Hobbies</h4>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 focus-grid">
            <a href="produtos/8">
                <div class="focus-border" style="border: 0">
                    <div class="focus-layout">
                        <div class="focus-image"><i class="fa fa-plus"></i></div>
                        <h4 class="clrchg">Outros</h4>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 focus-grid">
            <a href="produtos/9">
                <div class="focus-border" style="border: 0">
                    <div class="focus-layout">
                        <div class="focus-image"><i class="fa fa-asterisk"></i></div>
                        <h4 class="clrchg">Roupas</h4>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 focus-grid">
            <a href="produtos/10">
                <div class="focus-border" style="border: 0">
                    <div class="focus-layout">
                        <div class="focus-image"><i class="fa fa-home"></i></div>
                        <h4 class="clrchg">Utencilios para Casa</h4>
                    </div>
                </div>
            </a>
        </div>
        <!-- <div class="col-md-3 focus-grid">
            <a href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
categories.html#parentVerticalTab9">
                <div class="focus-border">
                    <div class="focus-layout">
                        <div class="focus-image"><i class="fa fa-gamepad"></i></div>
                        <h4 class="clrchg">Crianças</h4>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-2 focus-grid">
                <a href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
categories.html#parentVerticalTab10">
                    <div class="focus-border">
                        <div class="focus-layout">
                            <div class="focus-image"><i class="fa fa-shield"></i></div>
                            <h4 class="clrchg">Services</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-2 focus-grid">
                <a href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
categories.html#parentVerticalTab11">
                    <div class="focus-border">
                        <div class="focus-layout">
                            <div class="focus-image"><i class="fa fa-at"></i></div>
                            <h4 class="clrchg">Jobs</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-2 focus-grid">
                <a href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
categories.html#parentVerticalTab12">
                    <div class="focus-border">
                        <div class="focus-layout">
                            <div class="focus-image"><i class="fa fa-home"></i></div>
                            <h4 class="clrchg">Real Estate</h4>
                        </div>
                    </div>
                </a>
            </div> -->
        <div class="clearfix"></div>
    </div>
</div><?php }
}
