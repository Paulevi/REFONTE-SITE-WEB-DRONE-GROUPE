<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta http-equiv="x-ua-compatible" content="IE=edge">
	<meta name="author" content="SemiColonWeb">
	<meta name="description" content="Get Canvas to build powerful websites easily with the Highly Customizable &amp; Best Selling Bootstrap Template, today.">

	<!-- Font Imports -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&family=Noto+Serif:ital,wght@1,700&display=swap" rel="stylesheet">

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

		:root,
		.dark .primary-menu.style-3,
		.dark .button {
			--cnvs-dark-color: #000000;
			--cnvs-btn-color: #E7301C;
			--cnvs-btn-padding-x: 1.125rem;
    		--cnvs-btn-padding-y: 1rem;
			--cnvs-btn-fontsize: 1rem;
			--cnvs-btn-lineheight: 1;
		}

		.dark .button-dark:not(.button-border):not(:hover), .dark .button:hover {
			background-color: var(--cnvs-btn-color);
		}

		.dark #header,
		#header.dark,
		.dark #header-wrap {
			background-color: var(--cnvs-dark-color);
		}

        .center-nav {
        position: relative;
        left: -30%;
        
    }
    
		@media (min-width: 992px) {

			.dark .style-3 .menu-container > .menu-item:not(:first-child) {
				margin-left: 1.75rem;
			}

			.dark .style-3 .menu-container > .menu-item > .menu-link {
				padding: var(--cnvs-btn-padding-y) var(--cnvs-btn-padding-x);
				font-size: var(--cnvs-btn-fontsize);
				line-height: var(--cnvs-btn-lineheight);
				font-weight: 500;
				border-radius: 0.5rem;
			}


			.dark .style-3 .menu-container > .menu-item:hover > .menu-link,
			.dark .style-3 .menu-container > .menu-item.current > .menu-link,
			.dark .style-3 .menu-container > .menu-item.menu-item-open > .menu-link {
				color: #FFF;
				
				text-shadow: none;
                transition: all .2s ease;
			}

			.dark .style-3 .menu-container > .menu-item:not(.mega-menu) .sub-menu-container:not([class*='col']) {
				margin-top: 30px;
				border: 0;
				border-radius: 0.5rem;
				background-color: var(--cnvs-dark-color);
				padding-left: 0;
				padding-right: 0;
			}

			.dark .style-3 .sub-menu-container .menu-item > .menu-link {
				
				font-size: .95rem;
				padding: 0.75rem 1.375rem;
                transition: all .2s ease;
			}

			.dark .style-3 .sub-menu-container .menu-item:hover > .menu-link {
				
				
				font-weight: normal !important;
				padding: 0.75rem 1.5rem;
			}

			.dark .style-3.with-arrows .menu-container > .menu-item > .menu-link div > i.bi-caret-down-fill {
				font-size: 1.125rem;
				margin-left: 10px;
				transition: transform .2s ease;
			}

			.dark .style-3.with-arrows .menu-container > .menu-item.menu-item-open > .menu-link div > i.bi-caret-down-fill {
				transform: rotate(-180deg);
			}

			.dark .style-3.with-arrows .menu-container > .menu-item > .menu-link div > i.bi-caret-down-fill::before {
				
			}

		}

	</style>
	<style>
        
		#content{
			margin-top: 30px;
			margin-bottom:30px;
		}
        .content1{
			background-color:#000000;
			padding: 50px;
			width: 40%;
		}

		.content1>h1{
			color:#ffffff;
			font-family:arial;
			font-size:50px
		}
       
		.content-wrap{
			display: flex;
			height: 80vh;
		}

		.barre{
			height: 3px;
			background-color: #ffffff;
			margin-top: 30px;
		}
		.swiper-pagination {
			--cnvs-swiper-bar-color: #000;
			--cnvs-swiper-bar-size: 30px;
			--cnvs-swiper-bar-dot-size: 8px;
			--cnvs-swiper-bar-dot-color: #000;
			--cnvs-swiper-stroke-width: 6;
			--cnvs-swiper-autoplay-speed: 5000ms;
			--cnvs-swiper-bullet-gutter: 3px;
			--cnvs-swiper-bullet-offset: 25px;

			bottom: var(--cnvs-swiper-bullet-offset) !important;
		}

		.swiper-pagination.center-left,
		.swiper-pagination.center-right {
			display: block;
			width: var(--cnvs-swiper-bar-size);
			top: 50% !important;
			bottom: auto !important;
			left: var(--cnvs-swiper-bullet-offset) !important;
			transform: translateY(-50%);
		}

		.swiper-pagination.center-right {
			right: var(--cnvs-swiper-bullet-offset) !important;
			left: auto !important;
		}

		.dark .swiper-pagination,
        .dark.swiper-pagination {
			--cnvs-swiper-bar-color: var(--bs-light);
			--cnvs-swiper-bar-dot-color: var(--bs-light);
		}

		.swiper-pagination span,
		.swiper-pagination-bullet svg {
			position: relative;
			width: var(--cnvs-swiper-bar-size);
			height: var(--cnvs-swiper-bar-size);
			background-color: transparent;
			border: 0;
		}

		.swiper-horizontal>.swiper-pagination-bullets .swiper-pagination-bullet {
			margin: 0 var(--cnvs-swiper-bullet-gutter);
		}

		.swiper-horizontal>.swiper-pagination.center-left.swiper-pagination-bullets .swiper-pagination-bullet,
		.swiper-horizontal>.swiper-pagination.center-right.swiper-pagination-bullets .swiper-pagination-bullet {
			margin: var(--cnvs-swiper-bullet-gutter) 0;
		}

		.swiper-pagination span:hover,
		.swiper-pagination span.swiper-pagination-bullet-active {
			background: transparent !important;
		}


		.swiper-pagination-bullet circle {
			stroke: var(--cnvs-swiper-bar-color);
			stroke-width: var(--cnvs-swiper-stroke-width);
			fill: none;
		}

		.swiper-pagination-bullet::before {
			content: "";
			position: absolute;
			left: 50%;
			top: 50%;
			width: var(--cnvs-swiper-bar-dot-size);
			height: var(--cnvs-swiper-bar-dot-size);
			background: var(--cnvs-swiper-bar-dot-color);
			border-radius: 50%;
			transform: translate(-50%, -50%);
		}

		.swiper-pagination-bullet circle {
			stroke-dashoffset: 260;
			stroke-dasharray: 259;
		}
		.swiper-pagination-bullet-active circle {
			transform: rotate(-90deg);
			transform-origin: center;
			animation-name: swiperSVGAnim;
			animation-duration: var(--cnvs-swiper-autoplay-speed);
			animation-timing-function: ease-in;
			animation-iteration-count: 1;
			animation-direction: alternate;
			animation-fill-mode: forwards;
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

		.Title{
			height: 20%;
			width: 100%;
			opacity: 0.7;
			box-shadow: 8px 15px 20px ;
		}
		.Title>a> h3{
			
			color: yellow;
		}
		.sticky {
  position: fixed;
  top: 0;
  width: 100%
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

						<!-- Logo
						============================================= -->
						<div id="logo">
							<a href="#">
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
						<nav class="primary-menu with-arrows on-click style-3 menu-spacing-margin  center-nav">

							<ul class="menu-container">
								<li class="menu-item">
									<a class="menu-link" href="demo-seo.html">
										<div>Notre centre de formation</div>
									</a>
									<ul class="sub-menu-container">
										<li class="menu-item"><a class="menu-link" href="intro.html#section-niche"><div>FORMATION THEORIQIUE</div></a></li>
										<li class="menu-item"><a class="menu-link" href="intro.html#section-niche"><div>FORMATION PRATIQUE</div></a></li>
										<li class="menu-item"><a class="menu-link" href="intro.html#section-niche"><div>FORMATION SPECIALISEE</div></a></li>
										<li class="menu-item"><a class="menu-link" href="intro.html#section-niche"><div>FORMATION AU TELEPILOTAGE</div></a></li>

										
									</ul>
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
			<div class=" content1">
				<h1>BIENVENUE CHEZ LES PROFESSIONNELS DU DRONE</h1>
				<div class="barre"></div>
			</div>

			<div class="slider-element swiper_wrapper dark min-vh-100 customjs">
				<div class="swiper swiper-parent">
					<div class="swiper-wrapper">
					<div class="swiper-slide">
					<div class="swiper-slide-bg" style="background-image: url('images/M3_Plan de travail 1-01.jpg');"></div>
				</div>
				<div class="swiper-slide">
					<div class="swiper-slide-bg" style="background-image: url('images/M8_Plan de travail 1-01.png');"></div>
				</div>
				<div class="swiper-slide">
					<div class="swiper-slide-bg" style="background-image: url('images/M11-02-01.jpg');"></div>
				</div>
			</div>
			<div class="swiper-pagination"></div>
		</div>
	</section><!-- #content end -->
	<section>
    <div class="container mw-md" style="padding: 10px;">
        <div class="row align-items-stretch ">
            <div class="col-md-6 col-padding">
                <div class="feature-box fbox-center fbox-dark fbox-plain fbox-lg" style='background-image:url("images/M6_Plan de travail 1-01-01-01-01.jpg"); background-size: cover;'>
                    <div class="Title" style="background-color: blue;">
                        <a href="#"><h3 class="text-transform-none ls-0 text-larger mt-3" style="color: yellow;">PRESENTATION</h3></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-padding">
                <div class="feature-box fbox-center fbox-dark fbox-plain fbox-lg" style='background-image:url("images/M5_Plan de travail 1-01-01-01.jpg");background-size: cover;'>
                    <div class="Title" style="background-color: blue;">
					<a href="#"> <h3 class="text-transform-none ls-0 text-larger mt-3">NOS METIERS</h3></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-padding">
                <div class="feature-box fbox-center fbox-dark fbox-plain fbox-lg" style='background-image:url("images/M7_Plan de travail 1-01-01-01-01-01.jpg");background-size: cover;'>
                    <div class="Title" style="background-color: blue;">
					<a href="#"><h3 class="text-transform-none ls-0 text-larger mt-3">NOS FORMATIONS</h3></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-padding">
                <div class="feature-box fbox-center fbox-dark fbox-plain fbox-lg" style='background-image:url("images/M8_Plan de travail 1-01.png");background-size: cover;'>
                    <div class="Title" style="background-color: blue;">
					<a href="#"><h3 class="text-transform-none ls-0 text-larger mt-3">NOS EQUIPEMENTS ET MISSIONS REALISEE</h3></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

	<!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<!-- <div id="gotoTop" class="uil uil-angle-up"></div> -->

	<!-- JavaScripts
	============================================= -->
	<script src="js/plugins.min.js"></script>
	<script src="js/functions.bundle.js"></script>

	<script>
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
  </script>

</body>
</html>