	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

		<title>Macro</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/jquery-ui.css">				
			<link rel="stylesheet" href="css/nice-select.css">							
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">				
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>	
			<header id="header">
				<div class="header-top">
					<div class="container">
				  		<div class="row justify-content-center">
						      <div id="logo">
						        <a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
						      </div>
				  		</div>			  					
					</div>
				</div>
				<div class="container main-menu">
					<div class="row align-items-center justify-content-center d-flex">			
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
                          <li><a href="index.php">Inicio</a></li>
                          <?php echo "<li><a href='menu.php?codigo=3'>Menu</a></li>"?>
                        </ul>
				      </nav><!-- #nav-menu-container -->					      		  
					</div>
				</div>
			</header><!-- #header -->
			
			<!-- start banner Area -->
			<section class="banner-area">		
				<div class="container">
					<div class="row fullscreen align-items-center justify-content-between">
						<div class="col-lg-12 banner-content">
							<h6 class="text-white">
								Amplias opciones de elección</h6>
							<h1 class="text-white">Recetas deliciosas</h1>
							<p class="text-white">
								Venga a cenar con su novia, su amante, su mujer y si las trae a las 3 usted cenará gratis
							</p>
							<?php echo "<a href='menu.php?codigo=3' class='primary-btn text-uppercase'>Mira nuestro Menú</a>" ?>
						</div>
					</div>
				</div>					
			</section>
			<!-- End banner Area -->

			<!-- Start home-about Area -->
			
			<!-- End home-about Area -->			

			<!-- Start menu-area Area -->

            <!-- End menu-area Area -->			

			<!-- Start reservation Area -->
			<section class="reservation-area section-gap relative">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row justify-content-between align-items-center">
						<div class="col-lg-6 reservation-left">
							<h1 class="text-white">Reserve sus asientos
								para confirmar si vienes
								con tu familia</h1>
							<p class="text-white pt-20">
								Si un dia te sientes vacio...<br>
								Come, es hambre.
							</p>
						</div>
						<div class="col-lg-5 reservation-right">
							<form class="form-wrap text-center" action="#">
								<input type="text" class="form-control" name="name" placeholder="Su nombre" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Name'" >
								<input type="email" class="form-control" name="email" placeholder="Su Correo electrónico" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address'" >
								<input type="text" class="form-control" name="phone" placeholder="Su número de teléfono" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone Number'" >		
								<input type="text" class="form-control date-picker" name="date" placeholder="Seleccione la fecha" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Select Date & time'" >									
								<div class="form-select" id="service-select">
									<select>
										<option data-display="">Seleccione su evento</option>
										<option value="1">Evento uno</option>
										<option value="2">Evento dos</option>
										<option value="3">Evento tres</option>
										<option value="4">Evento cuatro</option>
									</select>
								</div>									
								<button class="primary-btn text-uppercase mt-20">Hacer la reservación</button>
							</form>
						</div>
					</div>
				</div>	
			</section>
			<!-- End reservation Area -->
			
			<!-- Start gallery-area Area -->
            
            <!-- End gallery-area Area -->			

			<!-- Start review Area -->
			
			<!-- End review Area -->					

			<!-- Start blog Area -->
			
			<!-- End blog Area -->							

			<!-- start footer Area -->		
			<footer class="footer-area">
				<div class="footer-widget-wrap">
					<div class="container">
						<div class="row section-gap">
							<div class="col-lg-4  col-md-6 col-sm-6">
								<div class="single-footer-widget">
									<h4>Horario de apertura</h4>
									<ul class="hr-list">
										<li class="d-flex justify-content-between">
											<span>Lunes - Viernes</span> <span>08.00 am - 10.00 pm</span>
										</li>
										<li class="d-flex justify-content-between">
											<span>Sábado</span> <span>08.00 am - 10.00 pm</span>
										</li>
										<li class="d-flex justify-content-between">
											<span>Domingo</span> <span>08.00 am - 10.00 pm</span>
										</li>																				
									</ul>
								</div>
							</div>
							
							<div class="col-lg-4  col-md-6 col-sm-6">
								<div class="single-footer-widget">
									<h4>Contactanos</h4>
									<p>
										Complejo Regional Centro. San José Chiapa Puebla. BUAP.
									</p>
									<p class="number">
										012-6532-568-9746 <br>
										012-6532-569-9748
									</p>
								</div>
							</div>						
							<div class="col-lg-4  col-md-6 col-sm-6">
								<div class="single-footer-widget">
									<h4>Boletin informativo</h4>
									<p>
Puedes confiar en nosotros. solo enviamos ofertas promocionales, no un solo spam.</p>
									<div class="d-flex flex-row" id="mc_embed_signup">


										  <form class="navbar-form" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get">
										    <div class="input-group add-on align-items-center d-flex">
										      	<input class="form-control" name="EMAIL" placeholder="Tu correo electrónico" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email address'" required type="email">
												<div style="position: absolute; left: -5000px;">
													<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
												</div>
										      <div class="input-group-btn">
										        <button class="genric-btn"><span class="lnr lnr-arrow-right"></span></button>
										      </div>
										    </div>
										      <div class="info mt-20"></div>
										  </form>
									</div>
								</div>
							</div>						
						</div>					
					</div>					
				</div>
				<div class="footer-bottom-wrap">
					<div class="container">
						<div class="row footer-bottom d-flex justify-content-between align-items-center">
							<p class="col-lg-8 col-mdcol-sm-6 -6 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
<i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">TECHNOFRIENDS</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
							<ul class="col-lg-4 col-mdcol-sm-6 -6 social-icons text-right">
	                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
	                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
	                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
	                            <li><a href="#"><i class="fa fa-behance"></i></a></li>           
	                        </ul>
						</div>						
					</div>
				</div>
			</footer>
			<!-- End footer Area -->	

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="js/popper.min.js"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>		
 			<script src="js/jquery-ui.js"></script>					
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>						
			<script src="js/jquery.nice-select.min.js"></script>					
			<script src="js/owl.carousel.min.js"></script>			
            <script src="js/isotope.pkgd.min.js"></script>								
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
		</body>
	</html>