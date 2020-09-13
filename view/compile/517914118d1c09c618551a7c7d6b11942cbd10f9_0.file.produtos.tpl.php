<?php
/* Smarty version 3.1.36, created on 2020-09-10 02:06:54
  from 'C:\xampp\htdocs\vemdoar\view\produtos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f596e1e7e1d02_79494678',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '517914118d1c09c618551a7c7d6b11942cbd10f9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vemdoar\\view\\produtos.tpl',
      1 => 1599696409,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f596e1e7e1d02_79494678 (Smarty_Internal_Template $_smarty_tpl) {
?><html><head>
	<title>Resale a Business Category Flat Bootstrap Responsive Website Template | All Classifieds :: w3layouts</title>
	<link rel="stylesheet" href="tema/css/bootstrap.min.css">
	<link rel="stylesheet" href="tema/css/bootstrap-select.css">
	<link href="tema/css/style.css" rel="stylesheet" type="text/css" media="all">
	<link rel="stylesheet" type="text/css" href="tema/css/jquery-ui1.css">
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="keywords" content="Resale Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design">
	<?php echo '<script'; ?>
 type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } <?php echo '</script'; ?>
>
	<!-- //for-mobile-apps -->
	<!--fonts-->
	<link href="//fonts.googleapis.com/css?family=Ubuntu+Condensed" rel="stylesheet" type="text/css">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic" rel="stylesheet" type="text/css">
	<!--//fonts-->	
	<!-- js -->
	<?php echo '<script'; ?>
 type="text/javascript" src="js/jquery.min.js"><?php echo '</script'; ?>
>
	<!-- js -->
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/bootstrap-select.js"><?php echo '</script'; ?>
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
 type="text/javascript" src="js/jquery.leanModal.min.js"><?php echo '</script'; ?>
>
	<link href="css/jquery.uls.css" rel="stylesheet">
	<link href="css/jquery.uls.grid.css" rel="stylesheet">
	<link href="css/jquery.uls.lcd.css" rel="stylesheet">
	<!-- Source -->
	<?php echo '<script'; ?>
 src="js/jquery.uls.data.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/jquery.uls.data.utils.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/jquery.uls.lcd.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/jquery.uls.languagefilter.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/jquery.uls.regionfilter.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/jquery.uls.core.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
>
				$( document ).ready( function() {
					$( '.uls-trigger' ).uls( {
						onSelect : function( language ) {
							var languageName = $.uls.data.getAutonym( language );
							$( '.uls-trigger' ).text( languageName );
						},
						quickList: ['en', 'hi', 'he', 'ml', 'ta', 'fr'] //FIXME
					} );
				} );
			<?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="js/tabs.js"><?php echo '</script'; ?>
>
		
	<?php echo '<script'; ?>
 type="text/javascript">
	$(document).ready(function () {    
	var elem=$('#container ul');      
		$('#viewcontrols a').on('click',function(e) {
			if ($(this).hasClass('gridview')) {
				elem.fadeOut(1000, function () {
					$('#container ul').removeClass('list').addClass('grid');
					$('#viewcontrols').removeClass('view-controls-list').addClass('view-controls-grid');
					$('#viewcontrols .gridview').addClass('active');
					$('#viewcontrols .listview').removeClass('active');
					elem.fadeIn(1000);
				});						
			}
			else if($(this).hasClass('listview')) {
				elem.fadeOut(1000, function () {
					$('#container ul').removeClass('grid').addClass('list');
					$('#viewcontrols').removeClass('view-controls-grid').addClass('view-controls-list');
					$('#viewcontrols .gridview').removeClass('active');
					$('#viewcontrols .listview').addClass('active');
					elem.fadeIn(1000);
				});									
			}
		});
	});
	<?php echo '</script'; ?>
>
	</head>
	<body>
	<div class="header">		
		<!-- Products -->
		<div class="total-ads main-grid-border">
			<div class="container">
				<div class="select-box">
					<div class="select-city-for-local-ads ads-list">
						<label>Select your city to see local ads</label>
							<select>
								    <optgroup label="Popular Cities">			
							</select>
					</div>
					<div class="browse-category ads-list">
						<label>Browse Categories</label>
						<div class="btn-group bootstrap-select show-tick"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" title="All"><span class="filter-option pull-left">All</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open"><div class="bs-searchbox"><input type="text" class="form-control" autocomplete="off"></div><ul class="dropdown-menu inner" role="menu"><li data-original-index="0" class="selected"><a tabindex="0" class="" style="" data-tokens="Mobiles"><span class="text">All</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" style="" data-tokens="Mobiles"><span class="text">Mobiles</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" style="" data-tokens="Electronics &amp; Appliances"><span class="text">Electronics &amp; Appliances</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="3"><a tabindex="0" class="" style="" data-tokens="Cars"><span class="text">Cars</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="4"><a tabindex="0" class="" style="" data-tokens="Bikes"><span class="text">Bikes</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="5"><a tabindex="0" class="" style="" data-tokens="Furniture"><span class="text">Furniture</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="6"><a tabindex="0" class="" style="" data-tokens="Pets"><span class="text">Pets</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="7"><a tabindex="0" class="" style="" data-tokens="Books, Sports &amp; Hobbies"><span class="text">Books, Sports &amp; Hobbies</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="8"><a tabindex="0" class="" style="" data-tokens="Fashion"><span class="text">Fashion</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="9"><a tabindex="0" class="" style="" data-tokens="Kids"><span class="text">Kids</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="10"><a tabindex="0" class="" style="" data-tokens="Services"><span class="text">Services</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="11"><a tabindex="0" class="" style="" data-tokens="Jobs"><span class="text">Jobs</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="12"><a tabindex="0" class="" style="" data-tokens="Real Estate"><span class="text">Real Estate</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="selectpicker show-tick" data-live-search="true" tabindex="-98">
						  <option data-tokens="Mobiles">All</option>
						  <option data-tokens="Mobiles">Mobiles</option>
						  <option data-tokens="Electronics &amp; Appliances">Electronics &amp; Appliances</option>
						  <option data-tokens="Cars">Cars</option>
						  <option data-tokens="Bikes">Bikes</option>
						  <option data-tokens="Furniture">Furniture</option>
						  <option data-tokens="Pets">Pets</option>
						  <option data-tokens="Books, Sports &amp; Hobbies">Books, Sports &amp; Hobbies</option>
						  <option data-tokens="Fashion">Fashion</option>
						  <option data-tokens="Kids">Kids</option>
						  <option data-tokens="Services">Services</option>
						  <option data-tokens="Jobs">Jobs</option>
						  <option data-tokens="Real Estate">Real Estate</option>
						</select></div>
					</div>
					<div class="search-product ads-list">
						<label>Search for a specific product</label>
						<div class="search">
							<div id="custom-search-input">
							<div class="input-group">
								<input type="text" class="form-control input-lg" placeholder="Buscar">
								<span class="input-group-btn">
									<button class="btn btn-info btn-lg" type="button">
										<i class="glyphicon glyphicon-search"></i>
									</button>
								</span>
							</div>
						</div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="all-categories">
					<h3> Select your category and find the perfect ad</h3>
					<ul class="all-cat-list">
						<li><a href="mobiles.html">Mobiles <span class="num-of-ads">(5,78,076)</span></a></li>
						<li><a href="electronics-appliances.html">Electronics &amp; Appliances  <span class="num-of-ads">(3,66,495)</span></a></li>
						<li><a href="real-estate.html">Real Estate  <span class="num-of-ads">(45,450)</span></a></li>
						<li><a href="furnitures.html">Furniture    <span class="num-of-ads">(1,77,145)</span></a></li>
						<li><a href="pets.html">Pets   <span class="num-of-ads">(1,81,250)</span></a></li>
						<li><a href="books-sports-hobbies.html">Books, Sports &amp; Hobbies    <span class="num-of-ads">(66,822)</span></a></li>
						<li><a href="fashion.html">Fashion   <span class="num-of-ads">(29,156)</span></a></li>
						<li><a href="kids.html">Kids   <span class="num-of-ads">(25,699)</span></a></li>
						<li><a href="services.html">Services   <span class="num-of-ads">(2,15,895)</span></a></li>
						<li><a href="cars.html">Cars   <span class="num-of-ads">(2,15,306)</span></a></li>
					</ul>
				</div>
				<ol class="breadcrumb" style="margin-bottom: 5px;">
				  <li><a href="index.html">Home</a></li>
				  <li class="active">All Ads</li>
				</ol>
				<div class="ads-grid">
					<div class="side-bar col-md-3">
						<div class="search-hotel">
						<h3 class="sear-head">Name contains</h3>
					</div>
					
					<div class="range">
						<h3 class="sear-head">Price range</h3>
								<ul class="dropdown-menu6">
									<li>
														
										<div id="slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header" style="left: 0.555556%; width: 66.1111%;"></div><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 0.555556%;"></a><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 66.6667%;"></a></div>							
											<input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;">
										</li>			
								</ul>
								<!---->
								<?php echo '<script'; ?>
 type="text/javascript" src="js/jquery-ui.js"><?php echo '</script'; ?>
>
								<?php echo '<script'; ?>
 type="text/javascript">//<![CDATA[ 
								$(window).load(function(){
								 $( "#slider-range" ).slider({
											range: true,
											min: 0,
											max: 9000,
											values: [ 50, 6000 ],
											slide: function( event, ui ) {  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
											}
								 });
								$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );
	
								});//]]>  
	
								<?php echo '</script'; ?>
>
								
					</div>
					<div class="featured-ads">
						<h2 class="sear-head fer">Featured Ads</h2>
						<div class="featured-ad">
							<a href="single.html">
								<div class="featured-ad-left">
									<img src="images/f1.jpg" title="ad image" alt="">
								</div>
								<div class="featured-ad-right">
									<h4>Lorem Ipsum is simply dummy text of the printing industry</h4>
									<p>$ 450</p>
								</div>
								<div class="clearfix"></div>
							</a>
						</div>
						<div class="featured-ad">
							<a href="single.html">
								<div class="featured-ad-left">
									<img src="images/f2.jpg" title="ad image" alt="">
								</div>
								<div class="featured-ad-right">
									<h4>Lorem Ipsum is simply dummy text of the printing industry</h4>
									<p>$ 380</p>
								</div>
								<div class="clearfix"></div>
							</a>
						</div>
						<div class="featured-ad">
							<a href="single.html">
								<div class="featured-ad-left">
									<img src="images/f3.jpg" title="ad image" alt="">
								</div>
								<div class="featured-ad-right">
									<h4>Lorem Ipsum is simply dummy text of the printing industry</h4>
									<p>$ 560</p>
								</div>
								<div class="clearfix"></div>
							</a>
						</div>
						<div class="clearfix"></div>
					</div>
					</div>
					<div class="ads-display col-md-9">
						<div class="wrapper">					
						<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
						  <ul id="myTab" class="nav nav-tabs nav-tabs-responsive" role="tablist">
							<li role="presentation" class="active">
							  <a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">
								<span class="text">All Ads</span>
							  </a>
							</li>
							<li role="presentation" class="next">
							  <a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">
								<span class="text">Ads with Photos</span>
							  </a>
							</li>
							<li role="presentation">
							  <a href="#samsa" role="tab" id="samsa-tab" data-toggle="tab" aria-controls="samsa">
								<span class="text">Company</span>
							  </a>
							</li>
						  </ul>
						  <div id="myTabContent" class="tab-content">
							<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
							   <div>
													<div id="container">
									<div class="view-controls-list" id="viewcontrols">
										<label>view :</label>
										<a class="gridview"><i class="glyphicon glyphicon-th"></i></a>
										<a class="listview active"><i class="glyphicon glyphicon-th-list"></i></a>
									</div>
									<div class="sort">
									   <div class="sort-by">
											<label>Sort By : </label>
											<select>
															<option value="">Most recent</option>
															<option value="">Price: Rs Low to High</option>
															<option value="">Price: Rs High to Low</option>
											</select>
										   </div>
										 </div>
									<div class="clearfix"></div>
								<ul class="list">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PROD']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
                                        <a href="single.html">
                                            <li>
                                                <img src="media/images/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" title="" alt="">
                                                <section class="list-left">
                                                    <h3><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</h3>
                                                    <h5 class="title"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_desc'];?>
</h5>
                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_MINHACONTA']->value;?>
" ><span class="adprice">Ver Mais</span></a>
                                                    <p class="catpath">Mobile Phones » Brand</p>
                                                </section>
                                                <section class="list-right">
                                                    <span class="date">Today, 17:55</span>
                                                    <span class="cityname">City name</span>
                                                </section>
                                                <div class="clearfix"></div>
                                            </li> 
                                        </a>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>    
								</ul>
							</div>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
							 <div>
													<div id="container">
									<div class="view-controls-list" id="viewcontrols">
										<label>view :</label>
										<a class="gridview"><i class="glyphicon glyphicon-th"></i></a>
										<a class="listview active"><i class="glyphicon glyphicon-th-list"></i></a>
									</div>
									<div class="sort">
									   <div class="sort-by">
											<label>Sort By : </label>
											<select>
															<option value="">Most recent</option>
															<option value="">Price: Rs Low to High</option>
															<option value="">Price: Rs High to Low</option>
											</select>
										   </div>
										 </div>
									<div class="clearfix"></div>
								<ul class="list">
									<a href="single.html">
										<li>
										<img src="images/m1.jpg" title="" alt="">
										<section class="list-left">
										<h5 class="title">There are many variations of passages of Lorem Ipsum</h5>
										<span class="adprice">$290</span>
										<p class="catpath">Mobile Phones » Brand</p>
										</section>
										<section class="list-right">
										<span class="date">Today, 17:55</span>
										<span class="cityname">City name</span>
										</section>
										<div class="clearfix"></div>
										</li> 
									</a>
									<a href="single.html">
										<li>
										<img src="images/m2.jpg" title="" alt="">
										<section class="list-left">
										<h5 class="title">It is a long established fact that a reader long established</h5>
										<span class="adprice">$310</span>
										<p class="catpath">Mobile Phones » Brand</p>
										</section>
										<section class="list-right">
										<span class="date">Today, 17:45</span>
										<span class="cityname">City name</span>
										</section>
										<div class="clearfix"></div>
										</li> 
									</a>
									<a href="single.html">
										<li>
										<img src="images/m3.jpg" title="" alt="">
										<section class="list-left">
										<h5 class="title">Contrary to popular belief, Lorem Ipsum is not</h5>
										<span class="adprice">$190</span>
										<p class="catpath">Mobile Phones » Brand</p>
										</section>
										<section class="list-right">
										<span class="date">Today, 17:30</span>
										<span class="cityname">City name</span>
										</section>
										<div class="clearfix"></div>
										</li> 
									</a>
									<a href="single.html">
										<li>
										<img src="images/m4.jpg" title="" alt="">
										<section class="list-left">
										<h5 class="title">The standard chunk of Lorem Ipsum used since the</h5>
										<span class="adprice">$480</span>
										<p class="catpath">Mobile Phones » Brand</p>
										</section>
										<section class="list-right">
										<span class="date">Today, 17:25</span>
										<span class="cityname">City name</span>
										</section>
										<div class="clearfix"></div>
										</li> 
									</a>
									<a href="single.html">
										<li>
										<img src="images/m5.jpg" title="" alt="">
										<section class="list-left">
										<h5 class="title">Sed ut perspiciatis unde omnis iste natus error sit voluptatem</h5>
										<span class="adprice">$859</span>
										<p class="catpath">Mobile Phones » Brand</p>
										</section>
										<section class="list-right">
										<span class="date">Today, 17:24</span>
										<span class="cityname">City name</span>
										</section>
										<div class="clearfix"></div>
										</li> 
									</a>
									<a href="single.html">
										<li>
										<img src="images/m6.jpg" title="" alt="">
										<section class="list-left">
										<h5 class="title">But I must explain to you how all this mistaken idea of denouncing</h5>
										<span class="adprice">$1299</span>
										<p class="catpath">Mobile Phones » Brand</p>
										</section>
										<section class="list-right">
										<span class="date">Today, 17:22</span>
										<span class="cityname">City name</span>
										</section>
										<div class="clearfix"></div>
										</li> 
									</a>
									<a href="single.html">
										<li>
										<img src="images/m1.jpg" title="" alt="">
										<section class="list-left">
										<h5 class="title">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</h5>
										<span class="adprice">$1099</span>
										<p class="catpath">Mobile Phones » Brand</p>
										</section>
										<section class="list-right">
										<span class="date">Today, 17:21</span>
										<span class="cityname">City name</span>
										</section>
										<div class="clearfix"></div>
										</li> 
									</a>
									<a href="single.html">
										<li>
										<img src="images/m7.jpg" title="" alt="">
										<section class="list-left">
										<h5 class="title">On the other hand, we denounce with righteous dislike men</h5>
										<span class="adprice">$290</span>
										<p class="catpath">Mobile Phones » Brand</p>
										</section>
										<section class="list-right">
										<span class="date">Today, 17:20</span>
										<span class="cityname">City name</span>
										</section>
										<div class="clearfix"></div>
										</li> 
									</a>
									<a href="single.html">
										<li>
										<img src="images/m8.jpg" title="" alt="">
										<section class="list-left">
										<h5 class="title">There are many variations of passages of Lorem Ipsum</h5>
										<span class="adprice">$899</span>
										<p class="catpath">Mobile Phones » Brand</p>
										</section>
										<section class="list-right">
										<span class="date">Today, 17:05</span>
										<span class="cityname">City name</span>
										</section>
										<div class="clearfix"></div>
										</li> 
									</a>
									<a href="single.html">
										<li>
										<img src="images/m9.jpg" title="" alt="">
										<section class="list-left">
										<h5 class="title">ducimus qui blanditiis praesentium voluptatum quos dolores et qua</h5>
										<span class="adprice">$199</span>
										<p class="catpath">Mobile Phones » Brand</p>
										</section>
										<section class="list-right">
										<span class="date">Today, 17:04</span>
										<span class="cityname">City name</span>
										</section>
										<div class="clearfix"></div>
										</li> 
									</a>
									<a href="single.html">
										<li>
										<img src="images/m10.jpg" title="" alt="">
										<section class="list-left">
										<h5 class="title">There are many variations of passages of Lorem Ipsum</h5>
										<span class="adprice">$250</span>
										<p class="catpath">Mobile Phones » Brand</p>
										</section>
										<section class="list-right">
										<span class="date">Today, 17:03</span>
										<span class="cityname">City name</span>
										</section>
										<div class="clearfix"></div>
										</li> 
									</a>
									<a href="single.html">
										<li>
										<img src="images/m11.jpg" title="" alt="">
										<section class="list-left">
										<h5 class="title">who are so beguiled and demoralized by the charms of pleasure of the moment</h5>
										<span class="adprice">$189</span>
										<p class="catpath">Mobile Phones » Brand</p>
										</section>
										<section class="list-right">
										<span class="date">Today, 17:03</span>
										<span class="cityname">City name</span>
										</section>
										<div class="clearfix"></div>
										</li> 
									</a>
									<a href="single.html">
										<li>
										<img src="images/m12.jpg" title="" alt="">
										<section class="list-left">
										<h5 class="title">you need to be sure there isn't anything embarrassing hidden</h5>
										<span class="adprice">$1090</span>
										<p class="catpath">Mobile Phones » Brand</p>
										</section>
										<section class="list-right">
										<span class="date">Today, 17:03</span>
										<span class="cityname">City name</span>
										</section>
										<div class="clearfix"></div>
										</li> 
									</a>
									<a href="single.html">
										<li>
										<img src="images/m13.jpg" title="" alt="">
										<section class="list-left">
										<h5 class="title">looked up one of the more obscure Latin words</h5>
										<span class="adprice">$599</span>
										<p class="catpath">Mobile Phones » Brand</p>
										</section>
										<section class="list-right">
										<span class="date">Today, 17:02</span>
										<span class="cityname">City name</span>
										</section>
										<div class="clearfix"></div>
										</li> 
									<div class="clearfix"></div>
									</a>
								</ul>
							</div>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="samsa" aria-labelledby="samsa-tab">
							  <div>
													<div id="container">
									<div class="view-controls-list" id="viewcontrols">
										<label>view :</label>
										<a class="gridview"><i class="glyphicon glyphicon-th"></i></a>
										<a class="listview active"><i class="glyphicon glyphicon-th-list"></i></a>
									</div>
									<div class="sort">
									   <div class="sort-by">
											<label>Sort By : </label>
											<select>
															<option value="">Most recent</option>
															<option value="">Price: Rs Low to High</option>
															<option value="">Price: Rs High to Low</option>
											</select>
										   </div>
										 </div>
									<div class="clearfix"></div>
								<ul class="list">
									<a href="single.html">
										<li>
										<img src="images/m1.jpg" title="" alt="">
										<section class="list-left">
										<h5 class="title">There are many variations of passages of Lorem Ipsum</h5>
										<span class="adprice">$290</span>
										<p class="catpath">Mobile Phones » Brand</p>
										</section>
										<section class="list-right">
										<span class="date">Today, 17:55</span>
										<span class="cityname">City name</span>
										</section>
										<div class="clearfix"></div>
										</li> 
									</a>
									<a href="single.html">
										<li>
										<img src="images/m2.jpg" title="" alt="">
										<section class="list-left">
										<h5 class="title">It is a long established fact that a reader long established</h5>
										<span class="adprice">$310</span>
										<p class="catpath">Mobile Phones » Brand</p>
										</section>
										<section class="list-right">
										<span class="date">Today, 17:45</span>
										<span class="cityname">City name</span>
										</section>
										<div class="clearfix"></div>
										</li> 
									</a>
									<a href="single.html">
										<li>
										<img src="images/m3.jpg" title="" alt="">
										<section class="list-left">
										<h5 class="title">Contrary to popular belief, Lorem Ipsum is not</h5>
										<span class="adprice">$190</span>
										<p class="catpath">Mobile Phones » Brand</p>
										</section>
										<section class="list-right">
										<span class="date">Today, 17:30</span>
										<span class="cityname">City name</span>
										</section>
										<div class="clearfix"></div>
										</li> 
									</a>
									<a href="single.html">
										<li>
										<img src="images/m4.jpg" title="" alt="">
										<section class="list-left">
										<h5 class="title">The standard chunk of Lorem Ipsum used since the</h5>
										<span class="adprice">$480</span>
										<p class="catpath">Mobile Phones » Brand</p>
										</section>
										<section class="list-right">
										<span class="date">Today, 17:25</span>
										<span class="cityname">City name</span>
										</section>
										<div class="clearfix"></div>
										</li> 
									</a>
									<a href="single.html">
										<li>
										<img src="images/m5.jpg" title="" alt="">
										<section class="list-left">
										<h5 class="title">Sed ut perspiciatis unde omnis iste natus error sit voluptatem</h5>
										<span class="adprice">$859</span>
										<p class="catpath">Mobile Phones » Brand</p>
										</section>
										<section class="list-right">
										<span class="date">Today, 17:24</span>
										<span class="cityname">City name</span>
										</section>
										<div class="clearfix"></div>
										</li> 
									</a>
									<a href="single.html">
										<li>
										<img src="images/m6.jpg" title="" alt="">
										<section class="list-left">
										<h5 class="title">But I must explain to you how all this mistaken idea of denouncing</h5>
										<span class="adprice">$1299</span>
										<p class="catpath">Mobile Phones » Brand</p>
										</section>
										<section class="list-right">
										<span class="date">Today, 17:22</span>
										<span class="cityname">City name</span>
										</section>
										<div class="clearfix"></div>
										</li> 
									</a>
									<a href="single.html">
										<li>
										<img src="images/m12.jpg" title="" alt="">
										<section class="list-left">
										<h5 class="title">you need to be sure there isn't anything embarrassing hidden</h5>
										<span class="adprice">$1090</span>
										<p class="catpath">Mobile Phones » Brand</p>
										</section>
										<section class="list-right">
										<span class="date">Today, 17:03</span>
										<span class="cityname">City name</span>
										</section>
										<div class="clearfix"></div>
										</li> 
									</a>
									<a href="single.html">
										<li>
										<img src="images/m1.jpg" title="" alt="">
										<section class="list-left">
										<h5 class="title">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</h5>
										<span class="adprice">$1099</span>
										<p class="catpath">Mobile Phones » Brand</p>
										</section>
										<section class="list-right">
										<span class="date">Today, 17:21</span>
										<span class="cityname">City name</span>
										</section>
										<div class="clearfix"></div>
										</li> 
									</a>
									<a href="single.html">
										<li>
										<img src="images/m7.jpg" title="" alt="">
										<section class="list-left">
										<h5 class="title">On the other hand, we denounce with righteous dislike men</h5>
										<span class="adprice">$290</span>
										<p class="catpath">Mobile Phones » Brand</p>
										</section>
										<section class="list-right">
										<span class="date">Today, 17:20</span>
										<span class="cityname">City name</span>
										</section>
										<div class="clearfix"></div>
										</li> 
									</a>
									<a href="single.html">
										<li>
										<img src="images/m8.jpg" title="" alt="">
										<section class="list-left">
										<h5 class="title">There are many variations of passages of Lorem Ipsum</h5>
										<span class="adprice">$899</span>
										<p class="catpath">Mobile Phones » Brand</p>
										</section>
										<section class="list-right">
										<span class="date">Today, 17:05</span>
										<span class="cityname">City name</span>
										</section>
										<div class="clearfix"></div>
										</li> 
									</a>
									<a href="single.html">
										<li>
										<img src="images/m13.jpg" title="" alt="">
										<section class="list-left">
										<h5 class="title">looked up one of the more obscure Latin words</h5>
										<span class="adprice">$599</span>
										<p class="catpath">Mobile Phones » Brand</p>
										</section>
										<section class="list-right">
										<span class="date">Today, 17:02</span>
										<span class="cityname">City name</span>
										</section>
										<div class="clearfix"></div>
										</li> 
									</a>
									<a href="single.html">
										<li>
										<img src="images/m9.jpg" title="" alt="">
										<section class="list-left">
										<h5 class="title">ducimus qui blanditiis praesentium voluptatum quos dolores et qua</h5>
										<span class="adprice">$199</span>
										<p class="catpath">Mobile Phones » Brand</p>
										</section>
										<section class="list-right">
										<span class="date">Today, 17:04</span>
										<span class="cityname">City name</span>
										</section>
										<div class="clearfix"></div>
										</li> 
									</a>
									<a href="single.html">
										<li>
										<img src="images/m10.jpg" title="" alt="">
										<section class="list-left">
										<h5 class="title">There are many variations of passages of Lorem Ipsum</h5>
										<span class="adprice">$250</span>
										<p class="catpath">Mobile Phones » Brand</p>
										</section>
										<section class="list-right">
										<span class="date">Today, 17:03</span>
										<span class="cityname">City name</span>
										</section>
										<div class="clearfix"></div>
										</li> 
									</a>
									<a href="single.html">
										<li>
										<img src="images/m12.jpg" title="" alt="">
										<section class="list-left">
										<h5 class="title">you need to be sure there isn't anything embarrassing hidden</h5>
										<span class="adprice">$1090</span>
										<p class="catpath">Mobile Phones » Brand</p>
										</section>
										<section class="list-right">
										<span class="date">Today, 17:03</span>
										<span class="cityname">City name</span>
										</section>
										<div class="clearfix"></div>
										</li> 
									</a>
									<a href="single.html">
										<li>
										<img src="images/m11.jpg" title="" alt="">
										<section class="list-left">
										<h5 class="title">who are so beguiled and demoralized by the charms of pleasure of the moment</h5>
										<span class="adprice">$189</span>
										<p class="catpath">Mobile Phones » Brand</p>
										</section>
										<section class="list-right">
										<span class="date">Today, 17:03</span>
										<span class="cityname">City name</span>
										</section>
										<div class="clearfix"></div>
										</li> 
									</a>
									
									<a href="single.html">
										<li>
										<img src="images/m4.jpg" title="" alt="">
										<section class="list-left">
										<h5 class="title">The standard chunk of Lorem Ipsum used since the</h5>
										<span class="adprice">$480</span>
										<p class="catpath">Mobile Phones » Brand</p>
										</section>
										<section class="list-right">
										<span class="date">Today, 17:25</span>
										<span class="cityname">City name</span>
										</section>
										<div class="clearfix"></div>
										</li> 
									</a>
									<a href="single.html">
										<li>
										<img src="images/m9.jpg" title="" alt="">
										<section class="list-left">
										<h5 class="title">ducimus qui blanditiis praesentium voluptatum quos dolores et qua</h5>
										<span class="adprice">$199</span>
										<p class="catpath">Mobile Phones » Brand</p>
										</section>
										<section class="list-right">
										<span class="date">Today, 17:04</span>
										<span class="cityname">City name</span>
										</section>
										<div class="clearfix"></div>
										</li> 
									</a>
									<a href="single.html">
										<li>
										<img src="images/m8.jpg" title="" alt="">
										<section class="list-left">
										<h5 class="title">There are many variations of passages of Lorem Ipsum</h5>
										<span class="adprice">$899</span>
										<p class="catpath">Mobile Phones » Brand</p>
										</section>
										<section class="list-right">
										<span class="date">Today, 17:05</span>
										<span class="cityname">City name</span>
										</section>
										<div class="clearfix"></div>
										</li> 
									</a>
									<a href="single.html">
										<li>
										<img src="images/m12.jpg" title="" alt="">
										<section class="list-left">
										<h5 class="title">you need to be sure there isn't anything embarrassing hidden</h5>
										<span class="adprice">$1090</span>
										<p class="catpath">Mobile Phones » Brand</p>
										</section>
										<section class="list-right">
										<span class="date">Today, 17:03</span>
										<span class="cityname">City name</span>
										</section>
										<div class="clearfix"></div>
										</li> 
									</a>
									
									<a href="single.html">
										<li>
										<img src="images/m11.jpg" title="" alt="">
										<section class="list-left">
										<h5 class="title">who are so beguiled and demoralized by the charms of pleasure of the moment</h5>
										<span class="adprice">$189</span>
										<p class="catpath">Mobile Phones » Brand</p>
										</section>
										<section class="list-right">
										<span class="date">Today, 17:03</span>
										<span class="cityname">City name</span>
										</section>
										<div class="clearfix"></div>
										</li> 
									</a>
									<a href="single.html">
										<li>
										<img src="images/m13.jpg" title="" alt="">
										<section class="list-left">
										<h5 class="title">looked up one of the more obscure Latin words</h5>
										<span class="adprice">$599</span>
										<p class="catpath">Mobile Phones » Brand</p>
										</section>
										<section class="list-right">
										<span class="date">Today, 17:02</span>
										<span class="cityname">City name</span>
										</section>
										<div class="clearfix"></div>
										</li> 
									<div class="clearfix"></div>
									</a>
								</ul>
							</div>
								</div>
							</div>
							<ul class="pagination pagination-sm">
								<li><a href="#">Prev</a></li>
								<li><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
								<li><a href="#">6</a></li>
								<li><a href="#">7</a></li>
								<li><a href="#">8</a></li>
								<li><a href="#">Next</a></li>
							</ul>
						  </div>
						</div>
					</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>	
		</div>
		<!-- // Products --><?php }
}
