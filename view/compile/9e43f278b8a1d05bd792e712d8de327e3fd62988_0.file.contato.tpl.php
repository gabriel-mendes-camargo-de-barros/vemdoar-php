<?php
/* Smarty version 3.1.36, created on 2020-08-19 23:21:22
  from 'C:\xampp\htdocs\vemdoar\view\contato.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f3d97d2ad3c71_02357505',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e43f278b8a1d05bd792e712d8de327e3fd62988' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vemdoar\\view\\contato.tpl',
      1 => 1597872074,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f3d97d2ad3c71_02357505 (Smarty_Internal_Template $_smarty_tpl) {
?>	<div class="contact main-grid-border">
		<div class="container">
			<h2 class="head text-center">Entrar em Contato</h2>
			<section id="hire">
				<form id="filldetails" class="submit" action="envio" >
					<div class="field name-box">
						<input type="text" id="name" placeholder="Quem é você?" />
						<label for="name">Nome</label>
						<span class="ss-icon">check</span>
					</div>

					<div class="field email-box">
						<input type="text" id="email" placeholder="example@email.com" name="email" />
						<label for="email">Email</label>
						<span class="ss-icon">check</span>
					</div>

					<!-- <div class="field ad-ID">
						<input type="text" id="email" placeholder="Ad ID" />
						<label for="email">Ad ID</label>
						<span class="ss-icon">check</span>
					</div> -->

					<div class="field phonenum-box">
						<input type="text" id="email" placeholder="Seu número" />
						<label for="email">Whatsapp</label>
						<span class="ss-icon">check</span>
					</div>

					<div class="field msg-box">
						<textarea id="msg" name="msg" rows="4" placeholder="Digite sua mensagem aqui." /></textarea>
						<label for="msg">sua Msg</label>
						<span class="ss-icon">check</span>
					</div>

						<h3 class="tlt">Adicionar Anexo:</h3>
						<input class="button" type="file" accept="image/png, image/jpeg, image/jpg, image/jfif"/>
						<input class="button" type="submit" value="Enviar" />	
				</form>
				<div class="upload">
					<!-- JavaScript Includes -->
					<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
tema/js/jquery.knob.js"><?php echo '</script'; ?>
>

					<!-- jQuery File Upload Dependencies -->
					<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
tema/js/jquery.ui.widget.js"><?php echo '</script'; ?>
>
					<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
tema/js/jquery.fileupload.js"><?php echo '</script'; ?>
>

					<!-- Our main JS file -->
					<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
tema/js/script.js"><?php echo '</script'; ?>
>
				</div>
			</section>
			<?php echo '<script'; ?>
>
				$('textarea').blur(function () {
					$('#hire textarea').each(function () {
						$this = $(this);
						if (this.value != '') {
							$this.addClass('focused');
							$('textarea + label + span').css({ 'opacity': 1 });
						} else {
							$this.removeClass('focused');
							$('textarea + label + span').css({ 'opacity': 0 });
						}
					});
				});
				$('#hire .field:first-child input').blur(function () {
					$('#hire .field:first-child input').each(function () {
						$this = $(this);
						if (this.value != '') {
							$this.addClass('focused');
							$('.field:first-child input + label + span').css({ 'opacity': 1 });
						} else {
							$this.removeClass('focused');
							$('.field:first-child input + label + span').css({ 'opacity': 0 });
						}
					});
				});
				$('#hire .field:nth-child(2) input').blur(function () {
					$('#hire .field:nth-child(2) input').each(function () {
						$this = $(this);
						if (this.value != '') {
							$this.addClass('focused');
							$('.field:nth-child(2) input + label + span').css({ 'opacity': 1 });
						} else {
							$this.removeClass('focused');
							$('.field:nth-child(2) input + label + span').css({ 'opacity': 0 });
						}
					});
				});
				$('#hire .field:nth-child(3) input').blur(function () {
					$('#hire .field:nth-child(3) input').each(function () {
						$this = $(this);
						if (this.value != '') {
							$this.addClass('focused');
							$('.field:nth-child(3) input + label + span').css({ 'opacity': 1 });
						} else {
							$this.removeClass('focused');
							$('.field:nth-child(3) input + label + span').css({ 'opacity': 0 });
						}
					});
				});
				$('#hire .field:nth-child(4) input').blur(function () {
					$('#hire .field:nth-child(4) input').each(function () {
						$this = $(this);
						if (this.value != '') {
							$this.addClass('focused');
							$('.field:nth-child(4) input + label + span').css({ 'opacity': 1 });
						} else {
							$this.removeClass('focused');
							$('.field:nth-child(4) input + label + span').css({ 'opacity': 0 });
						}
					});
				});
		  //@ sourceURL=pen.js
			<?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
>
				if (document.location.search.match(/type=embed/gi)) {
					window.parent.postMessage("resize", "*");
				}
			<?php echo '</script'; ?>
>
		</div>
	</div><?php }
}
