<?php defined( '_JEXEC' ) or die; 

include_once JPATH_THEMES.'/'.$this->template.'/logic.php';

?><!doctype html>

<html lang="<?php echo $this->language; ?>">

<head>
	<jdoc:include type="head" />
	<!--meta name="format-detection" content="telephone=no"-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<link rel="apple-touch-icon-precomposed" href="<?php echo $tpath; ?>/images/apple-touch-icon-57x57-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $tpath; ?>/images/apple-touch-icon-72x72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $tpath; ?>/images/apple-touch-icon-114x114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $tpath; ?>/images/apple-touch-icon-144x144-precomposed.png">
	<!-- Le HTML5 shim and media query for IE8 support -->
	<!--[if lt IE 9]>
	<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<script type="text/javascript" src="<?php echo $tpath; ?>/js/respond.min.js"></script>
	<![endif]-->
	
	
<style type="text/css">
	/* TEST 
	.article {background:cyan;}
	.aside { background:orange; }
	.slider { background:red; }
	 .aside0 { background:green; }
	*/
	#address-header a { color:white !important; }
	
	
	
	
</style>	
	

	
</head>
  
<body class="<?php echo (($menu->getActive() == $menu->getDefault()) ? ('front') : ('site')).' '.$active->alias.' '.$pageclass; ?>" role="document">

	<!--?php require_once 'html/bootstrap.test.php'; // test only - delete this line ?-->

	
	
	
	
	<!-- 
		YOUR CODE HERE ********************************
	-->
	
	<div class="container">

  <div class="row">
  
	<div class="header hidden-xs">
		<div class="logo">
			<p>Dr. Nikolaus Hanfstingl</p>
			<p>Arzt für Allgemein- und Vorsorgemedizin</p>
		</div>
	</div>
	
	<div id="header-nav" class="navbar navbar-default">
			<div class="container-fluid">
			<!--div class="visible-xs" style="background:red; float:left; height:30px; ">Header alternate;</div-->
			
				<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar-content">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand visible-xs" href="<?php echo $this->baseurl; ?>/">Dr. Nikolaus Hanfstingl</a>
				</div>
				<div class="collapse navbar-collapse" id="mynavbar-content">
					
					<jdoc:include type="modules" name="mainnav" />

				</div>
			</div>
		</div>

  </div>
  
   <div class="row rounded-row">  
  
	  <div class="row" style="position:relative; background:transparent;">

		  <div class="slider col-xs-12  col-sm-8  col-md-9 col-lg-9" style="margin-bottom:-10px;">
			<jdoc:include type="modules" name="sliderpos" />
		  </div>
		  
		  <div class="visible-xs  col-xs-12">
			<!--div  style="margin-top:10px; margin-bottom:0; border:none; font-size:1.2rem; background:#e8eef6 !important;" class="well clearfix" >
						<div style="float:left; margin-right:5%">
							<strong>Dr. Nikolaus Hanfstingl <br />
							<span style="font-size:1rem;">Praktischer Arzt und Wahlarzt</strong><br />
							Roseggerweg 2, 8081 <br />
							Heiligenkreuz am Waasen<br />
							<strong>Telefon:</strong> 03134 / 2279 <br />
							<strong>Fax:</strong> 03134 2279-4<br />
							<a style="text-decoration:underline" href="mailto:nikolaus@hanfstingl.at">nikolaus@hanfstingl.at</a><br />
							<br />
						</div>
						<div style="float:left;">
							<strong>Ordination</strong><br />
							Mo - Di und Do - Fr &nbsp; 07:30 - 11:30<br />
							Di  &nbsp;16:30 - 18:30<br />
							Mi  &nbsp;15:00 - 18:30
						</div>	
			
			</div-->
				<div style="margin:20px auto 20px auto;">
				
					<ul class="nav nav-tabs">
					  <li><a href="#aaa" data-toggle="tab">Anschrift</a></li>
					  <li><a href="#bbb" data-toggle="tab">Ordination</a></li>
					</ul>
					
					<div class="tab-content" id="tabs">
					
						<div class="tab-pane" id="aaa" style="padding-top:10px; padding-left:20px;">
									<!--...Content1... -->
									<strong><span style="font-size:1.6rem">Dr. Nikolaus Hanfstingl</span><br />
									Praktischer Arzt (privat und alle Kassen)</strong><br />
									Roseggerweg 2, 8081, Heiligenkreuz am Waasen<br /><br />
									<label class="ord-phon">Telefon</label> 03134 / 2279 <br />
									<label class="ord-phon">Fax</label> 03134 / 2279-4<br />
									<label class="ord-phon">e-Mail</label><a style="text-decoration:underline" href="mailto:ordinationhanfstingl@gmail.com">ordinationhanfstingl@gmail.com</a><br />

						</div>
						
						<div class="tab-pane" id="bbb" style="padding-top:10px; padding-left:20px;">
									<!--...Content2... -->
							<strong>Ordination</strong><br />
							<label class="ord-day">Mo</label> 	07:30 - 11:30 	<br />		                      	 
							<label class="ord-day">Di</label> 	07:30 - 11:30 	16:30 - 18:30 	<br />	 
							<label class="ord-day">Mi</label> 	15:00 - 18:30 	<br />	 
							<label class="ord-day">Do</label> 	07:30 - 11:30	<br /> 		                      	 
							<label class="ord-day">Fr</label> 	07:30 - 11:30 	<br />	
							<br />
							<strong>Kassen</strong> <br />
							GKK | BVA | VA | SVA | KFA | SVB <br />
									
						</div>
						
					</div>
			</div>
			
		  </div>
		  
		  <div class="aside0 hidden-xs col-sm-4 col-md-3 col-lg-3" style="position:absolute; right:1px; top:0; bottom:0;">
					<div style="background:#27426b; display:table; height:100%; width:100%; border-radius:6px;">
						<div id="address-header" style="display:table-cell; padding:10px 20px 0 20px; vertical-align:middle; color:white;">
						
							<strong>Dr. Nikolaus Hanfstingl</strong> <br />
							Roseggerweg 2, 8081 Heiligenkreuz am Waasen<br /><br />
							<label class="ord-phon">Telefon</label> 03134 / 2279<br />
							<label class="ord-phon">Fax</label> 03134 / 2279-4<br />
							<a style="color:white; text-decoration:underline" href="mailto:ordinationhanfstingl@gmail.com">ordinationhanfstingl@gmail.com</a><br />
							<br />
							<!--span id="ordinationszeiten"><strong>Ordination</strong><br />
							Mo - Di und Do - Fr &nbsp; 07:30 - 11:30<br />
							Di  &nbsp;16:30 - 18:30<br />
							Mi  &nbsp;15:00 - 18:30<br />
							<strong>Kassen</strong><br />
							GKK | BVA | VA | SVA | KFA | SVB
							</span-->


						</div>
					</div>
		  </div>

	  </div>
  

		<div class="row">
		  <div class="article col-xs-12  col-sm-8  col-md-9  col-lg-9 ">
			
			<jdoc:include type="component" />

		  </div>
		  <div class="aside col-xs-12 col-sm-4 col-md-3 col-lg-3">
		    <div id="ordinationszeiten-aside" style="margin-top:10px; font-size:1.3rem;" class="hidden-xs">
				<strong style="font-size:1.6rem; color:#27426b;" >Ordination</strong><br />
				<label class="ord-day">Mo</label> 	07:30 - 11:30 	<br />		                      	 
				<label class="ord-day">Di</label> 	07:30 - 11:30 	16:30 - 18:30 	<br />	 
				<label class="ord-day">Mi</label> 	15:00 - 18:30 	<br />	 
				<label class="ord-day">Do</label> 	07:30 - 11:30	<br /> 		                      	 
				<label class="ord-day">Fr</label> 	07:30 - 11:30 		
				<p style="line-height:5px; height:5px; padding:0; margin:0; font-size:0;"> &nbsp; </p>
				<strong style="font-size:1.6rem; color:#27426b;" >Kassen</strong>
				<br />
				GKK | BVA | VA | SVA | KFA | SVB 
			</div>
			
			<?php
				if($curtitle!="") {  // side-nav only for pages that are sub-items // $curtitle siehe logic.php
			?>
					
						<nav class="aside-nav hidden-xs">
							<div class="page-header">
								<h2 itemprop="name"><?php echo $curtitle; ?></h2>
							</div>
							<jdoc:include type="modules" name="asidenav" />
						</nav>
			<?php } else { ?>

							<div style="margin-top:10px;"><jdoc:include type="modules" name="featartpos" /></div>

			<?php } ?>			
			
			
			
			
			
		  </div>
	  </div>
  
  </div><!-- end container2-->
  
  <div class="row footer">
		<div class="footer-text col-xs-12  col-sm-6  col-md-6  col-lg-6">© 2015 &nbsp; &nbsp; <span>Dr. Nikolaus Hanfstingl</span></div>
		<div class="footer-nav col-xs-12  col-sm-6  col-md-6  col-lg-6"><jdoc:include type="modules" name="footernav" /></div>
	
  </div>
  
  
</div>
	
	
	
  <!----
   ************************************************************
   --->  

	
	
	
	

	
	
	

	<jdoc:include type="modules" name="debug" />
</body>

</html>
