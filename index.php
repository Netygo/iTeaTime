<?php 

$actif = 1;
$root = ".";
$description = "Bienvenue sur le site de la Pharmacie de la Dent de Crolles située dans le département de l'Isère. 
Découvrez nos produits pharmaceutiques, notre matériel médical ainsi que nos produits d'orthopédie générale.";
$titre = "Pharmacie de la Dent de Crolles | Accueil";

include("./header.php"); 

?>






<section id="slider" class="slider-parallax swiper_wrapper full-screen clearfix" >
	<div class="slider-parallax-inner">

		<div class="swiper-container swiper-parent">
			<div class="swiper-wrapper">
				<div class="swiper-slide dark" style="background-image: url('images/slider-1.jpg');">
					<div class="container clearfix">
						<div class="slider-caption slider-caption-center">
							<h2 style="font-size:50px"; data-caption-animate="fadeInUp">Le premier site</h2>
							<h2 style="font-size:40px; margin-top:-25px; "; data-caption-animate="fadeInUp">des photographes indépendants</h2>
						</div>
					</div>
				</div>
			</div>
			
		</div>

		<a href="#" data-scrollto="#content" data-offset="100" class="dark one-page-arrow"><i class="icon-angle-down infinite animated fadeInDown"></i></a>

	</div>
</section>



<section id="content">

	<div class="content-wrap" style="padding-top: 50px; padding-bottom:0px;">
	
		<div class="container clearfix" style="width:70%">

				<div class="col_one_sixth">
								<h5 style="font-family:montserrat; background-color:#18c6a3; font-weight:400; text-transform:uppercase; color:white; font-size:15px; text-align:center; width: 120px; padding-top:15px; padding-bottom:15px;">
								à la une</h5>
								
				</div>
					
					<div class="col_five_sixth col_last">
						<hr style="border-top: 2px solid #eeeeee; margin-top:25px; margin-left:0px; width:100%;">
					</div>
		
			
		
		<div class="clear"></div>
		
			
					
					
			<div class="col_half">
				<h5 style="font-weight:400; font-family:montserrat; background-color:#18c6a3; text-transform:uppercase; color:white; 
						font-size:14px; text-align:center; width: 160px; padding-top:10px; padding-bottom:10px; position: absolute; z-index:5; margin-left:40px; margin-top:50px;">
						22 juillet 2016</h5>
				<img src="<?php echo $root; ?>/images/presentation-pharmacie.png" alt="iteatime">
			</div>

			<div class="col_half col_last">
				<p><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et ligula ullamcorper malesuada proin libero nunc consequat. Nunc mi ipsum faucibus vitae aliquet nec. Dui id ornare arcu odio ut. Dictum non consectetur a erat nam at lectus. 
				</strong>
				<br><br>
				Lectus proin nibh nisl condimentum id. Venenatis tellus in metus vulputate eu scelerisque felis. In dictum non consectetur a erat nam. Consequat ac felis donec et odio pellentesque diam volutpat commodo. Cursus turpis massa tincidunt dui ut ornare lectus. Lectus vestibulum mattis ullamcorper velit sed ullamcorper morbi tincidunt ornare.
				Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
				</p>
			</div>

		</div>
	
		
		
		<div class="section parallax dark notopmargin noborder" style="padding: 120px 0px; background-image: url('images/slider-1.jpg'); background-position: 90% 16.8px;" data-stellar-background-ratio="0.3">
					<div class="container center clearfix">

						<div class="emphasis-title" style="margin-bottom:0px;">
							<h2 style="display:inline; border: 1px solid #fbc531; background-color:#fbc531; color:#000; 
							font-size:46px; font-weight:700; padding-right:10px; padding-left:10px; padding-top:6px; padding-bottom:6px; ">
							JE SUIS</h2>
							
							<h2 style="display:inline; border: 1px solid #fbc531; color:#fff; font-size:46px; 
							font-weight:100; padding-right:10px; padding-left:10px; margin-left:-4px; padding-top:6px; padding-bottom:6px;">
							PASSIONNÉ</h2>
							
						</div>

					</div>
				</div>
		
		
		
				
	<div class="container clearfix" style="width:70%">
		
			<div class="col_one_fourth">
								<h5 style="font-family:montserrat; background-color:#18c6a3; font-weight:400; text-transform:uppercase; color:white; font-size:15px; 
								text-align:center; width: 200px; padding-top:15px; padding-bottom:15px; padding-right:60px;">
								actualités</h5>
								
				</div>
					
					<div class="col_three_fourth col_last">
						<hr style="border-top: 2px solid #eeeeee; margin-top:25px; margin-left:0px; width:100%;">
					</div>
		
		<div class="clear"></div>
		
		
		<div class="col_half">
				
				<img src="<?php echo $root; ?>/images/presentation-pharmacie.png" alt="iteatime">
				<h5 style="display:inline-block; font-weight:400; font-family:montserrat; background-color:#b2bec3; text-transform:uppercase; color:white; 
						font-size:14px; text-align:center; width: 140px; padding-top:10px; padding-bottom:10px; position: absolute; margin-left:0px; margin-top:10px;">
						illisible</h5>
				<h5 style="display:inline-block; font-weight:400; font-family:montserrat; background-color:#b2bec3; text-transform:uppercase; color:white; 
				font-size:14px; text-align:center; width: 140px; padding-top:10px; padding-bottom:10px; position: absolute; margin-left:150px; margin-top:10px;">
				actualités</h5>
				
				<h5 style="text-transform:uppercase; font-weight:400; margin-top:70px; font-size:18px;">Lancement du prix photo<br>tremplin de l'année</h5>
				<p style="margin-top:0px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut...</p>
				<a href="#" class="button button-border button-rounded" style="border-color:#18c6a3; color:#18c6a3;">Lire plus</a>
				
		</div>
			
			<div class="col_half col_last">
			
				<img src="<?php echo $root; ?>/images/presentation-pharmacie.png" alt="iteatime">
				<h5 style="display:inline-block; font-weight:400; font-family:montserrat; background-color:#b2bec3; text-transform:uppercase; color:white; 
						font-size:14px; text-align:center; width: 140px; padding-top:10px; padding-bottom:10px; position: absolute; margin-left:0px; margin-top:10px;">
						illisible</h5>
				<h5 style="display:inline-block; font-weight:400; font-family:montserrat; background-color:#b2bec3; text-transform:uppercase; color:white; 
				font-size:14px; text-align:center; width: 140px; padding-top:10px; padding-bottom:10px; position: absolute; margin-left:150px; margin-top:10px;">
				actualités</h5>
				
				<h5 style="text-transform:uppercase; font-weight:400; margin-top:70px; font-size:18px;">Lee jeffries s'illustre encore en noir et blanc !</h5>
				<p style="margin-top:0px;"><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
				<a href="#" class="button button-border button-rounded" style="border-color:#18c6a3; color:#18c6a3;">Lire plus</a>
				
			</div>
		
		
	</div>
		
		
<div style="background-color:#f0f0f0;">
		
	<div class="container clearfix" style="width:70%;">
		
			<div class="col_one_fourth" style="margin-top:35px;">
				<h5 style="font-family:montserrat; background-color:#18c6a3; font-weight:400; text-transform:uppercase; color:white; font-size:15px; 
				text-align:center; width: 200px; padding-top:15px; padding-bottom:15px; padding-right:60px;">
				lee jeffries</h5>
									
			</div>
						
			<div class="col_three_fourth col_last" style="margin-top:35px;">
							<hr style="border-top: 2px solid #ccc; margin-top:25px; margin-left:0px; width:100%;">
			</div>
	</div>
		<div class="clear"></div>
	
			<div class="container clearfix" style="width:70%; text-align:center;">
				
				<div class="hexagon-lg hexagon-success hexagon-hover hexagon-inline"></div>
				<div class="hexagon-lg hexagon-success hexagon-hover hexagon-inline" style="margin-left:5px;"></div>
				<div class="hexagon-lg hexagon-success hexagon-hover hexagon-inline" style="margin-left:5px;"></div>
				<div class="hexagon-lg hexagon-success hexagon-hover hexagon-inline" style="margin-left:5px;"></div>
				<div class="hexagon-lg hexagon-success hexagon-hover hexagon-inline" style="margin-left:5px;"></div>
				
				
			</div>
			
			<div class="container clearfix" style="width:70%; margin-top:-40px; text-align:center; padding-bottom:60px;">
				
				<div class="hexagon-lg hexagon-success hexagon-hover hexagon-inline"></div>
				<div class="hexagon-lg hexagon-success hexagon-hover hexagon-inline" style="margin-left:5px;"></div>
				<div class="hexagon-lg hexagon-success hexagon-hover hexagon-inline" style="margin-left:5px;"></div>
				<div class="hexagon-lg hexagon-success hexagon-hover hexagon-inline" style="margin-left:5px;"></div>
				
								
			</div>
		
		
		
	</div>
	

	
	
		<div class="clear"></div>
		
	<div style="background-color:#e2e2e2;">	
	
		<div class="container clearfix" style="width:70%;">
	
			<div class="col_two_third" style="margin-top:35px;">
						
				<h5 style="font-family:montserrat; background-color:#18c6a3; font-weight:400; text-transform:uppercase; color:white; font-size:15px; 
				text-align:center; width: 180px; padding-top:12px; padding-bottom:12px;">
				documentation</h5>
				
				<div class="feature-box fbox-plain fbox-dark">
							<div class="fbox-icon">
								<a href="#"><i class="icon-umbrella"></i></a>
							</div>
							<h3 style="font-weight:400; text-transform:uppercase; font-size:15px; ">téléchargez le dossier de candidature au statut national étudiant entrepreneur</h3>
							
				</div>
				
				<div class="feature-box fbox-plain fbox-dark">
							<div class="fbox-icon">
								<a href="#"><i class="icon-umbrella"></i></a>
							</div>
							<h3 style="font-weight:400; text-transform:uppercase; font-size:15px; ">téléchargez le dossier de candidature au prix pépite 2018</h3>
							
				</div>
				
				
			</div>
			
			<div class="col_one_third col_last" style="margin-top:35px;">
						
				<h5 style="font-family:montserrat; background-color:#18c6a3; font-weight:400; text-transform:uppercase; color:white; font-size:15px; 
				text-align:center; width: 180px; padding-top:12px; padding-bottom:12px;">
				newsletter</h5>
				
				<form id="quick-contact-form" name="quick-contact-form" action="include/quickcontact.php" method="post" class="quick-contact-form nobottommargin" novalidate="novalidate">
									<div class="form-process"></div>

									
									<input type="text" class="required sm-form-control email input-block-level" id="quick-contact-form-email" name="quick-contact-form-email" value="" placeholder="EMAIL" aria-required="true" style="width:99% !important;">
									<input type="text" class="required sm-form-control input-block-level" id="quick-contact-form-name" name="quick-contact-form-name" value="" placeholder="NOM" aria-required="true" style="width:49% !important; display:inline;">
									<input type="text" class="required sm-form-control input-block-level" id="quick-contact-form-name" name="quick-contact-form-name" value="" placeholder="PRÉNOM" aria-required="true" style="width:49% !important; display:inline;">
									
									<input type="text" class="hidden" id="quick-contact-form-botcheck" name="quick-contact-form-botcheck" value="">
									<a href="#" class="button button-border button-rounded btn-block" style="border-color:#18c6a3; color:#18c6a3; margin-left: 2px;margin-right: 10px;padding-right: 0px;width: 98%; margin-top:15px; text-align:center;">S'INSCRIRE</a>
								
								</form>
				
			</div>
					
					
	
		</div>
	
	
	</div>
		
		
		
	<div style="background-color:#58b6d0; text-align:center;">	
	
		<div class="container clearfix" style="width:70%; text-align:center;">
	
			<div class="col_one_fifth" style="margin-left: 35px; margin-right:8px; margin-top:0px; margin-bottom:0px; padding:0px 10px; text-align:center;" onmouseover="this.style.background='#34526f8c';this.style.color='#34526f8c';" onmouseout="this.style.background='';this.style.color='';"">
			
				<a href="#" class="social-icon si-facebook" style="border-color:white !important; margin-bottom:35px; margin-top:35px;">
					<i class="icon-facebook" style="color:white !important;"></i>
					<i class="icon-facebook"></i>
				</a>	
				
				<p style="text-align:center; color:white; margin-bottom:0px; margin-top:42px; padding-top:0px; padding-bottom:0px;"> Facebook </p>
				
				
			</div>
			
			<div class="col_one_fifth" style="margin-right:8px; margin-top:0px; margin-bottom:0px; padding:0px 10px; text-align:center;" onmouseover="this.style.background='#34526f8c';this.style.color='#34526f8c';" onmouseout="this.style.background='';this.style.color='';"">
			
				<a href="#" class="social-icon si-twitter" style="border-color:white !important; margin-bottom:35px; margin-top:35px;">
					<i class="icon-twitter" style="color:white !important;"></i>
					<i class="icon-twitter"></i>
				</a>	
				
				<p style="text-align:center; color:white; margin-bottom:0px; margin-top:42px; padding-top:0px; padding-bottom:0px;"> Twitter </p>
				
				
			</div>
			
			<div class="col_one_fifth" style="margin-right:8px; margin-top:0px; margin-bottom:0px; padding:0px 10px; text-align:center;" onmouseover="this.style.background='#34526f8c';this.style.color='#34526f8c';" onmouseout="this.style.background='';this.style.color='';"">
			
				<a href="#" class="social-icon si-linkedin" style="border-color:white !important; margin-bottom:35px; margin-top:35px;">
					<i class="icon-linkedin" style="color:white !important;"></i>
					<i class="icon-linkedin"></i>
				</a>	
				
				<p style="text-align:center; color:white; margin-bottom:0px; margin-top:42px; padding-top:0px; padding-bottom:0px;"> Linkedin </p>
				
				
			</div>
			
			<div class="col_one_fifth" style="margin-right:8px; margin-top:0px; margin-bottom:0px; padding:0px 10px; text-align:center;" onmouseover="this.style.background='#34526f8c';this.style.color='#34526f8c';" onmouseout="this.style.background='';this.style.color='';"">
			
				<a href="#" class="social-icon si-youtube" style="border-color:white !important; margin-bottom:35px; margin-top:35px;">
					<i class="icon-youtube" style="color:white !important;"></i>
					<i class="icon-youtube"></i>
				</a>	
				
				<p style="text-align:center; color:white; margin-bottom:0px; margin-top:42px; padding-top:0px; padding-bottom:0px;"> Youtube </p>
				
				
			</div>
			
			<div class="col_one_fifth col_last" style="margin-right:8px; margin-top:0px; margin-bottom:0px; padding:0px 10px; text-align:center;" onmouseover="this.style.background='#34526f8c';this.style.color='#34526f8c';" onmouseout="this.style.background='';this.style.color='';"">
			
				<a href="#" class="social-icon si-tumblr" style="border-color:white !important; margin-bottom:35px; margin-top:35px;">
					<i class="icon-tumblr" style="color:white !important;"></i>
					<i class="icon-tumblr"></i>
				</a>	
				
				<p style="text-align:center; color:white; margin-bottom:0px; margin-top:42px; padding-top:0px; padding-bottom:0px;"> Tumblr </p>
				
				
			</div>
			
			
							
	
		</div>
	
	
	</div>
		
		
		
		
</div>
		

</section>



<?php include("./footer.php"); ?>