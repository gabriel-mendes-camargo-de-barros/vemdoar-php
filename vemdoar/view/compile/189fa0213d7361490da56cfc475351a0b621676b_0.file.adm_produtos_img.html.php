<?php
/* Smarty version 3.1.36, created on 2020-10-28 11:32:53
  from 'C:\xampp\htdocs\loja\view\adm_produtos_img.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f997305cb9c73_84019294',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '189fa0213d7361490da56cfc475351a0b621676b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\view\\adm_produtos_img.html',
      1 => 1602432746,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f997305cb9c73_84019294 (Smarty_Internal_Template $_smarty_tpl) {
?><div style="padding: 5%;>
    <h4 class="text-center"> Imagens do produto</h4>
    <hr>
    
    <!--- formulario de envio da foto -->
    <section class="row" id="novaimg">
        
        <form name="nova" method="post" action=""  enctype="multipart/form-data">
    
            <div class="col-md-4"></div>
    
            <div class="col-md-4">
    
                <input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value;?>
">
    
                <input type="file" name="pro_img"  class="form-control"  required>
                <br>
    
                
    
            </div>
            <div class="col-md-4">
                <button class="btn btn-success "> Enviar </button> 
    
    
            </div>
                
                
        </form> 
        
    </section>
    
    <hr>
    
    <!-- listando as imagens que existem no produto-->
    <section class="row" id="listarimg">
        
        <!-- formulario de apagar a foto ou varias -->
        <form name="deletar" method="post" action="">
          
        
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
    
                              <label>Apagar?</label> 
                              <input type="checkbox" class=" input-lg" name="fotos_apagar[]" value="<?php echo $_smarty_tpl->tpl_vars['I']->value['img_arquivo'];?>
">   
                          
                         
                          </li>
    
                          
                          
                          
                      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                      
                          <input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['I']->value['img_pro_id'];?>
">
                  </ul>
        
                  
                    <!--- botao de apagar fotos -->
                    <br>
                  <section class="col-md-12 text-center" id="apagar">
                    <hr>
                    
                      <button class="btn btn-danger"> Apagar Marcadas </button>
                      
                      
                  </section>
                  <br>
                  <br>
                  <br>
                  
                  
        </form>
    </section>
                  <section>
                      
                      <br>
                      <br>
                      <br>
                      <br>
                  </section>      
                  </div><?php }
}
