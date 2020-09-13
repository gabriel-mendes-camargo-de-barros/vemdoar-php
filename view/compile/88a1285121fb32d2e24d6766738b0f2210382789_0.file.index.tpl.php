<?php
/* Smarty version 3.1.36, created on 2020-07-25 00:00:31
  from 'C:\xampp\htdocs\loja\view\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f1b59ff8f2974_52196733',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88a1285121fb32d2e24d6766738b0f2210382789' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\view\\index.tpl',
      1 => 1595628030,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f1b59ff8f2974_52196733 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML>
<!--
	Transitive by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>VemDoar - Doações de produtos</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
tema/css/main.css" />
	</head>
	<body>

		<!-- Header -->
			<header id="header" class="alt">
				<div class="logo"><a href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
index.html"><img width="40px" height="40px" src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
images/VemDoar.png" alt="logodosite"> Vem <span>Doar</span></a></div>
				<a href="#menu" class="toggle"><span>Menu</span></a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['GET_HOME']->value;?>
">Home</a></li>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_MINHACONTA']->value;?>
">Minha Conta</a></li>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO']->value;?>
">Carrinho</a></li>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CONTATO']->value;?>
">Contato</a></li>
					<!--<li><a href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
cadastro.html">Cadastro</a></li>-->
				</ul>
			</nav>

		<!-- Banner -->
		<!--
			To use a video as your background, set data-video to the name of your video without
			its extension (eg. images/banner). Your video must be available in both .mp4 and .webm
			formats to work correctly.
		-->
			<section id="banner" data-video="images/banner">
				<div class="inner">
					<h1>Transitive</h1>
					<p>A full responsive, business-oriented HTML5/CSS3 template<br />
					built by <a href="https://templated.co/">Templated</a> and released under the <a href="https://templated.co/license">Creative Commons</a>.</p>
					<a href="#one" class="button special scrolly">Get Started</a>
				</div>
			</section> 

		<!-- One -->
			<section id="one" class="wrapper style2">
				<div class="inner">
					<div class="box">
						<div class="image fit">
							<img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
images/pic01.jpg" alt="" />
						</div>
						<div class="content">
							<header class="align-center">
								<h2></h2>
								<p></p>
							</header>
							<hr />
							<p></p>
						</div>
					</div>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style3">
				
			</section>

		<!-- Three -->
			<?php 
			Rotas::get_Pagina();
			?>
			<!--<section id="three" class="wrapper style2">
				<div class="inner">
					<div class="grid-style">

						<div>
							<div class="box">
								<div class="image fit">
									<img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
images/pic02.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<h2></h2>
										<p>aqui está um exemplo </p>
									</header>
									<hr />
									<p></p>
								</div>
							</div>
						</div>

						<div>
							<div class="box">
								<div class="image fit">
									<img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
images/pic03.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<h2></h2>
										<p></p>
									</header>
									<hr />
									<p></p>
								</div>
							</div>
						</div>

						<div>
							<div class="box">
								<div class="image fit">
									<img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
images/pic02.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<h2></h2>
										<p></p>
									</header>
									<hr />
									<p></p>
								</div>
							</div>
						</div>

						<div>
							<div class="box">
								<div class="image fit">
									<img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
images/pic03.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<h2></h2>
										<p></p>
									</header>
									<hr />
									<p></p>
								</div>
							</div>
						</div>

						<div>
							<div class="box">
								<div class="image fit">
									<img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
images/pic02.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<h2></h2>
										<p></p>
									</header>
									<hr />
									<p></p>
								</div>
							</div>
						</div>

						<div>
							<div class="box">
								<div class="image fit">
									<img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
images/pic03.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<h2></h2>
										<p></p>
									</header>
									<hr />
									<p></p>
								</div>
							</div>
						</div>

						<div>
							<div class="box">
								<div class="image fit">
									<img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
images/pic02.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<h2></h2>
										<p></p>
									</header>
									<hr />
									<p></p>
								</div>
							</div>
						</div>

						<div>
							<div class="box">
								<div class="image fit">
									<img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
images/pic03.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<h2></h2>
										<p></p>
									</header>
									<hr />
									<p></p>
								</div>
							</div>
						</div>

					</div>
				</div>
			</section>-->

		<!-- Four -->
			<section id="four" class="wrapper style3">
				<div class="inner">

					<header class="align-center">
						<h2>Morbi interdum mollis sapien</h2>
						<p>Cras aliquet urna ut sapien tincidunt, quis malesuada elit facilisis. Vestibulum sit amet tortor velit. Nam elementum nibh a libero pharetra elementum. Maecenas feugiat ex purus, quis volutpat lacus placerat malesuada. Praesent in sem ex. Morbi mattis sapien pretium tellus venenatis, at egestas urna ornare.</p>
					</header>

				</div>
			</section>

		<!-- Footer -->
			<footer id="footer" class="wrapper">
				<div class="inner">
					<div class="copyright">
						&copy; Untitled Design: <a href="https://templated.co/">TEMPLATED</a>. Images <a href="https://unsplash.com/">Unsplash</a>. Video <a href="http://coverr.co/">Coverr</a>.
					</div>
				</div>
			</footer>

		<!-- Scripts -->
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
tema/js/jquery.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
tema/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
tema/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
tema/js/skel.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
tema/js/util.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
tema/js/main.js"><?php echo '</script'; ?>
>

	</body>
</html><?php }
}
