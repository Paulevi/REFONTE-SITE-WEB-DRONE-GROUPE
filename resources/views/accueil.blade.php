
@php
    $actus = App\Models\actu_model::all(); 
@endphp
<!DOCTYPE html>
<html dir="ltr" lang="fr">
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




		@font-face {
			font-family: 'Jumper PERSONAL USE ONLY-Regular';
			src: url('police/jumper/JumperPERSONALUSEONLY-Regular.ttf') format('ttf'); 
			font-weight: normal;
			font-style: normal;
			}
  
			
			body{
                font-family:'Jumper PERSONAL USE ONLY-Regular', sans-serif;
            }

			.swiper-slide{
				display:flex;
			}

			 .content1>a {
				margin-top: 60px;
				height: auto !important;
			}

			.content1>a{
				background:#fff ;
				border: 2px solid #000;
				border-radius: 3px;
				color: #000;
				letter-spacing: 2px;
				padding: 12px 30px;
				text-transform: uppercase;
			}

			.content1>:last-child {
				margin-left: 20px;
			}

			.content1>a:hover {
				background: #000 none repeat scroll 0 0;
				border-color: #fff;
				color: #ffffff;
			}

			.content1>a{
				position: relative;
				bottom:5% ;
				
			}

			.bi-arrow-right{
				color:#ffffff;
			}

			.bi-arrow-right >span{
				color:#ffffff;

			}
	

			.menu-container > .menu-item > .menu-link >div{
				font-size:15px;
			}

			.sub-menu-container {
				background-color:#696969;
				opacity: 0.9;
				width: 300px;
			}

			
        /* Style du soulignement au survol */

		/* .sub-menu-container>.menu-item{
			text-align: center;
			border-bottom: 2px solid #fff;
		} */
        
		#content{
			margin-top: 30px;
			height: 80vh ;
		}
        .swiper-slide >.content1{
			background-color:#000000;
			padding: 4%;
			width: 45%;
			height: 80vh ;

		}

		.content1> h1 {
			-webkit-animation: 1s ease 0.5s normal both 1 running fadeInUp;
			animation: 1s ease 0.5s normal both 1 running fadeInUp;
			display:flex
}


		.swiper-slide >.swiper-slide-bg {
			height: 80vh ;
			width: 100%;
		}

		.swiper-slide >.swiper-slide-bg>img {
			float:right;
			height: 80vh ;
			width: 55%;
		}

		.swiper-slide>.content1>h1{
			color:#ffffff;
			font-family:'jumper', sans-serif;
			font-size:53px;
			display:flex;
			justify-content:center;
			align-items:center
		}
		.content-wrap-2{
			display: flex;
			background-color: #000000;
			height: 100vh ;
		}
		.col-md-4 > a > h1  > span {
			color:#ffffff;
			padding: 10px;
    		border-bottom: 4px solid #fff;
		}
		.col-md-4 > a > h1{
			color:#ffffff;
			font-size:70px;
			font-family:'jumper PERSONAL USE ONLY Light', sans-serif;
		}
		
		.barre{
			height: 3px;
			background-color: #ffffff;
			margin-top: 30px;
		}

		.feature-box{
			height: 400px;
			width: 500px;
		}

		 .column1{
			margin-left: -100px;
		}

		.column2{
			margin-left: -20px;
		} 
		.swiper-pagination {
			--cnvs-swiper-bar-color: #FFF;
			--cnvs-swiper-bar-size: 30px;
			--cnvs-swiper-bar-dot-size: 8px;
			--cnvs-swiper-bar-dot-color: #FFF;
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
			background: none !important;
		}

		.swiper-pagination-bullet{
			position: relative;
			left:40%
		}
		
		.swiper-pagination-bullet:hover::before{
			height: 15px;
			width: 15px;
			background: yellow !important;
		}

		

		.swiper-pagination-bullet  {
			/* stroke: var(--cnvs-swiper-bar-color);
			stroke-width: var(--cnvs-swiper-stroke-width); */
			fill: none;
			background-color: yellow;
		}

		.swiper-pagination-bullet::before {
			content: "";
			position: absolute;
			left: 50%;
			top: 50%;
			width: 10px;
			height:10px;
			background: #fff;
			border-radius: 50%;
			transition: ease;
			transform: translate(-50%, -50%);
		}

		.swiper-pagination-bullet-active::before {
			content: "";
			position: absolute;
			left: 50%;
			top: 50%;
			height: 13px;
			width: 13px;
			background: yellow;
			border-radius: 50%;
			transform: translate(-50%, -50%);
		}

		.swiper-pagination-bullet circle {
			stroke-dashoffset: 260;
			stroke-dasharray: 259;
		}
		

		@keyframes swiperSVGAnim {
			0% {
				stroke-dashoffset: 260;
			}
			100% {
				stroke-dashoffset: 0;
			}
		}
        
		.col-md-6 >a{
			border-radius:10px;
			background-size: cover;
			box-shadow: 10px 5px 5px 0px rgba(0, 0, 0, 0.5);

		}

		.rounded-5{
			height: 80VH;
			/* width: 100%; */
		}
		.Title{
			padding:50%
			height: 10px;
			width: 100%;
			opacity: 0.85;
			border-radius:10px 10px 0px 0px;

			box-shadow: 10px 5px 5px 0px rgba(0, 0, 0, 0.5);
			background: linear-gradient(to right, #1901B5 10%, #000 100%);

			/* background: linear-gradient(to left, #000 0%, #0000CD 100%); */
			/* background-color: #2F5597	; */

		}
		.Title> h1{
			padding-top:10px;
			margin-left:15px;
			Padding-right:10px;

			color:#FFD966;
			font-family:'Jumper PERSONAL USE ONLY-Regular', sans-serif;
			font-size: 30px;
			text-align:justify;
		}

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

		#slide-video{
			height: 100%;
		}

       

		.content-wrap{
			/* display: flex; */
		}

		.button.button-reveal i {
			opacity: 0;
			left: auto !important;
			right: 20px !important;
			background-color: transparent;
			transition: all .3s ease !important;
		}

		.logo-default{
		height: 5px;
	}	


@media screen and (max-width: 769px){


	.menu-link>div>i{
		display:none
	}

	
	.sub-menu-container > .menu-item > .menu-link:hover{
           color:#FFD966

        }

	.content-wrap{
		height: 350px;
	}

	.sub-menu-container >.menu-item:hover{
				background-color:#fff;
				transition:  all .5s ease !important;
		}

		.sub-menu-container >.menu-item:hover> .menu-link{
			color:#000;
		}
	
	
	.menu-container{
		text-align: justify;
	}
	.menu-item> .menu-link{
		text-align: justify;
	}

	.feature-box{
			height: 400px;
			width: 400px;
		}
	.column1{
			margin-left: 0px;
		}

		.column2{
			margin-left: 0px;
		} 

	#content{
		height: 350px ;
	}

	.swiper-slide >.content1 >a{
		/* display:none; */
		margin-top:20px;
	}

	
	
	
	.swiper-slide .content1> .barre{
		margin-top:5px;
		width: 100%;
		display:none;
		
	}

	.sub-menu-container{
		background-color:transparent;
		width: 100%;
	}

	.first-row, .second-row{
		flex-direction: column;
        align-items: stretch;
	}
	.consulter{
		height:50px
				/* overflow: hidden; */
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
		margin-bottom: 10px;
		margin-left: 40px;
		text-align: center;
	}

	.center-nav{
        position: relative;
        left: 0
    }

	.col-md-4 > a > h1{
		font-size:50px;
		text-align: center;

		}
		.swiper-slide>.content1{
		background-color:transparent;
		padding: 30px;
		width: 100%;
		height: 350px ;		
		}

		.swiper-slide>.content1>a{
			text-align: center;
			color:#fff;
			border: 2px solid #fff;
			background-color:transparent;
			width: 150px;
			margin-left: 35%;
			font-size:10px;
		}

		.swiper-slide>.content1>a:hover{
			background-color:transparent;
			color:#fff;
			border: 2px solid #fff;

		}
		.swiper-slide>.content1>h1{
			text-align: center;
			margin-top:5%;
			color:#fff;
			font-size:30px;
			font-family:'jumper PERSONAL USE ONLY', sans-serif;argin-right: 10px;
	}

	.swiper-wrapper>.swiper-slide {
		height: 350px ;
		width: 100%;
	}

	.swiper-slide>.swiper-slide-bg{
		height: 350px ;
		width: 100%;
	}

	.swiper-slide>.swiper-slide-bg>img {
			height: 350px ;
			width: 100%;
		}

	.center-right{
		display:none;
	}

		.menu-item{
			text-align: center;
			border-bottom: 2px solid #fff;
		}

		/* .swiper-pagination {
			display:none;
		} */

	}

	@media (min-width: 770px) and (max-width: 1100px){

		.menu-link>div>i{
		display:none
	}

		#header > a{
			height: 25vh;
			}
		.content-wrap{
		 	height: 500px;
	}
	

	.menu-container{
		position: relative;
		left: 30%;
	}

	.swiper-slide>.content1>a{
			text-align: center;
			color:#fff;
			border: 3px solid #fff;
			background-color:transparent;
			width: 150px;
			margin-left: 43%;
			font-size:10px;
		}

		.swiper-slide>.content1>a:hover{
			background-color:transparent;

		}
		.barre{
			display:none;
		}

		
	.col-md-4 > a > h1{
		font-size:50px;
		text-align: center;

		}
	.sub-menu-container{
		background-color:transparent;
		width: 100%;
	}
	.swiper-wrapper>.swiper-slide {
		height: 500px ;
		width: 100%;
	}

	.swiper-slide>.swiper-slide-bg{
		height: 500px ;
		width: 100%;
	}

	.swiper-slide>.swiper-slide-bg>img {
			height: 500px ;
			width: 100%;
		}
	
	.swiper-slide>.content1{
	background-color:transparent;
	padding: 50px;
	width: 100%;
	height: 500px ;		
}

		.feature-box{
			height: 400px;
			width: 400px;
		}
		.column1{
			margin-left:0px;
		}

		.column2{
			
			margin-left: 5px;
			margin-right: 5px;

		} 



	.menu-item> .menu-link{
		text-align: justify;
	}
			
	.swiper-slide>.content1>h1{
		 margin-top:30px;
		color:#ffffff;
		font-size:40px;
		text-align: center;
	}

	.swiper-wrapper>.swiper-slide {
		height: 500px ;
		width: 100%;
	}
	.col-md-4 > a > h1{
		font-size:35px;
		text-align: center;

		}

		.menu-item{
			text-align: center;
			border-bottom: 2px solid #fff;
		}

		.sub-menu-container>.menu-item:hover{
				background-color:#fff;
				transition:  all .5s ease !important;
		}

		.sub-menu-container >.menu-item:hover> .menu-link{
			color:#000;
		}
	
	}
@media (min-width: 1101px) and (max-width: 1400px){
	
		#logo > a{
		height: 30px;
		}

		.swiper-wrapper>.swiper-slide {
		height: 80vh ;
		width: 100%;
	}


	
	.swiper-slide>.content1{
	background-color:#000000;
	padding: 50px;
	width: 50%;
	height: 80vh ;		
}



.swiper-slide>.swiper-slide-bg>img {
			height: 80vh ;
			width: 50%;
		}

	.menu-item> .menu-link{
		text-align: justify;
	}
			
	.swiper-slide>.content1>h1{
		 margin-top:45px;
		color:#ffffff;
		font-size:50px;
	}

	.swiper-wrapper>.swiper-slide {
		height: 80vh ;
		width: 100%;
	}
	.col-md-4 > a > h1{
		font-size:55px;
		text-align: center;

		}

.center-nav{
        position: relative;
        left: 0
    }



}
	#logo > a{
		height: 35px;
	}

	.content1> h1 {
			-webkit-animation: 1s ease 0.5s normal both 1 running fadeInUp;
			animation: 1s ease 0.5s normal both 1 running fadeInUp;
			display:flex
}

	  	  /* #header{
		z-index: 1;
	  } */




</style>

</head>

	<body>

		<div id="loader"></div>

	
		<!-- Header
		============================================= -->
		<header id="header" class="sticky dark ">
			<div id="header-wrap">
				<div class="container">
					<div class="header-row">

						<div id="logo">
							<a href="#" >
								<img class="logo-default"  src="images/logodronegroupe.png" alt="drone groupe Logo" >
							</a>
						</div><!-- #logo end -->
						<div class="primary-menu-trigger">
							<button class="cnvs-hamburger" type="button" title="Open Mobile Menu">
								<span class="cnvs-hamburger-box"><span class="cnvs-hamburger-inner"></span></span>
							</button>
						</div>

						<!-- Primary Navigation
						============================================= -->
						<nav class="primary-menu   on-click menu-spacing-margin  center-nav">
							<ul class="menu-container" >
								<li class="menu-item">
									<a class="menu-link" href="#" >
										<div >Notre centre de formation <i class="fa-solid fa-angle-down"></i></div>
									</a>
									<ul class="sub-menu-container">
										<li class="menu-item"><a class="menu-link" href="{{url('/formation#theorique')}}"><div>FORMATION THÉORIQUE</div></a></li>
										
										<li class="menu-item"><a class="menu-link" href="{{url('/formation#pratique')}}"><div>FORMATION PRATIQUE</div></a></li>
										
										<li class="menu-item"><a class="menu-link" href="{{url('/formation#specialise')}}"><div>FORMATION SPECIALISÉE</div></a></li>
										
										<li class="menu-item"><a class="menu-link" href="{{url('/formation#tele')}}"><div>FORMATION AU TÉLÉPILOTAGE</div></a></li>
									</ul>
								</li>
							</ul>
						</nav><!-- #primary-menu end -->
                    </div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->
		<section id="content" classe="slider-element slider-parallax swiper_wrapper min-vh-75">
			<div class="slider-inner">
				<!-- <div class="slider-element swiper_wrapper min-vh-100 customjs">
						<div class="swiper swiper-parent" >
							<div class="swiper-wrapper">
							@foreach ($actus as $actu)
								<div class="content1 swiper-slide dark" data-animate="fadeInUp">
									<h1 style=" font-family:'Jumper PERSONAL USE ONLY', sans-serif;">{{$actu->titre_actu}}</h1>
									<div class="barre"></div>
									<a href="{{ route('actu.show', ['id' => $actu->id_actu]) }}"  class="button  button-circle   button-reveal " ><i class="bi-arrow-right" ></i><span><strong>CONSULTER</strong></a>

								</div>
								@endforeach
							</div>
						</div>
				</div> -->
				<div class="slider-element swiper_wrapper min-vh-100 customjs">
					<div class="swiper swiper-parent" >
						<div class="swiper-wrapper">
						@foreach ($actus as $actu)
							<div class="swiper-slide  dark">
								<div class="content1 ">
										<h1 style=" font-family:'Jumper PERSONAL USE ONLY', sans-serif; -webkit-animation: 1s ease 0.5s normal both 1 running fadeInUp;
			animation: 1s ease 0.5s normal both 1 running fadeInUp;">{{$actu->titre_actu}}</h1>
										<div class="barre"></div>
										<a href="{{ route('actu.show', ['id' => $actu->id_actu]) }}"  class="button button-xlarge button-circle  button-reveal text-transform-none ls-0" ><i class="bi-arrow-right" ></i><span><strong>CONSULTER</strong></a>
								</div>
								
								<div class="swiper-slide-bg"><img src="data:image/png;base64,{{ base64_encode($actu->image_actu) }}" alt=""></div>
								
							</div>
						@endforeach
						</div>
					</div>
				</div>
				<div class="swiper-pagination"></div>
			</div>
		</section>
		<section id="menu">
		<div class="barre-2" style="margin-top: 20px; margin-bottom: 0px"></div>
    		<div class="container mw-md">
       			 <div class="row align-items-stretch">
           			 <div class="col-md-6 col-padding animate-on-scroll ">
               			 <a href="{{url('/presentation')}}" data-animate="fadeInLeft" class="column1 feature-box fbox-center fbox-dark fbox-plain fbox-lg" style='background-image:url("images/M6_Plan de travail 1-01-01-01-01.jpg");'>
                    		<div class="Title"style="height: 25%;">
                    			<h1 >PRÉSENTATION</h1>
                    		</div>
						</a>
           			 </div>
           			<div class="col-md-6 col-padding animate-on-scroll  box">
                		<a href="{{url('/metier')}}" data-animate="fadeInRight" class="column2 feature-box fbox-center fbox-dark fbox-plain fbox-lg" style='background-image:url("images/M9_Plan de travail 1-01.jpg");'>
                    		<div class="Title" style="height: 25%;">
								<h1>NOS METIERS</h1>
                   			</div>
						</a>
           			</div>
           			 <div class="col-md-6 col-padding  animate-on-scroll box" data-animate="fadeInLeft" style="padding-top:5px">
              			<a href="{{url('/formation')}}" data-animate="fadeInLeft" class="column1 feature-box fbox-center fbox-dark fbox-plain fbox-lg" style='background-image:url("images/M7_Plan de travail 1-01-01-01-01-01.jpg");'>
                    		<div class="Title"style="height: 25%;">
								<h1>NOS FORMATIONS</h1>
                   			 </div>
						</a>
           			 </div>
						<div class="col-md-6 col-padding animate-on-scroll  box" data-animate="fadeInRight" style="padding-top:5px">
                		<a href="{{url('/reglementation')}}" data-animate="fadeInRight" class="column2 feature-box fbox-center fbox-dark fbox-plain fbox-lg" style='background-image:url("images/M1_Plan de travail 1.jpg"); background-size:cover'>
                    		<div class="Title"style="height: 25%;">
								<h1>CONSULTER UN EXTRAIT DE LA REGLEMENTATION</h1>
                   			</div>
						</a>
           			 </div>
        		</div>
    		</div>
		  <div class="barre-2"></div>
		</section>
		<section id="video" class="video ">
			<div class="content-wrap-2">
				<div class="row justify-content-around align-items-center">
					<div class="col-md-4">
						<a href="{{url('/video')}}"><h1 data-animate="fadeInUpSmall"><span style="color:#ffffff;">VIDÉOTHÈQUE<span></h1></a>
						
					</div>
					<div class="col-md-6 " >
						<video id="slide-video" class="d-block w-100 h-100  shadow" poster="images/videos/deskwork.jpg" preload="auto" loop autoplay playsinline muted  style="height:60VH">
                            <source src='demos/drone/images/video.mp4' type='video/mp4'>
                        </video>
					</div>
				</div>
			</div>
		</section> 
		@include('sections.footer') 
</body>
</html>

<!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<!-- <div id="gotoTop" class="uil uil-angle-up"></div> -->

	<!-- JavaScripts
	============================================= -->
	<script src="js/plugins.min.js"></script>
	<script src="js/functions.bundle.js"></script>

	<script>
		
		var loader= document.getElementById("loader");
		window.addEventListener('load', function(){
			loader.style.display="none";
		})

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
