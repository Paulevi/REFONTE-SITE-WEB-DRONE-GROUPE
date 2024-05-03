
<style>
  
		.numb{
			color:#fff
		}
		.numb:hover{
			color:#FFD966;
		}

		.consulter>a{
			margin-bottom:5%;
		}
		
		.consulter{
				height: 25vh;
				width: 100%;
				background-color:#3A2F7C;
				font-size: 30px;
				text-align: center;
				padding: 30px;
				overflow:hidden
			}

		.but{
			margin-top: 20px;
			border-radius: 100px;
			color: #3A2F7C;
			background-color: #FCDC12;
		}
		#gotoTop{
			background-color:#3A2F7C 
		}

		#copyrights{
			background-color:#000000;
			color:#ffffff;
		}

		#copyrights strong{
			background-color:#000000;
			font-family:'Arial', sans-serif
		}

		.autorisations{
         /* height: 50vh; */
		 /* width: 100%; */
		 background-color: #ffffff;
		}

		.autorisations > div{
			margin: 40px;
			margin-left: 60px;
		}

		.au{
			background-color :#FFFF66;
;
			width: 260px;
			height: 50px;
			text-align: center;
			
		}

		.grid-container p{
			margin: 3px;
			
		}

		.grid-container p{
			font-size: 15px;
			font-family:'DIN REGULAR', sans-serif;
		}

		.grid-container > .first-row{
            display: flex;
			margin: 10px;
			
		}

		.grid-container > .second-row{
            display: flex;

			justify-content: space-between;
		}

		.grid-container > .first-row > div{
			margin: 20px ;
		}
		.grid-container > .second-row > div{
			margin: 30px ;
		}

		.animate-on-scroll {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease-in-out, transform 0.6s ease-in-out;
        }

        .is-visible {
            opacity: 1;
            transform: translateY(0);
        }

		
	.button.button-reveal i {
		opacity: 0;
		left: auto !important;
		right: 20px !important;
		background-color: transparent;
		transition: all .3s ease !important;
	}

		@media screen and (max-width: 769px){

		.first-row, .second-row{
		flex-direction: column;
        align-items: stretch;
		}
		.consulter{
			height:250px
				
		}

		.rounded-5{
			width: 80%;
		}

		.display-5{
			text-align: center;
		}
		.col-md-4> .barre{
			width: 80%;
			height: 2px;
			margin-bottom: 70px;
			margin-left: 40px;
			text-align: center;
		}

		.menu-container > .menu-item > .menu-link:hover{
			color: yellow;
		}
		.first-ligne, .second-ligne {
		flex-direction: column;
        align-items: stretch;
		}
}

@media (min-width: 770px) and (max-width: 1100px){
	.consulter{
		height: 30vh;
	}
}


	#consulter > h5 > span {
		padding: 2px;
    	border-bottom: 2px solid #FFD966;
}

#consulter > h5 >i{
	font-size: 30px;
}

@media (min-width: 1101px) and (max-width: 1400px){

	.consulter{
		height: 30vh;
	}
}

	

</style>
<section id="autorisations" class="autorisations" >
			<div >
				<div class='au'><h3>AUTORISATIONS</h3></div>
					<div class="grid-container">
						<div class="first-row">
							<div class="grid-item ">
								<p>AGRMENT DU TRAVAIL AERIEN:</p>
								<p><strong>ATA/DGP/2019-005/ANAC/DSV DU 20/04/2023</strong></p>
							</div>
							<div  class="grid-item ">
								<p>AUTORISATION D'EXPLOITATION D'AERONEF TELEPILOTE:</p>
								<p><strong>AEAT/DGP/2023-005/ANAC/DSV DU 20/04/2023</strong></p>
							</div>
							<div  class="grid-item">
								<p>AUTORISATION DE FORMATION DE PILOTE DE DRONE:</p>
								<p><strong>000648/ANAC/DSV/SPDLA/SREF DU 20/01/2023</strong></p>
							</div>
						</div>
						<div class="second-row">
							<div  class="grid-item">
								<p>SPECIFICATIONS RELATIVES A L'AUTORISATION D'EXPLOITATION</p>
								<p> D'AERONEF TELEPILOTE:<strong>AEAT/DGP/2023-005/ANAC/DSV DU 20/04/2023</strong></p>
							</div>
							<div  class="grid-item">
								<p>APPROBATION AU PROGRAMME DE FORMATION AU </p>
								<p>TELEPILOTAGE:<strong>003840/ANAC/DSV/SPDLA/SREF DU 20/06/2021</strong></p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section id="consulter" class="consulter">
				<h5   style="color:#FFD966; "><i class="uil uil-file-alt"></i><span>EXTRAIT DU REGLEMENT AERONAUTIQUE DE COTE D'IVOIRE (RACI 2009) AMENDEMENT 02, EDITION 03</span></h5>
				<a href="{{url('/reglementation')}}" class="button button-xlarge button-circle button-dark button-reveal text-transform-none ls-0"  style="background-color:#FFD966; margin-top: 20px;" ><i class="bi-arrow-right" style="color:#3A2F7C;"></i><span style="color:#3A2F7C;'jumper PERSONAL USE ONLY Light', sans-serif;">CONSULTER</span></a>
			</section>
			<footer >
			<!-- Copyrights
			============================================= -->
				<div id="copyrights">
					<div class="container">
						<div class="row align-items-center justify-content-between col-mb-30">
							<div class="col-12 col-lg-auto text-center text-lg-start">
							<i class="fa-solid fa-phone"></i><a class="numb"  href="callto:+2552722543201"><strong> (+225) 27 22 54 32 01</strong></a> | <a class="numb" href="callto:+2550768124797"><strong> (+225)07 68 12 47 97 </strong></a>| <a class="numb"  href="callto:+2550152995353"><strong> (+225) 01 52 99 53 53</strong></a><br>
							<i class="fa-solid fa-location-dot"></i><a href="https://www.google.com/maps/place/DRONEGROUPE+COTE+D'IVOIRE/@5.3548416,-3.8968656,17z/data=!3m1!4b1!4m6!3m5!1s0xfc1eb51ec3df261:0xd342b7bc5f6efd0b!8m2!3d5.3548416!4d-3.8942907!16s%2Fg%2F11gf9dwk8h?entry=ttu" style="color:#fff"  onmouseover="this.style.color='#FFD966'" onmouseout="this.style.color='#FFF';">	BINGERVILLE, Rue lycée Mamie Faitai H</a><br>
							<i class="fa-solid fa-envelope"></i><a class="numb" href="mailto:info@dronegroupe.com"> info@dronegroupe.com</a><br>
							</div>
							<div class="col-12 col-lg-auto text-center text-lg-end">
								<div class="d-flex justify-content-center justify-content-lg-end mt-4">
									<a href="https://www.facebook.com/dronegroupecotedivoire/" class="social-icon si-small text-white bg-facebook">
										<i class="fa-brands fa-facebook-f"></i>
										<i class="fa-brands fa-facebook-f"></i>
									</a>
									<a href="https://www.instagram.com/dronegroupe.ci/" class="social-icon si-small text-white bg-instagram">
										<i class="fa-brands fa-instagram"></i>
										<i class="fa-brands fa-instagram"></i>
									</a>

									<a href="https://twitter.com/DroneGroupe" class="social-icon si-small text-white bg-x-twitter">
										<i class="fa-brands fa-x-twitter"></i>
										<i class="fa-brands fa-x-twitter"></i>
									</a>
									<a href=" https://ci.linkedin.com/company/drone-groupe-ci/" class="social-icon si-small text-white bg-linkedin">
										<i class="fa-brands fa-linkedin"></i>
										<i class="fa-brands fa-linkedin"></i>
									</a>
								</div>
								<div id="gotoTop" class="uil uil-angle-up"></div>
						</div>
						<p style="opacity:0.8; text-align:center">Copyrights &copy;<strong>2024</strong> | DRONE GROUPE - Tous Droits Réservés</p>

					</div>
				</div>
			</div><!-- #copyrights end -->
		</footer>
		
	<script src="js/plugins.min.js"></script>
	<script src="js/functions.bundle.js"></script>
    <script src="js/plugins.min.js"></script>
	<script src="js/functions.bundle.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>



