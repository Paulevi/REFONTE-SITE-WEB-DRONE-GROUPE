@php
    $videos = App\Models\VideosModel::all();
@endphp
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
	<link rel="shortcut icon" type="image/x-icon" href="images/logodronegroupe.png"/>	<!-- Core Style -->
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

            @-webkit-keyframes scaleIn {
			to {
				transform: scale(1.3, 1.3);
			}
			}
			@keyframes scaleIn {
			to {
				transform: scale(1.3, 1.3);
			}
		}
		.scaleIn {
			-webkit-animation-name: scaleIn;
			animation-name: scaleIn;
		}

		@-webkit-keyframes scaleOut {
			from {
				transform: scale(1.3, 1.3);
			}
			}
			@keyframes scaleOut {
			from {
				transform: scale(1.3, 1.3);
			}
		}
		.scaleOut {
			-webkit-animation-name: scaleOut;
			animation-name: scaleOut;
		}

		#content{
			
			height: 70vh;
			margin-top: 30px;
			margin-bottom:30px;
		}
        .content1{
			height: 70vh;
			background-color:#000000;
			padding: 50px;
			padding-top: 90px;
			width: 40%;
		}

		.content1>h1{
			color:#ffffff;
			font-family:'jumper PERSONAL USE ONLY', sans-serif;
			font-size:60px
		}
		.content2{
			height: 70vh;
			width: 60%;
		}
			
		@keyframes swiperSVGAnim {
			0% {
				stroke-dashoffset: 260;
			}
			100% {
				stroke-dashoffset: 0;
			}
		}

		.feature-box{
			height: 400px;
			width: 400px;
		}

		.hidden{
			display:none;
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

		/* .article{
			width: 300px;
            height: 500px;
		} */

		#video-slider-mute {
            position: absolute;
            top: auto;
            left: auto;
            right: 20px;
            bottom: 10px;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: var(--cnvs-contrast-0);
            color: var(--cnvs-contrast-1000);
            font-size: 1.25rem;
            border: 0;
        }

		.menu{
			margin-top: 20px;
		}

        #video-slider-mute i {
            position: relative;
            left: 1px;
        }

		

        #video-slider-mute i:nth-of-type(2),
        #video-slider-mute.video-muted i:nth-of-type(1) { display: none; }

        #video-slider-mute.video-muted i:nth-of-type(2) { display: block; }

        /* #portfolio{
         flex-direction: column;
        align-items: stretch;
        } */

@media screen and (max-width: 769px){
	
		#content{
		height: 350px ;
		margin-bottom:50px;
		}
		.content1{
			display:none;
			background-color:transparent;
			padding: 30px;
			width: 50%;
			height: 350px ;
		}
		.content2 {
			height: 350px ;
			width: 100%;
		}

		.hidden>h1, .barre{
			font-family:'jumper PERSONAL USE ONLY', sans-serif;
			text-align: center;
			font-size: 35px;
			position: relative;
			bottom:110%;
		}

		.hidden{
			/* background-color:RED; */
			position: relative;
			bottom:50%;
			display:unset;
		}

		.content2>iframe{
			height: 350px ;
			width: 100%;                                                               
		}  

		.content1>h1{
		    margin-top:35px;
			text-align:center;
			color:#ffffff;
			font-size:20px;
			
		}

		.first-row, .second-row{
			flex-direction: column;
			align-items: stretch;
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
		.sub-menu-container > .menu-item > .menu-link:hover{
			color: yellow;
		}
		.menu-container > .menu-item > .menu-link:hover{
			color: yellow;
		}

		.menu-item{
			text-align: justify;
			border-bottom: 2px solid #fff;
		}
  
	}

	@media (min-width: 770px) and (max-width: 950px){

			#content{
				height: 500px ;

			}

			.hidden>h1, .barre{
			font-family:'jumper PERSONAL USE ONLY', sans-serif;
			text-align: center;
			position: relative;
			bottom:130%;
		}

			.content1{
			background-color:#000000;
			padding: 50px;
			width: 70%;
			height: 500px ;
			}

				
			.content1>h1{
			margin-top:20px;
			color:#ffffff;
			font-size:45px;
			}

			.content2 {
				height: 500px ;
				width: 100%;
				background-color:#000000;
			}

			.content2>iframe{
				height: 500px ;
				width: 100%;                                                               
			}  


			#video h1{
				font-size:10px;
			} 
			.menu-item{
			text-align: justify;
			border-bottom: 2px solid #fff;
		}

	}

		@media (min-width: 951px) and (max-width: 1400px){

		#content{
			height: 500px ;

		}

		.content1{
			background-color:#000000;
			padding: 50px;
			width: 70%;
			height: 500px ;
		}

				
		.content1>h1{
			margin-top:20px;
			color:#ffffff;
			font-size: 45px;;
		}

		.content2 {
			height: 500px ;
			width: 100%;
			background-color:#000000;
		}

			.content2>iframe{
			height: 500px ;
			width: 100%;                                                               
		}  

		}	

.grid-inner{
	border-radius: 10px;
}

.grid-inner>.portfolio-image>a>.minia{
		height: 200px;
		border-radius: 0px;}

.portfolio-desc{
	background-color:#000;
	color:#fff;
	height:100px;

}

.portfolio-desc>h3{
	color:#fff;
	font-family: 'jumper PERSONAL USE ONLY', sans-serif;;
}
.portfolio {
	margin-top: 50px;
}

#logo > a{
		height: 35px;
	}

.portfolio-item{
	margin-left:10px;
	width: 650px;
	height: 450px;
	border-radius:20px;
	
}

.iframe{
	width: 650px;
	/* border-radius:10px 10px 0px 0px; */
	height: 400px;
}

.portfolio-item>h1{
	/* height: 80px; */
	text-align:center;
	font-size: 35px;
	background-color:#000;
	color:#fff;
	margin-top:5px;
	/* border-radius:0px 0px 10px 10px; */
}




</style>

</head>

	<body id="body" class="body">
		
	<div id="loader"></div>


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
								<li class="menu-item " >
									<a class="menu-link" href="{{url('/presentation')}}" >
										<div >PRéSENTATION</div>
									</a>
								</li>
                                <li class="menu-item">
									<a class="menu-link" href="{{url('/metier')}}" >
										<div >NOS METIERS</div>
									</a>
								</li>
                                <li class="menu-item">
									<a class="menu-link" href="{{url('/formation')}}" >
										<div >NOS FORMATIONS</div>
									</a>
								</li>
								<li class="menu-item current">
									<a class="menu-link" href="{{url('/video')}}" >
										<div >VIDÉOTHèQUE</div>
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
					<h1 class="text-transform-none " data-animate="fadeInUp">BIENVENUE À NOTRE VIDÉOTHÈQUE</h1>
					<div class="barre"></div>
				</div>
				<div class="content2 section dark m-0 border-0 mt-0">
					<div class="container d-flex justify-content-center align-items-end" style="min-height: 450px;">
						<div class="row g-5 justify-content-between">
							<div class="col-md-4 hidden">
							<h1 class="text-transform-none " data-animate="fadeInUp">BIENVENUE À NOTRE VIDEOTHÈQUE</h1>
					<div class="barre"></div>
							</div>
						</div>
					</div>
					<div class="video-wrap no-placeholder">
						<video poster="images/videos/deskwork.jpg" preload="auto" loop autoplay muted playsinline>
							<source src='demos/drone/images/video.mp4' type='video/mp4'>
						</video>
						<div class="position-absolute w-100 h-100 top-0 start-0 z-1 bg-dark bg-opacity-10"></div>
					</div>
				</div>
			
		<div>
		</section><!-- #content end -->
		<!-- Portfolio Item: Start -->
		<section>
                    <div class="container">
                         <div id="portfolio"  class="portfolio row gutter-40">
						 @foreach ($videos as $video)
							<article class= "portfolio-item col-lg-3 col-md-4 col-sm-6 col-12 animate-on-scroll ">
								<iframe class="iframe" src="{{$video->lien_video}}" frameborder="0" allowfullscreen></iframe>
								<h1>{{$video->titre_video}}</h1>
							</article>
							@endforeach
					 </div>

		</section>
		@include('sections.footer')
		
		</body>

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
  </script>


</html>