<?php
/* Smarty version 3.1.36, created on 2020-09-13 03:21:38
  from 'C:\xampp\htdocs\vemdoar\view\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f5d7422f1f657_48704932',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '041b490207e3b67fb131e310abc59b1b4dc7f1fe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vemdoar\\view\\index.html',
      1 => 1599960095,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f5d7422f1f657_48704932 (Smarty_Internal_Template $_smarty_tpl) {
?><!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<head>
	<title><?php echo $_smarty_tpl->tpl_vars['TITULO_SITE']->value;?>
</title>
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
tema/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
tema/css/bootstrap-select.css">
	<link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
tema/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
tema/css/flexslider.css" type="text/css" media="screen" />
	<!--<link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
tema/contatos/contatos.css" rel="stylesheet" type="text/css"/>-->
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
tema/css/font-awesome.min.css" />
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Resale Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
	<?php echo '<script'; ?>

		type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } <?php echo '</script'; ?>
>
	<!-- //for-mobile-apps -->
	<!--fonts-->
	<link href='//fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
	<link
		href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic'
		rel='stylesheet' type='text/css'>
	<!--//fonts-->
	<!-- js -->
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
tema/js/jquery.min.js"><?php echo '</script'; ?>
>
	<!-- js -->
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
tema/js/bootstrap.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
tema//contatos/contatos.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
tema/js/bootstrap-select.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
>
		$(document).ready(function () {
			var mySelect = $('#first-disabled2');

			$('#special').on('click', function () {
				mySelect.find('option:selected').prop('disabled', true);
				mySelect.selectpicker('refresh');
			});

			$('#special2').on('click', function () {
				mySelect.find('option:disabled').prop('disabled', false);
				mySelect.selectpicker('refresh');
			});

			$('#basic2').selectpicker({
				liveSearch: true,
				maxOptions: 1
			});
		});
	<?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
tema/js/jquery.leanModal.min.js"><?php echo '</script'; ?>
>
	<link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
tema/css/jquery.uls.css" rel="stylesheet" />
	<link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
tema/css/jquery.uls.grid.css" rel="stylesheet" />
	<link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
tema/css/jquery.uls.lcd.css" rel="stylesheet" />
	<!-- Source -->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
tema/js/jquery.uls.data.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
tema/js/jquery.uls.data.utils.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
tema/js/jquery.uls.lcd.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
tema/js/jquery.uls.languagefilter.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
tema/js/jquery.uls.regionfilter.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
tema/js/jquery.uls.core.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
>
		$(document).ready(function () {
			$('.uls-trigger').uls({
				onSelect: function (language) {
					var languageName = $.uls.data.getAutonym(language);
					$('.uls-trigger').text(languageName);
				},
				quickList: ['en', 'hi', 'he', 'ml', 'ta', 'fr'] //FIXME
			});
		});
	<?php echo '</script'; ?>
>
</head>

<body>
	<div class="header">
		<div class="container">
			<div class="logo">
				<a href="<?php echo $_smarty_tpl->tpl_vars['GET_HOME']->value;?>
"><span>Vem</span>Doar</a>
			</div>
			<div class="header-right">
				<a class="account" href="<?php echo $_smarty_tpl->tpl_vars['PAG_MINHACONTA']->value;?>
">Login</a>
				<a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['PAG_CONTATO']->value;?>
">Contato</a>
				<a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTOS']->value;?>
">Produtos</a>
				<!-- Large modal -->
				<!-- <div class="selectregion">
				<button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
				Selecione Sua Região</button>
					<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
					aria-hidden="true">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
										&times;</button>
									<h4 class="modal-title" id="myModalLabel">
										Diga sua localização</h4>
								</div>
								<div class="modal-body">
									 <form class="form-horizontal" role="form">
										<div class="form-group">
												<select name="uf" required="required">
													<option value="">Selecione o Estado</option>
												</select>
												<input type="hidden" name="state">
												<select name="city" disabled="disabled" required="required">
													<option value="">Selecione a Cidade</option>
												</select>
												<input type="hidden" name="city">
										</div>
									  </form>    
								</div>
							</div> 
						</div>
					</div>
				<?php echo '<script'; ?>
>
				$('#myModal').modal('');
				<?php echo '</script'; ?>
>
			</div>-->
			</div>
		</div>
	</div>
	<div class="main-banner banner text-center">
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
			<a href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
post-ad.html">Anúnciar</a>
		</div>
	</div>
	<div class="content">
		<div class="categories">
			<div class="container">
				<div class="col-md-3 focus-grid">
					<a href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
categories.html">
						<div class="focus-border">
							<div class="focus-layout">
								<div class="focus-image"><i class="fa fa-laptop"></i></div>
								<h4 class="clrchg">Eletrônicos</h4>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3 focus-grid">
					<a href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
categories.html#parentVerticalTab2">
						<div class="focus-border">
							<div class="focus-layout">
								<div class="focus-image"><i class="fa fa-home"></i></div>
								<h4 class="clrchg"> Elétrodomésticos</h4>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3 focus-grid">
					<a href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
categories.html#parentVerticalTab3">
						<div class="focus-border">
							<div class="focus-layout">
								<div class="focus-image"><i class="fa fa-car"></i></div>
								<h4 class="clrchg">Carros</h4>
							</div>
						</div>
					</a>
				</div>
				<!-- <div class="col-md-2 focus-grid">
						<a href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
categories.html#parentVerticalTab4">
							<div class="focus-border">
								<div class="focus-layout">
									<div class="focus-image"><i class="fa fa-motorcycle"></i></div>
									<h4 class="clrchg">Bikes</h4>
								</div>
							</div>
						</a>
					</div>	 -->
				<div class="col-md-3 focus-grid">
					<a href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
categories.html#parentVerticalTab5">
						<div class="focus-border">
							<div class="focus-layout">
								<div class="focus-image"><i class="fa fa-wheelchair"></i></div>
								<h4 class="clrchg">Móveis</h4>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3 focus-grid">
					<a href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
categories.html#parentVerticalTab6">
						<div class="focus-border">
							<div class="focus-layout">
								<div class="focus-image"><i class="fa fa-paw"></i></div>
								<h4 class="clrchg">Animais</h4>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3 focus-grid">
					<a href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
categories.html#parentVerticalTab7">
						<div class="focus-border">
							<div class="focus-layout">
								<div class="focus-image"><i class="fa fa-book"></i></div>
								<h4 class="clrchg">Livros, Esportes & Hobbies</h4>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3 focus-grid">
					<a href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
categories.html#parentVerticalTab8">
						<div class="focus-border">
							<div class="focus-layout">
								<div class="focus-image"><i class="fa fa-asterisk"></i></div>
								<h4 class="clrchg">Roupas</h4>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3 focus-grid">
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
				<!-- <div class="col-md-2 focus-grid">
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
		</div>
		<!-- content-starts-here -->
		<?php 
			Rotas::get_Pagina();
		?>
		<!-- Como funciona -->
		<div class="work-section">
			<div class="container">
				<h2 class="head">Como Funciona?</h2>
				<div class="work-section-head text-center">
					<p>Rápido, fácil e livre para postar um anúncio e você vai encontrar o que você está procurando.</p>
				</div>
				<div class="work-section-grids text-center">
					<div class="col-md-3 work-section-grid">
						<i class="fa fa-pencil-square-o"></i>
						<h4>Faça Um Anúncio</h4>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
							been</p>
						<span class="arrow1"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
images/arrow1.png" alt="" /></span>
					</div>
					<div class="col-md-3 work-section-grid">
						<i class="fa fa-eye"></i>
						<h4>Encontre Um Item</h4>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
							been</p>
						<span class="arrow2"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
images/arrow2.png" alt="" /></span>
					</div>
					<div class="col-md-3 work-section-grid">
						<i class="fa fa-phone"></i>
						<h4>Entre Em Contato Com O Anunciante</h4>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
							been</p>
						<span class="arrow1"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
images/arrow1.png" alt="" /></span>
					</div>
					<div class="col-md-3 work-section-grid">
						<i class="fa fa-money"></i>
						<h4>Atenção</h4>
						<p>Não nos responsabilizamos pela negociação ou pelo transporte.</p>
					</div>
					<div class="clearfix"></div>
					<!-- <a class="work" href="#">Get start Now</a> -->
				</div>
			</div>
		</div>
		<div class="mobile-app">
			<div class="container">
				<div class="col-md-5 app-left">
					<a href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
mobileapp.html"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
images/app.png" alt=""></a>
				</div>
				<div class="col-md-7 app-right">
					<h3>Sobre nós</h3>
					<p>
						VemDoar é uma Organização Não Governamental, onde os usuários poderão expor seus objetos que
						ainda estejam em boas condições de uso, ao alcance de pessoas interessadas tanto em “adota-los”
						quanto em troca-los; também é um meio de facilitar a vida de pessoas que estão precisando de
						ajuda, mas não sabem aonde recorrer. Como o site está focado totalmente nos usuários o acesso a
						ele é realmente muito fácil, além de ter total comodidade durante o manuseio, o que facilita
						mesmo para os menos experientesno uso da área da informática.
					</p>
					<!-- <div class="app-buttons">
							<div class="app-button">
								<a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
images/1.png" alt=""></a>
							</div>
							<div class="app-button">
								<a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
images/2.png" alt=""></a>
							</div>
							<div class="clearfix"> </div>
						</div> -->
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="trending-ads">
			<div class="container">
				<!-- slider -->
				<div class="trend-ads">
					<h2>Anúncios Recentes</h2>
					<ul id="flexiselDemo3">
						<!-- forreach
						<div class="col-md-3 biseller-column">
							<a href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
single.html">
								<img src="images/PRO_IMG.jpg" />
								<span class="price">&#36; 450</span>
							</a>
							<div class="ad-info">
								<h5>There are many variations of passages</h5>
								<span>1 hour ago</span>
							</div>
						</div>
						endForeach -->
						<li>
							<div class="col-md-3 biseller-column">
								<a href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
single.html">
									<img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
images/p1.jpg" />
									<span class="price">&#36; 450</span>
								</a>
								<div class="ad-info">
									<h5>There are many variations of passages</h5>
									<span>1 hour ago</span>
								</div>
							</div>
							<div class="col-md-3 biseller-column">
								<a href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
single.html">
									<img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
images/p2.jpg" />
									<span class="price">&#36; 399</span>
								</a>
								<div class="ad-info">
									<h5>Lorem Ipsum is simply dummy</h5>
									<span>3 hour ago</span>
								</div>
							</div>
							<div class="col-md-3 biseller-column">
								<a href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
single.html">
									<img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
images/p3.jpg" />
									<span class="price">&#36; 199</span>
								</a>
								<div class="ad-info">
									<h5>It is a long established fact that a reader</h5>
									<span>8 hour ago</span>
								</div>
							</div>
							<div class="col-md-3 biseller-column">
								<a href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
single.html">
									<img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
images/p4.jpg" />
									<span class="price">&#36; 159</span>
								</a>
								<div class="ad-info">
									<h5>passage of Lorem Ipsum you need to be</h5>
									<span>19 hour ago</span>
								</div>
							</div>
						</li>
						<li>
							<div class="col-md-3 biseller-column">
								<a href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
single.html">
									<img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
images/p5.jpg" />
									<span class="price">&#36; 1599</span>
								</a>
								<div class="ad-info">
									<h5>There are many variations of passages</h5>
									<span>1 hour ago</span>
								</div>
							</div>
							<div class="col-md-3 biseller-column">
								<a href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
single.html">
									<img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
images/p6.jpg" />
									<span class="price">&#36; 1099</span>
								</a>
								<div class="ad-info">
									<h5>passage of Lorem Ipsum you need to be</h5>
									<span>1 day ago</span>
								</div>
							</div>
							<div class="col-md-3 biseller-column">
								<a href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
single.html">
									<img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
images/p7.jpg" />
									<span class="price">&#36; 109</span>
								</a>
								<div class="ad-info">
									<h5>It is a long established fact that a reader</h5>
									<span>9 hour ago</span>
								</div>
							</div>
							<div class="col-md-3 biseller-column">
								<a href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
single.html">
									<img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
images/p8.jpg" />
									<span class="price">&#36; 189</span>
								</a>
								<div class="ad-info">
									<h5>Lorem Ipsum is simply dummy</h5>
									<span>3 hour ago</span>
								</div>
							</div>
						</li>
						<li>
							<div class="col-md-3 biseller-column">
								<a href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
single.html">
									<img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
images/p9.jpg" />
									<span class="price">&#36; 2599</span>
								</a>
								<div class="ad-info">
									<h5>Lorem Ipsum is simply dummy</h5>
									<span>3 hour ago</span>
								</div>
							</div>
							<div class="col-md-3 biseller-column">
								<a href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
single.html">
									<img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
images/p10.jpg" />
									<span class="price">&#36; 3999</span>
								</a>
								<div class="ad-info">
									<h5>It is a long established fact that a reader</h5>
									<span>9 hour ago</span>
								</div>
							</div>
							<div class="col-md-3 biseller-column">
								<a href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
single.html">
									<img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
images/p11.jpg" />
									<span class="price">&#36; 2699</span>
								</a>
								<div class="ad-info">
									<h5>passage of Lorem Ipsum you need to be</h5>
									<span>1 day ago</span>
								</div>
							</div>
							<div class="col-md-3 biseller-column">
								<a href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
single.html">
									<img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
images/p12.jpg" />
									<span class="price">&#36; 899</span>
								</a>
								<div class="ad-info">
									<h5>There are many variations of passages</h5>
									<span>1 hour ago</span>
								</div>
							</div>
						</li>
					</ul>
					<?php echo '<script'; ?>
 type="text/javascript">
						$(window).load(function () {
							$("#flexiselDemo3").flexisel({
								visibleItems: 1,
								animationSpeed: 1000,
								autoPlay: true,
								autoPlaySpeed: 5000,
								pauseOnHover: true,
								enableResponsiveBreakpoints: true,
								responsiveBreakpoints: {
									portrait: {
										changePoint: 480,
										visibleItems: 1
									},
									landscape: {
										changePoint: 640,
										visibleItems: 1
									},
									tablet: {
										changePoint: 768,
										visibleItems: 1
									}
								}
							});

						});
					<?php echo '</script'; ?>
>
					<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
tema/js/jquery.flexisel.js"><?php echo '</script'; ?>
>
				</div>
			</div>
			<!-- //slider -->
		</div>
	</div>
	<!--footer section start-->
	<footer>
		<!-- <div class="footer-top">
				<div class="container">
					<div class="foo-grids">
						<! -- <div class="col-md-3 footer-grid">
							<h4 class="footer-head">Who We Are</h4>
							<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
							<p>The point of using Lorem Ipsum is that it has a more-or-less normal letters, as opposed to using 'Content here.</p>
						</div> -- >
						<div class="col-md-3 footer-grid">
							<h4 class="footer-head">Help</h4>
							<ul>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
howitworks.html">How it Works</a></li>						
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
sitemap.html">Sitemap</a></li>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
faq.html">Faq</a></li>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
feedback.html">Feedback</a></li>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
contact.html">Contact</a></li>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
typography.html">Shortcodes</a></li>
							</ul>
						</div>
						<div class="col-md-3 footer-grid">
							<h4 class="footer-head">Information</h4>
							<ul>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
regions.html">Locations Map</a></li>	
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
terms.html">Terms of Use</a></li>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
popular-search.html">Popular searches</a></li>	
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
privacy.html">Privacy Policy</a></li>	
							</ul>
						</div>
						<div class="clearfix"></div>
					</div>						
				</div>	
			</div>	 -->
		<div class="footer-bottom text-center">
			<div class="container">
				<div class="footer-logo">
					<a href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
index.html"><span>Vem</span>Doar</a>
				</div>
				<div class="footer-social-icons">
					<ul>
						<li><a class="facebook" href="#"><span>Facebook</span></a></li>
						<li><a class="twitter" href="#"><span>Twitter</span></a></li>
						<li><a class="flickr" href="#"><span>Flickr</span></a></li>
						<li><a class="googleplus" href="#"><span>Google+</span></a></li>
						<li><a class="dribbble" href="#"><span>Dribbble</span></a></li>
					</ul>
				</div>
				<div class="copyrights">
					<p> © 2020 <?php echo $_smarty_tpl->tpl_vars['TITULO_SITE']->value;?>
. Todos os Direitos Reservados | Design por <a
							href="http://w3layouts.com/"> W3layouts</a></p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</footer>
	<!--footer section end-->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
tema/js/select-region.js"><?php echo '</script'; ?>
>
</body>

</html><?php }
}
