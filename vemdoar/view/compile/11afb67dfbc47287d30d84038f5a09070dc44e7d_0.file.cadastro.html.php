<?php
/* Smarty version 3.1.36, created on 2020-11-13 14:36:54
  from 'C:\xampp\htdocs\loja\view\cadastro.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5faeb62673cef0_57510450',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11afb67dfbc47287d30d84038f5a09070dc44e7d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\view\\cadastro.html',
      1 => 1605285414,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5faeb62673cef0_57510450 (Smarty_Internal_Template $_smarty_tpl) {
?><div style="padding: 2.45% 5%;">
    <h2 style="color: #00BFA6; font-weight: 600; font-size: 2.8rem;">Cadastro de cliente</h2>
    <!--- dados do cadastro -->

    <hr>

    <form name="cadcliente" id="cadcliente" method="post" action="">

        <section class="row" id="cadastro">

            <div class="col-md-4">

                <label style="color: #01A185;">Nome:</label>

                <input style="color: #01A185; border-color: #01ca95;" type="text" name="cli_nome" class="form-control" minlength="3" required>

            </div>

            <div class="col-md-4">

                <label style="color: #01A185;">Sobrenome:</label>

                <input style="color: #01A185; border-color: #01ca95;" type="text" name="cli_sobrenome" class="form-control" minlength="3" required>

            </div>

        
            <div class="col-md-4">

                <label style="color: #01A185;">Celular:</label>

                <input style="color: #01A185; border-color: #01ca95;" type="number" name="cli_celular" class="form-control" placeholder="xxyyaaaaabbbb" required>
                <br>
            </div>



            <div class="col-md-4">

                <label style="color: #01A185;">Cidade:</label>

                <input style="color: #01A185; border-color: #01ca95;" type="text" name="cli_cidade" class="form-control" minlength="3" required>

            </div>


            <div class="col-md-4">

                <label style="color: #01A185;">UF:</label>

                <input style="color: #01A185; border-color: #01ca95;" type="text" name="cli_uf" class="form-control" maxlength="2" minlength="2" required>

            </div>

            

            <div class="col-md-4">

                <label style="color: #01A185;">Email:</label>

                <input style="color: #01A185; border-color: #01ca95;" type="email" name="cli_email" class="form-control" placeholder="xxxxxxx@gmail.com" required>
                <br>

            </div>
            <div class="col-md-4">
            </div>
            <div class="col-md-4">

                <label style="color: #01A185;">Senha:</label>

                <input style="color: #01A185; border-color: #01ca95;" type="password" name="cli_pass" class="form-control" required>

            </div>
            <div class="col-md-4">
            </div>
        </section>

        <br>
        <br>

        <section class="row" id="btngravar">

            <div class="col-md-4"></div>
            <div class="col-md-4">
                <button type="submit" class="btn btn-info btn-block" style="background-color: #f3c500; border: 0; font-weight: 700; font-size: 1.8rem;">

                    <i class="glyphicon glyphicon-ok"></i>

                    Gravar

                </button>

            </div>
            <div class="col-md-4"></div>

        </section>

    </form>
</div><?php }
}
