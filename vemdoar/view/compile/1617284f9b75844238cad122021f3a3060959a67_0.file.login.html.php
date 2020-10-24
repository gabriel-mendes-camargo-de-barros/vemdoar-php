<?php
/* Smarty version 3.1.36, created on 2020-10-14 15:10:10
  from 'C:\xampp\htdocs\loja\view\login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f873f0241b8d9_32838435',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1617284f9b75844238cad122021f3a3060959a67' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\view\\login.html',
      1 => 1602699007,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f873f0241b8d9_32838435 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['LOGADO']->value == true) {?>


<?php } else { ?>

<div style="padding: 5%;">
    <section>
        <div id="page-wrapper" class="sign-in-wrapper">
            <div class="graphs">
                <div class="sign-in-form">
                    <div class="sign-in-form-top">
                        <h1>Log in</h1>
                    </div>
                    <div class="signin">
                        <div class="signin-rit">
                            <span class="checkbox1">
                                 <label class="checkbox"><input type="checkbox" name="checkbox" checked="">Forgot Password ?</label>
                            </span>
                            <a href="#">Click Here</a>
                            <div class="clearfix"> </div>
                        </div>
                        <form>
                        <div class="log-input">
                            <div class="log-input-left">
                               <input type="text" name="txt_email" placeholder="Email" value="" />
                            </div>
                            <span class="checkbox2">
                                 <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i></label>
                            </span>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="log-input">
                            <div class="log-input-left">
                               <input type="password" class="lock" placeholder="Senha" value="" />
                            </div>
                            <span class="checkbox2">
                                 <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i></label>
                            </span>
                            <div class="clearfix"> </div>
                        </div>
                        <input type="submit" value="Log in">
                        </form>	 
                    </div>
                    <div class="new_people">
                        
                        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CADASTRO']->value;?>
">Cadastre-se</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--     
<section class="row" id="fazerlogin">

    <form name="cliente_login" method="post" action="" >
    
        <div class="col-md-4 text-center">
        
        </div>
     
          aqui estão os campos ---
        <div class="col-md-4">

     
            <div class="form-group"> 
                <label></i> Email: </label>
                <input type="email"  class="form-control " name="txt_email" value="" placeholder="Digite seu email" required autocomplete="off">        

            </div>


            <div class="form-group"> 
                 <label> Senha: </label>
                 <input type="password"  class="form-control " name="txt_senha" value="" placeholder="Digite sua senha" required>        
           
            </div>


            <div class="form-group"> 
                
                <button class="btn btn-geral btn-block btn-lg"><i class="glyphicon glyphicon-log-in"></i> Entrar </button>
          
                
                
                
            </div>
            <div class="form-group"> 
                
                <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CADASTRO']->value;?>
" class="btn btn-default "><i class="glyphicon glyphicon-pencil"></i> Me Cadastrar</a>
             
                
                <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_RECOVERY']->value;?>
" class="btn btn-default "><i class="glyphicon glyphicon-question-sign"></i> Esqueci a Senha</a>
           
                
                
            </div>

            
        </div><-- fim dos campos --


        <div class="col-md-4 text-center"> 
        
      
        </div>
    
    </form>
    
    
</section> -->
</div>
<?php }?>


<?php }
}
