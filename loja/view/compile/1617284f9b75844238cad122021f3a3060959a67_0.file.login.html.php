<?php
/* Smarty version 3.1.36, created on 2020-11-06 16:17:09
  from 'C:\xampp\htdocs\loja\view\login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fa59325880928_11243782',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1617284f9b75844238cad122021f3a3060959a67' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\view\\login.html',
      1 => 1604686628,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa59325880928_11243782 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['LOGADO']->value == true) {?>


<?php } else { ?>

<div style="padding: 5%;">
<section class="row" id="fazerlogin">

    <div class="col-md-1 text-center">   
        
    </div>
    <div class="col-md-4 login-banner"></div>

    <form class="col-md-5" name="cliente_login" method="post" action="" >
    
        <div class="col-md-4 text-center">   
        
        </div>
     
        <!---  aqui estão os campos -->
        <div class="col-md-8">

     
            <div class="form-group"> 
                <label style="color: #01A185;"> Email: </label>
                <input type="email"  class="form-control " name="txt_email" value="" placeholder="Digite seu email" required autocomplete="off" style="color: #01A185; border-color: #01ca95;">        

            </div>


            <div class="form-group"> 
                 <label style="color: #01A185;"> Senha: </label>
                 <input type="password"  class="form-control " name="txt_senha" value="" placeholder="Digite sua senha" required style="color: #01A185; border-color: #01ca95;">        
           
            </div>


            <div class="form-group"> 
                
                <button class="btn btn-geral btn-block btn-lg btn-login"><i class="glyphicon glyphicon-log-in"></i> Entrar </button>
          
                
                
                
            </div>
            <div class="form-group" style="display:flex; justify-content: space-between;"> 
                
                <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CADASTRO']->value;?>
" class="btn btn-default " style="color: #01A185; border-color: #01ca95;" ><i class="glyphicon glyphicon-pencil"></i> Me Cadastrar</a>
             
                
                <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_RECOVERY']->value;?>
" class="btn btn-default " style="color: #01A185; border-color: #01ca95;"><i class="glyphicon glyphicon-question-sign"></i> Esqueci a Senha</a>
           
                
                
            </div>

            
        </div><!-- fim dos campos -->

    
    </form>
    
    
</section>
</div>
<?php }?>


<?php }
}
