<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta http-equiv="x-ua-compatible" content="IE=edge">
	<meta name="author" content="SemiColonWeb">
	<meta name="description" content="Get Canvas to build powerful websites easily with the Highly Customizable &amp; Best Selling Bootstrap Template, today.">

	<!-- Font Imports -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&family=Noto+Serif:ital,wght@1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fontawesome.com/icons/file-lines?f=classic&s=thin" integrity="sha512-xxNO0nSN9+hE5CoefSwoHd4WwITb+jq0sE7o7dbzAeXNr9l6iQ7Dwlsl+fpdOebQKEp26OJmtunQrTJN6PizQA==" crossorigin="anonymous" />
	<link rel="icon" src="images/logodronegroupe.png">
	<link rel="shortcut icon" type="image/ico" src="images/logodronegroupe.png" />
	
	<!-- Core Style -->
	<link rel="stylesheet" href="style.css">

	<!-- Font Icons -->
	<link rel="stylesheet" href="css/font-icons.css">

	<!-- Plugins/Components CSS -->
	<link rel="stylesheet" href="css/swiper.css">

	<!-- Custom CSS -->
	<link rel="stylesheet" href="css/custom.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Document Title
	============================================= -->
	<title>DRONE GROUPE</title>

	<style>

		body{
            font-family:'jumper PERSONAL USE ONLY', sans-serif;
            }

		.sec{
			background-color:#6A5ACD;
			width: 500px; 
			box-shadow: 10px 5px 5px 0px rgba(0, 0, 0, 0.5);
			margin-left: 10px;
            color: yellow;
			padding-left:35px;
			font-weight: lighter;
			font-family:'DIN Regular', sans-serif;
		}

        .menu > p{
            margin: 40px;
			font-size: 20px;
        }

        .metier{
            margin-top: 40px;
        }

		.metiers{
			display:flex;
			margin: 40px;
			justify-content:space-evenly;
		}

		.metiers >.text > h3{
			font-family:'DIN', sans-serif;
		}

		.metiers >.text >p{
			font-style:italic;
		}

		.metiers>.text{
			width: 60%;
			font-size: 20px;
		}

		.metiers>.image >img{
			height: 300px;
			width: 500px;
		}

		.specials>.text{
			width: 40%;
			height: 200px;
			margin-top: 30px;
			margin-left: 2px
		}

		.specials>.text>p{
			font-size: 15px;
		}
		

		.specials>.text>h6{
			font-family:'DIN', sans-serif;
			font-size: 23px;
		}

		.specials>.text>p>strong{
			font-family:'DIN', sans-serif;
		}

		.text > .barre, h5{
			margin:0;
		}

		.image{
			height: 300px;
			width: 300px;
			
			background-size:cover;
		}
        
		.special{
			background-color:#000000;
		}
		.special> h1{
			color: #fff;
			text-align:center;
		}
		.special{
			color: #fff;
		}

		.special > .barre{
			margin-top: 10px;
		}

		.first-ligne > .specials{
			display:flex;
		}
		 .second-ligne{
			
			display:flex;
		}
		.first-ligne, .second-ligne > .specials{
			display:flex;
			margin: 20px;
			padding: 20px;
		}

		.specials > .image{
			width: 400px;
			margin: 20px;
			background-size: cover;
			
		}

		img{
			width: 400px;
			height: 250px
		}


			#content{
			margin-top: 30px;
			height:80vh;
			margin-bottom: 60px;
		}
		.content1{
			background-color:#000000;
			padding: 50px;
			width: 50%;
			height: 80vh ;
		}

		.content1>h1{
			color:#ffffff;
			font-size:70px;
			font-family:'jumper PERSONAL USE ONLY', sans-serif;
		}

		.content2>img{
			height: 80vh ;
			width: 100%;
		}
       
		.content-wrap{
			display: flex;
			
		}

		.barre{
			height: 3px;
			background-color: #ffffff;
			margin-top: 30px;
		}
		@keyframes swiperSVGAnim {
			0% {
				stroke-dashoffset: 260;
			}
			100% {
				stroke-dashoffset: 0;
			}
		}

		.content-wrap{
			display: flex;
			
		}

		.button.button-reveal i {
			opacity: 0;
			left: auto !important;
			right: 20px !important;
			background-color: transparent;
			transition: all .3s ease !important;
		}

		.menu > ul{
			margin-top: 50px;
		}
		.menu > ul >li{
			margin-left: 40px;
			margin-top: 20px;
			list-style: none;
			background-color: #000000;
			color:#fff;
			height: 40px;
			width: 80%;
			font-size: 20px;
			box-shadow: 10px 5px 5px 0px rgba(0, 0, 0, 0.5);

		}

		.menu > ul >li >i{
			margin-left: 40px;
			margin-right:20px;
			color:#FFD966
		}
		
@media screen and (max-width: 769px){
	#content{
		height: 30vh;	
		margin-bottom:150px;
	}

	.menu > ul >li{
		    padding-left: 4px;
			margin-left: 40px;
			margin-top: 20px;
			list-style: none;
			background-color: #000000;
			color:#fff;
			height: 90px;
			width: 80%;
			font-size: 20px;
			box-shadow: 10px 5px 5px 0px rgba(0, 0, 0, 0.5);

		}


	.menu-container{
		
		text-align:center;
		}
	.content1{
			background-color: #000000;
			padding: 30px;
			width: 50%;
			height: 30vh;
				}

		.content2 {
			height: 30vh;
			width: 100%;
		}
		.content2>img{
			height: 30vh ;
			width: 100%;                                                               
		}  
	.content1>h1{
		    margin-top:30px;
			color:#ffffff;
			font-size:15px;
			font-family:'jumper PERSONAL USE ONLY', sans-serif;

		}

		.metiers{
        flex-direction: column;
        align-items: stretch;
		position: relative;
		left: 80px;
        }

		.menu-item{
			text-align: center;
			border-bottom: 2px solid #fff;
		}


		.specials >.text{
			padding-top :20px;
			width:450px;
		}
		.specials{
			height: 500px;
		}

		.special{
			height: 330vh;

		}
		
		.first-ligne, .second-ligne {
		flex-direction: column;
        align-items: stretch;
		}
		.specials{
			
			flex-direction: column;
       		 align-items: stretch;
		}
		.first-ligne, .second-ligne {
		flex-direction: column;
        align-items: stretch;
		}

	}

	
@media (min-width: 770px) and (max-width: 950px){

.content1{
	background-color:#000000;
	padding: 50px;
	width: 70%;
	height: 60vh ;		
	}

.menu > ul >li{
	 padding-left: 4px;
	margin-left: 40px;
	margin-top: 20px;
	list-style: none;
	background-color: #000000;
	color:#fff;
	height: 60px;
	width: 80%;
	font-size: 20px;
	box-shadow: 10px 5px 5px 0px rgba(0, 0, 0, 0.5);

		}
.content1>h1{
 margin-top:20px;
color:#ffffff;
font-family:'jumper PERSONAL USE ONLY', sans-serif;
font-size:35px;
}

.content2 {
	height: 60vh ;
	width: 100%;
}

.content2>img{
	height: 60vh ;
	width: 100%;                                                               
}  

#video h1{
font-size:10px;
} 

	.specials >.first-ligne>.image,
	.specials >.second-ligne>.image{
		height: 300px ;
		width: 300px;
	}

	.first-ligne, .second-ligne {
		flex-direction: column;
        align-items: stretch;
		padding-left:20%;
		padding-right:20%
		}

		.specials{
			
			flex-direction: column;
       		 align-items: stretch;
		}

		.specials>.text{
			width: 500px;
		}


	}

@media (min-width: 951px) and (max-width: 1400px){
	

	
	.specials > image{
		width:100px;
		}

	.content1{
	background-color:#000000;
	padding: 50px;
	width: 70%;
	height: 60vh ;		
}

		
.content1>h1{
	 margin-top:20px;
	color:#ffffff;
	font-size: 45px;
	font-family:'jumper PERSONAL USE ONLY', sans-serif;

}

	.content2 {
		height: 60vh ;
		width: 100%;
	}

	.content2>img{
	height: 60vh ;
	width: 100%;                                                               
	}  

	/* .specials{
		width: 410px;
	} */
	.first-ligne, .second-ligne {
		flex-direction: column;
        align-items: stretch;
		padding-left:30%
		}

		.specials{
			
			flex-direction: column;
       		 align-items: stretch;
		}

		.specials>.text{
			width: 500px;
		}
		.menu > ul >li{
	 padding-left: 4px;
	margin-left: 40px;
	margin-top: 20px;
	list-style: none;
	background-color: #000000;
	color:#fff;
	height: 60px;
	width: 80%;
	font-size: 20px;
	box-shadow: 10px 5px 5px 0px rgba(0, 0, 0, 0.5);

		}
}
		</style>

</head>

	<body>
		<!-- Header
		============================================= -->
		<header id="header" class="sticky dark">
			<div id="header-wrap">
				<div class="container">
					<div class="header-row">

						<div id="logo">
							<a href="{{url('/')}}">
								<img class="logo-default"  src="images/logodronegroupe.png" alt="drone groupe Logo" style="height: 40px; width: auto;">
							</a>
						</div><!-- #logo end -->
						<div class="primary-menu-trigger">
							<button class="cnvs-hamburger" type="button" title="Open Mobile Menu">
								<span class="cnvs-hamburger-box"><span class="cnvs-hamburger-inner"></span></span>
							</button>
						</div>

						<!-- Primary Navigation
						============================================= -->
						<nav class="primary-menu" style="position:relative; left: 5px;">

							<ul class="menu-container" >
								<li class="menu-item" >
									<a class="menu-link" href="{{url('/presentation')}}" >
										<div >PRESENTATION</div>
									</a>
								</li>
								<li class="menu-item current">
									<a class="menu-link" href="#" >
										<div >NOS METIERS</div>
									</a>
								</li>
								<li class="menu-item">
									<a class="menu-link" href="{{url('/formation')}}" >
										<div >NOS FORMATIONS</div>
									</a>
								</li>
								<div class="morph-marker"></div>
							</ul>

							</nav><!-- #primary-menu end -->
                        
					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->
	
		<section id="content">
		<div class="content-wrap py-0">
				<div class="content1" >
					<h1> C'EST QUOI NOTRE METIER ?</h1>
					<div class="barre"></div>
				</div>
				<div class="content2" >
					<img src="images/M10_Plan de travail 1-01.jpg" alt="">
                </div>
		<div>
		</section><!-- #content end -->
		<section class="menu">
    		<h3 class="sec">EXPLORATION GEOSPACIALE</h3>
            <div class="barre-2"></div>
            <p class="animate-on-scroll">
            DRONE GROUPE met à votre disposition le potentiel des drones professionnels homologués, du matériel de géodétection à la pointe de la technologie pour différentes applications techniques et audiovisuelles et des opérateurs chevronnés.
            </p>
            <p  class="animate-on-scroll">
			Partenaire de référence des entreprises, industriels et collectivités publiques, DRONE GROUPE est un acteur majeur de l’imagerie aérienne par drones et l'exploration géospatiale, implanté sur le territoire français et en Afrique de l'ouest en attendant le déploiement dans les autres régions de l'Afrique. Nous innovons constamment pour garantir les meilleurs diagnostics et les meilleurs études aux moindres coûts avec un maximum de souplesse et de réactivité.
            </p>
			<h3 class="sec">EXPLORATION CAPACITAIRE</h3>
            <div class="barre-2"></div>
            <p class="animate-on-scroll">
			DRONE GROUPE, grâce à des recherches poussées, a réussi à développer au moyen de l'intelligence artificielle, une solution innovante permettant de numériser les capacités intrinsèques de l'être humain et son environnement.
			Ainsi, nous offrons aux particuliers, entreprises et organisations, la possibilité de fonctionner plus efficacement, car ayant des employés et des collaborateurs plus efficients à leurs postes.</p>
			<h3 class="sec">QU'EST CE QUE LA MANAGEMENT CAPACITAIRE</h3>
            <div class="barre-2"></div>
            <p class="animate-on-scroll">
			Le management capacitaire prend en compte les exigences capacitaires des entreprises, des organisations et des postes de travail, et leur confrontation aux capacités des postulants ou des salariés. C’est un moyen complémentaire aux méthodes classiques traditionnellement utilisées pour les prises de décision. Le management capacitaire permet d’améliorer la performance et l’efficacité des organisations et des entreprises par la réduction des dysfonctionnements résultant des insuffisances capacitaires humaines, par un choix optimal dès le recrutement et de l’affectation du personnel à des postes adéquats.
			Le management capacitaire utilise des outils innovants permettant de répondre aux interrogations portant sur des questions irrationnelles telles que :</p>
            <div class="barre-2"></div>
			<ul class="animate-on-scroll">
				<li class="animate-on-scroll"><i class="fa fa-check"></i>LA CAPACITE DE PROBITE MORALE OU D'INTEGRITE</li>
				<li class="animate-on-scroll"><i class="fa fa-check"></i>LA CAPACITE DE GESTION DE CONFLITS, DE REGULATION OU D'AUTO-REGULATION</li>
				<li class="animate-on-scroll"><i class="fa fa-check"></i>LA CAPACITE DE LUCIDITE, DE VIGILANCE ET D'ATTENTION</li>
				<li class="animate-on-scroll"><i class="fa fa-check"></i>LA CAPACITE DE REFLEXION (ELABORATION DE STRATEGIES ET DE SCENARIOS)</li>
				<li class="animate-on-scroll"><i class="fa fa-check"></i>LA CAPACITE ENTREPRENARIALE</li>
				<li class="animate-on-scroll"><i class="fa fa-check"></i>LA CAPACITE MANAGERIALE</li>
				<li class="animate-on-scroll"><i class="fa fa-check"></i>LA CAPACITE D'ENDURANCE ET DE PERSEVERANCE</li>
				<li class="animate-on-scroll"><i class="fa fa-check"></i>LA CAPACITE DE DYNAMISME ET DE MOBILISATION DE RESSOURCES</li>
			</ul>
		</section>
		<section id="metier" class="metier">
            <h3 class="sec">NOS METIERS</h3>
            <div class="metiers animate-on-scroll">
                <div class="text">
                    <h3>AUDIT ET DETECTION DES INFRASTRUCTURES AERIENNES, ENTERREES, TERRESTES ET SOUS-TERRAINES, MARINES ET SOUS-MARINES</h3>
                    <P>AVEC NOS SOLUTIONS DE DETECTION POUR DECOUVRIR DES DONNEES DE RESEAUX, RELEVER NUMERIQUEMENT VOS SOUS-SURFACES ET LES CONVERTIR IMMEDIATEMENT EN INFORMATIONS EXPLOITABLES ADAPTEES A VOS BESOINS, AUSSI BIEN SUR LE TERRAIN </P>
                </div>
                <div class="image"><img src="images/M11-02.jpg" alt=""></div>
            </div>
            <div class="metiers animate-on-scroll">
                <div class="text">
                    <h3>TRAITEMENT DE DONNEES</h3>
                    <P>(CARTOGRAPHIE, TERMOGRAPHIE, LASEROGRAMMETRIE, ORTHOPHOTO, PHOTOGRAMMETRIE)</P>
                </div>
                <div class="image"><img src="images/M11-02.jpg" alt="" ></div>
            </div>
            <div class="metiers animate-on-scroll">
                <div class="text">
                    <h3>FORMATION TELEPILOTES</h3>
                    <P>NOTRE CENTRE DE FORMATION HOMOLOGUE PAR L'ANAC DISPENSE DES FORMATIONS THEORIQUES, PRATIQUES OU ENCORE SPECIALISEES POUR FAIRE DE VOUS DES PROFESSIONNELS. </P>
                </div>
                <div class="image"><img src="images/M11-02-01.jpg" alt="" ></div>
            </div>
            <div class="metiers animate-on-scroll">
                <div class="text">
                    <h3>EXPLORATION CAPACITAIRE</h3>
                    <P>GRACE A NOS RECHERCHES POUSSES , NOUS AVONS REUSSIT A DEVELOPPER AU MOYEN DE L'INTELLIGENCE ARTIFICIELLE, UNE SOLUTION INNOVANTE PERMETTANT DE NUMERISER LES CAPACITES INTRINSEQUE(APTITUDE NATURELLE, INNEE) DE L'ETRE HUMAIN ET SON ENVIRONNEMENT, AINSI NOUS OFFRONS AUX PARTICULIERS, ENTREPRISES ET ORGANISATIONS, LA POSSIBILITE DE FONCTIONNER PLUS EFFICACEMENT, CAR AYANT DES EMPLOYES ET DES COLLABORATEURS PLUS EFFICACES A LEURS POSTES.</P>
                </div>
                <div class="image"><img src="images/M2_Plan de travail 1-01.jpg" alt="" ></div>
            </div>
            <div class="metiers animate-on-scroll">
                <div class="text">
                    <h3>SECURITE PUPLIQUE ET SURVEILLANCE</h3>
                    <P>(RECONNAISSANCE FACIALE PAR IA)</P>
                </div>
                <div class="image"><img src="images/neuronne2.png" alt="" style="height=300px; width=300px"></div>
            </div>
		</section>
		<section class="special">
			<h1>NOS SPECIALITES</h1>
			<div class="barre"  style="margin-left: 540px; margin-right:540px; height:0.5px; margin-top:-25px;"></div>
			<div class="first-ligne">
			<div class="specials animate-on-scroll">
			<div class="image"><img src="images/M12_Plan de travail 1-01.jpg" alt=""></div>
                <div class="text">
                    <h6  style="color: #fff;">DETECTER, REPERTORIER, NUMERISER</h6>
					<div class="barre"></div>
                    <P>INSPECTION TEMPORELLE DES BATIMENTS, CHANTIERS, BTP</P>
                </div>
            </div>
            <div class="specials animate-on-scroll">
				<div class="image"><img src="images/M13-01.jpg" alt=""></div>
				<div class="text">
                    <h6  style="color: #fff;">CARTOGRAPHIE, TOPOGRAPHIE</h6>
					<div class="barre"></div>
                    <P>TERRAIN, ZONAGE, ETC</P>
                </div>
            </div>
			</div>
			<div class="second-ligne">
			<div class="specials animate-on-scroll">
				<div class="image"><img src="images/KKK-01.jpg" alt=""></div>
				<div class="text">	
                    <h6  style="color: #fff;">ETUDIER, EVALUER, INSPECTER, CONTROLLER</h6>
					<div class="barre"></div>
                    <P>PHOTOGRAPHIE <strong>3D</strong>, VIDEO <strong>4K</strong> AERIENNE ET PANORAMIQUE SED</P>
                </div>
            </div>
            <div class="specials animate-on-scroll">
				<div class="image"><img src="images/EEE- 1-01.jpg" alt=""></div>
                <div class="text">
                    <h6 style="color: #fff;">REALITE AUGMENTEE, TOURS ET VISITES VIRTUELLES</h6>
					<div class="barre"></div>
                    <P>AFFICHAGE D'INFRASTRUCTURES AVEC LA REALITE AUGMENTEE, VIRTUALISATION DE L'ENVIRONNEMENT INTERIEUR ET EXTERIEUR</P>
                </div>
               
            </div>
			</div>

		</section>
		@include('sections.footer')


	<!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<!-- <div id="gotoTop" class="uil uil-angle-up"></div> -->

	<!-- JavaScripts
	============================================= -->
	<script src="js/plugins.min.js"></script>
	<script src="js/functions.bundle.js"></script>
    <script src="js/plugins.min.js"></script>
	<script src="js/functions.bundle.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

	<script>

jQuery(window).on( 'load', function(){
			jQuery('.primary-menu').each( function(){
				let menuEl = jQuery(this),
					marker = menuEl.find('.morph-marker'),
					current = menuEl.find('.current');

				// Initialize the marker position and the active class
				current.addClass('active');

				marker.css({
					// Place the marker in the middle of the border
					bottom: -(marker.height() / 2),
					left: current.position().left,
					width: current.outerWidth(),
				});


				if (Modernizr.csstransitions) {
					// console.log("using css3 transitions");
					menuEl.find('.menu-item').mouseover(function () {
						var self = jQuery(this),
							offsetLeft = self.position().left,

						// Use the element under the pointer OR the current page item
						width = self.outerWidth() || current.outerWidth(),
						// Ternary operator, because if using OR when offsetLeft is 0, it is considered a falsy value, thus causing a bug for the first element.
						left = offsetLeft == 0 ? 0 : offsetLeft || current.position().left;
						// Play with the active class
						menuEl.find('.active').removeClass('active');
						self.addClass('active');
						marker.css({
							left: left,
							width: width,
						});
					});

					// When the mouse leaves the menu
					menuEl.find('.menu-container').mouseleave(function () {
					// remove all active classes, add active class to the current page item
						menuEl.find('.active').removeClass('active');
						current.addClass('active');
					// reset the marker to the current page item position and width
						marker.css({
							left: current.position().left,
							width: current.outerWidth()
						});
					});

				} else {

					menuEl.find('.menu-item').mouseover(function () {
						var self = jQuery(this),
							offsetLeft = self.position().left,
							// Use the element under the pointer OR the current page item
							width = self.outerWidth() || current.outerWidth(),
							// Ternary operator, because if using OR when offsetLeft is 0, it is considered a falsy value, thus causing a bug for the first element.
							left = offsetLeft == 0 ? 0 : offsetLeft || current.position().left;
						// Play with the active class
						menuEl.find('.active').removeClass('active');
						self.addClass('active');
						marker.stop().animate({
							left: left,
							width: width,
						}, 300);
					});

					// When the mouse leaves the menu
					menuEl.find('.menu-container').mouseleave(function () {
						// remove all active classes, add active class to the current page item
						menuEl.find('.active').removeClass('active');
						current.addClass('active');
						// reset the marker to the current page item position and width
						marker.stop().animate({
							left: current.position().left,
							width: current.outerWidth()
						}, 300);
					});
				}
			});
		});
		jQuery(window).on( 'load', function(){
			var cssVarSpeed = getComputedStyle(document.querySelector('.swiper-pagination'));
			var swiperSpeed = (cssVarSpeed.getPropertyValue('--cnvs-swiper-autoplay-speed')).split('ms');

			var swiper = new Swiper('.swiper', {
				slidesPerView: '1',
				loop: true,
				disableOnInteraction: false,
				effect: "fade",
				autoplay: {
					delay: Number( swiperSpeed[0] ),
					disableOnInteraction: false,
				},
				pagination: {
					el: '.swiper-pagination',
					clickable: 'true',
					type: 'bullets',
					renderBullet: function (index, className) {
						return '<span class="' + className + '">' + '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="50" cy="50" r="40"></svg>' + '</span>';
					},
				}
			});
		});

		// When the user scrolls the page, execute myFunction
			window.onscroll = function() {myFunction()};

			// Get the header
			var header = document.getElementById("header");

			// Get the offset position of the navbar
			var sticky = header.offsetTop;

			// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
			function myFunction() {
			if (window.pageYOffset > sticky) {
				header.classList.add("sticky");
			} else {
				header.classList.remove("sticky");
			}
			}

			function changeColor() {
            var myDiv = document.getElementById('container');

            // Changer la couleur de la div en noir
            myDiv.style.backgroundColor = 'black';
			 }

			document.addEventListener("DOMContentLoaded", function() {
				// Fonction pour observer les éléments et appliquer la classe "is-visible"
				function handleIntersection(entries, observer) {
					entries.forEach(entry => {
						if (entry.isIntersecting) {
							entry.target.classList.add('is-visible');
							observer.unobserve(entry.target);
						}
					});
				}

            // Créer un nouvel observateur d'intersection avec la fonction de gestion
            const observer = new IntersectionObserver(handleIntersection, { rootMargin: "-50px 0px" });

            // Observez tous les éléments avec la classe "animate-on-scroll"
            document.querySelectorAll('.animate-on-scroll').forEach(el => observer.observe(el));
        });

		var videoEl = document.querySelector('#slide-video'),
			videoMute = document.querySelector('#video-slider-mute');

		videoMute.onclick = function(e) {
			e.preventDefault();

			if( videoMute.classList.contains('video-muted') ) {
				videoEl.muted = true;
			} else {
				videoEl.muted = false;
			}

			videoMute.classList.toggle('video-muted');
		};

		function scrollToTop() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth' // Faites défiler en douceur
    });
}

// Afficher ou masquer la flèche en fonction de la position de défilement
	window.onscroll = function () {
		var scrollButton = document.querySelector('.scroll-to-top');

		if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
			scrollButton.style.display = 'block';
		} else {
			scrollButton.style.display = 'none';
		}
	};

	document.addEventListener("DOMContentLoaded", function() {
    window.addEventListener("scroll", function() {
        var specialsElements = document.querySelectorAll(".specials");
        
        specialsElements.forEach(function(element) {
            if (isElementInViewport(element)) {
                element.classList.add("show");
            }
        });
    });

    function isElementInViewport(el) {
        var rect = el.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }
});
  </script>

</body>
</html>