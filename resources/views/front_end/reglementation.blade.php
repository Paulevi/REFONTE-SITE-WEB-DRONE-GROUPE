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
                font-family:'DIN', sans-serif;
            }
 
			.content2{
            background-image:url("images/M1_Plan de travail 1.jpg");
            background-size:cover;
            width:60%;                                                                
        }  

		.sec{
			background-color:#6A5ACD;
			width: 1200px; 
			box-shadow: 10px 5px 5px 0px rgba(0, 0, 0, 0.5);
			margin-left: 10px;
            color: yellow;
			padding-left:35px;
			font-weight: lighter;
			font-family:'DIN Regular', sans-serif;
		}

		.text> ul > li{
			list-style: none;
		}

		.num{
		    height: 40px;
            width: 100px;
            background-color:#FFD966;
            font-size: 25px;
            color:#483D8B;
            font-weight:bold;
            padding:5px;
            margin: 20px;
            position: relative;
            left:80%;
            box-shadow: 10px 5px 5px 0px rgba(0, 0, 0, 0.5);
            
        }

        .sub-regle{
            margin-left: 10%;
            margin-RIGHt: 10%;
        }

        .regle> .sub-regle >ul>li{
           
            list-style: none;
        }
		

		#content{
			margin-top: 30px;
			margin-bottom:30px;
		}
        .content1{
			background-color:#000000;
			padding: 50px;
			width:60%;
		}

		.content1>h1{
			color:#ffffff;
			font-family:arial;
			font-size:50px
		}
       
		.content-wrap{
			display: flex;
			
		}


		@keyframes swiperSVGAnim {
			0% {
				stroke-dashoffset: 260;
			}
			100% {
				stroke-dashoffset: 0;
			}
		}

	
		.menu-item{
			text-align: center;
		}
	
		.button.button-reveal i {
			opacity: 0;
			left: auto !important;
			right: 20px !important;
			background-color: transparent;
			transition: all .3s ease !important;
		}
@media screen and (max-width: 769px){

		#content{
			height: 30vh;	
			margin-bottom:150px;
		}
		.content1{
			background-color: #000000;
			padding: 30px;
			width: 50%;
			height: 30vh;
		}

		.content2 {
			height: 30vh ;
			width: 100%;
		}
		.content1>h1{
		    margin-top:20px;
			color:#ffffff;
			font-size:15px;
			
		}


		.sec{
			background-color:#6A5ACD;
			width: 400px;
			box-shadow: 10px 5px 5px 0px rgba(0, 0, 0, 0.5);
			margin-left: 10px;
            color: yellow;
			padding-left:35px;
			font-weight: lighter;
			font-family:'DIN Regular', sans-serif; 

	}
}


@media (min-width: 770px) and (max-width: 1400px){
	


	.content1{
	background-color:#000000;
	padding: 50px;
	width: 70%;
	height: 60vh;
}

	.sec{
		background-color:#6A5ACD;
		width: 500px;
}

		
.content1>h1{
	 margin-top:20px;
	color:#ffffff;
	font-family:arial;
	font-size: 45px;;
}
		
	.content2 {
		height: 60vh;
		width: 100%;
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
						<nav class="primary-menu with-arrows on-click style-3 menu-spacing-margin  center-nav" style="position:relative; left: 5px;">

							<ul class="menu-container" >
								<li class="menu-item">
									<a class="menu-link" href="{{url('/presentation')}}" >
										<div >PRESENTATION</div>
									</a>
								</li>
                                <li class="menu-item ">
									<a class="menu-link" href="{{url('/metier')}}" >
										<div >NOS METIERS</div>
									</a>
								</li>
                                <li class="menu-item ">
									<a class="menu-link" href="{{url('/formation')}}" >
										<div >NOS FORMATIONS</div>
									</a>
								</li>
								
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
					<h1 style=" font-family:'DIN', sans-serif;"> EXTRAIT DU REGLEMENT AERONAUTIQUE DE COTE D'IVOIRE (RACI 2009) AMENDEMENT 02, EDITION 03</h1>
				</div>
				<div class="content2" >
                </div>
		<div>
		</section><!-- #content end -->
		<section class="regle">
    		<h3 class="sec animate-on-scroll">CHAPITRE 7: AUTORISATIONS ET TITRE D'UTILISATION DES AERONEFS TELEPILOTES</h3>
            <div class="sub-regle">
            <div class="barre"></div>
            <p class="animate-on-scroll">
			Nul ne peut exploiter un Aéronef Télépiloté sans y avoir été formellement autorisé par l'ANAC.
            </p>
            <div class="num animate-on-scroll"> 7.1.1</div>
            <p  class="animate-on-scroll">
            Un exploitant ne peut exploiter un Aéronef Télépiloté pour des activités de travail aérien que s'il détient un agrément de travail aérien et une Autorisation d'Exploitation d' Aéronef Télépiloté (AEAT) en état de validité délivré par l'ANAC.
            </p>
            <div class="num animate-on-scroll">7.1.2</div>
            <p  class="animate-on-scroll">
            Pour postuler à un AEAT, un opérateur doit détenir un Agrément de travail aérien et soumettre un dossier de cantidature à l'ANAC au moin quatre-vingt-dix (90) jours avant la date prévue d'exploitation
            </p>
            <div class="num animate-on-scroll">7.3.3</div>
            <p  class="animate-on-scroll">
           Les dossiers de candidature mentionnés au<span> 7.3.3 </span> doit contenir au moin les éléments suivants:
            </p>
            <ul class="animate-on-scroll">
                <li>a) Un courrier de demande d'autorisation</li>
                <li>b) Une lettre d'engagement du postulant</li>
                <li>c) Une autorisation du ministère de la défense nationnale autorisant les activités particulières projetées</li>
                <li>d)Une autorisation du ministère en charge de la sécurité autorisant les activités projetées</li>
                <li>e) l'attestation d'enregistrement de chaque aéronef télépiloté</li>
                <li>f) les manuels d'utilisation de chaque type d'aéronef télépiloté</li>
                <li>g) les manuels d'entretien de chaque type d'aéronef télépiloté, si applicable</li>
                <li>h) la licence, la certification ou l'attestation de formation de chaque télépilote</li>
                <li>i)Une police d'assurance couvrant l'activité projetée</li>
                <li>j) Le manuel d'activité particulière rédigé conformément aux spécificaxion de l'appendice <span>3</span> au présent règlement.</li>
            </ul>
            <div class="num animate-on-scroll">7.3.4</div>
            </div>
            <h3 class="sec animate-on-scroll">CHAPITRE 8:FORMATION DES TELEPILOTES</h3>
            <div class="sub-regle">
            <p  class="animate-on-scroll">
            Nul ne peut piloter un RPA s'il n'est titulaire d'une Attestation, d'un Certificat ou d'une Licence de Télépilote en état de validité reconnue, délivrée ou validée par l'ANAC conformément aux dispositions du RACI 2000.
            </p>
            <div class="num animate-on-scroll">8.1.1</div>
            <p  class="animate-on-scroll">
            La formation théorique doit être dispensée dans un organisme de formation agréé ou habileté et le programme de formation doit être accepté par l'ANAC
            </p>
            <div class="num animate-on-scroll">8.2.2.2</div>
             </div>
            <div class="barre"></div>
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