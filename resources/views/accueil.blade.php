
@php
    $actus = App\Models\actu_model::all(); 
@endphp

@include('sections.head')

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
				margin-top: 30px;
				height: auto !important;
			}
			.content1>a{
				margin-top: 30px;
				background:#fff ;
				border: 2px solid #000;
				border-radius: 50;
				color: #000;
				letter-spacing: 2px;
				padding: 12px 30px;
				text-transform: uppercase;
				width: 350px;
			} 
			.content1>a:hover {
				background: #000 none repeat scroll 0 0;
				border-color: #fff;
				color: #ffffff;
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

			
       
        
		#content{
			margin-top: 30px;
			height: 80vh ;
		}

		.swiper-slide >.content1{
			padding:2%;
			background-color:#000000;
			width: 40%;
			height: 80vh ;

		}


		.swiper-slide >.swiper-slide-bg {
			height: 80vh ;
			width: 100%;
		}

		.swiper-slide >.swiper-slide-bg>img {
			float:right;
			height: 80vh ;
			width: 60%;
		}

		.slider-caption{
			/* background-color: red; */
		}
		
		.swiper-slide>.content1>.slider-caption>h1{
			position:relative;
			top: 40px;
			color:#ffffff;
			font-family:'jumper', sans-serif;
			font-size:52px;
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

		.col-md-6 >a{
			border-radius:30px 30px 30px 30px ;
			background-size: cover;
			box-shadow: 10px 5px 5px 0px rgba(0, 0, 0, 0.5);

		}

		.rounded-5{
			height: 80VH;
		}
		.Title{
			padding:50%
			height: 10px;
			width: 100%;
			opacity: 0.85;
			border-radius:30px 30px 0px 0px;

			box-shadow: 10px 5px 5px 0px rgba(0, 0, 0, 0.5);
			background: linear-gradient(to right, #1901B5 10%, #000 100%);

			

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
		height: 450px ;
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
		padding-top: 10%;
		width: 100%;
		height: 450px ;		
		}

		.swiper-slide>.content1>a{
			text-align: center;
			color:#fff;
			border: 2px solid #fff;
			background-color:transparent;
			width: 180px;
			margin-left: 0%;
			font-size:15px;
			margin-top:20px;
			position: relative;
			top:20%;
            left: 50%;
            margin-top: -100px;
            margin-left: -100px;
		}

		.swiper-slide>.content1>a:hover{
			background-color:transparent;
			color:#fff;
			border: 4px solid #fff;

		}
		.swiper-slide>.content1>.slider-caption>h1{
			text-align: center;
			/* margin-top:5%; */
			color:#fff;
			font-size:30px;
			font-family:'jumper PERSONAL USE ONLY', sans-serif;argin-right: 10px;
	}

	.swiper-wrapper>.swiper-slide {
		height: 450px ;
		width: 100%;
	}

	.swiper-slide>.swiper-slide-bg{
		height: 450px ;
		width: 100%;
	}

	.swiper-slide>.swiper-slide-bg>img {
			height: 450px ;
			width: 100%;
		}

	.center-right{
		display:none;
	}

		.menu-item{
			text-align: center;
			border-bottom: 2px solid #fff;
		}

		

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
		padding-top: 10%;
		width: 100%;
		height: 750px ;	
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
			
	.swiper-slide>.content1>.slider-caption>h1{
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

	.menu-item>.menu-link:hover{
		color:#FFD966
	}

	.menu-item{
			text-align: center;
			border-bottom: 2px solid #fff;
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
	padding: 20px;
	width: 40%;
	height: 80vh ;		
}



.swiper-slide>.swiper-slide-bg>img {
			height: 80vh ;
			width: 60%;
		}

	.menu-item> .menu-link{
		text-align: justify;
	}
			
	.swiper-slide>.content1>.slider-caption>h1{
		color:#ffffff;
		font-size:45px;
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

	/* .content1> h1 {
			-webkit-animation: 1s ease 0.5s normal both 1 running fadeInUp;
			animation: 1s ease 0.5s normal both 1 running fadeInUp;
			display:flex
} */

	  	




</style>

</head>

	<body  class="stretched">

		<div id="loader"></div>

		<div id="wrapper">
		
		<header id="header" class="sticky dark ">
			<div id="header-wrap">
				<div class="container">
					<div class="header-row">

						<div id="logo">
							<a href="#" >
								<img class="logo-default"  src="images/logodronegroupe.png" alt="drone groupe Logo" >
							</a>
						</div>
						<div class="primary-menu-trigger">
							<button class="cnvs-hamburger" type="button" title="Open Mobile Menu">
								<span class="cnvs-hamburger-box"><span class="cnvs-hamburger-inner"></span></span>
							</button>
						</div>

						
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
						</nav>
                    </div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header>
		<section id="content" class="slider-element swiper_wrapper min-vh-60 " data-loop="true">
			<div class="slider-inner">
				<div class="swiper swiper-parent">
					<div class="swiper-wrapper">
					@foreach ($actus as $actu)
							<div class="swiper-slide dark">
								<div class="content1">
									<div class="slider-caption">
										<h1 data-animate="fadeInUp" data-delay="100" style=" font-family:'Jumper PERSONAL USE ONLY', sans-serif;">{{$actu->titre_actu}}</h1>
									</div>
									<div ata-animate="fadeInUp" data-delay="200"  class="barre"></div>
									<a ata-animate="fadeInUp" data-delay="200"  class="button button-xlarge button-circle  button-reveal text-transform-none ls-0"  href="{{ route('actu.show', ['id' => $actu->id_actu]) }}"><i class="bi-arrow-right" ></i><span><strong>CONSULTER</strong></a>
								</div>	
								<div class="swiper-slide-bg"><img src="data:image/png;base64,{{ base64_encode($actu->image_actu) }}" alt=""></div>
							</div>
					@endforeach
					</div>
					</div>
					<div class="slider-arrow-left"><i class="uil uil-angle-left-b"></i></div>
					<div class="slider-arrow-right"><i class="uil uil-angle-right-b"></i></div>
					<div class="slide-number"><div class="slide-number-current"></div><span>/</span><div class="slide-number-total"></div></div>
				</div>

			</div>
		</section>
		<section id="menu">
		<div class="barre-2" style="margin-top: 20px; margin-bottom: 0px"></div>
    		<div class="container mw-md">
       			 <div class="row align-items-stretch">
           			 <div class="col-md-6 col-padding animate-on-scroll ">
               			 <a href="{{url('/presentation')}}" class="column1 feature-box fbox-center fbox-dark fbox-plain fbox-lg" style='background-image:url("images/M6_Plan de travail 1-01-01-01-01.jpg");-webkit-animation: 1s ease 0.5s normal both 1 running fadeInUp;
			animation: 1s ease 0.5s normal both 1 running fadeInUp;
			display:flex'>
                    		<div class="Title"style="height: 25%;">
                    			<h1 >PRÉSENTATION</h1>
                    		</div>
						</a>
           			 </div>
           			<div class="col-md-6 col-padding animate-on-scroll  box">
                		<a href="{{url('/metier')}}" class="column2 feature-box fbox-center fbox-dark fbox-plain fbox-lg" style='background-image:url("images/M9_Plan de travail 1-01.jpg");-webkit-animation: 1s ease 0.5s normal both 1 running fadeInUp;
			animation: 1s ease 0.5s normal both 1 running fadeInUp;
			display:flex'>
                    		<div class="Title" style="height: 25%;">
								<h1>NOS METIERS</h1>
                   			</div>
						</a>
           			</div>
           			 <div class="col-md-6 col-padding  animate-on-scroll box" style="padding-top:5px">
              			<a href="{{url('/formation')}}" class="column1 feature-box fbox-center fbox-dark fbox-plain fbox-lg" style='background-image:url("images/M7_Plan de travail 1-01-01-01-01-01.jpg");-webkit-animation: 1s ease 0.5s normal both 1 running fadeInUp;
			animation: 1s ease 0.5s normal both 1 running fadeInUp;
			display:flex'>
                    		<div class="Title"style="height: 25%;">
								<h1>NOS FORMATIONS</h1>
                   			 </div>
						</a>
           			 </div>
						<div class="col-md-6 col-padding animate-on-scroll  box" style="padding-top:5px">
                		<a href="{{url('/reglementation')}}" class="column2 feature-box fbox-center fbox-dark fbox-plain fbox-lg" style='background-image:url("images/M1_Plan de travail 1.jpg"); background-size:cover -webkit-animation: 1s ease 0.5s normal both 1 running fadeInUp;
			animation: 1s ease 0.5s normal both 1 running fadeInUp;
			display:flex'>
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
                            <source src='images/video.mp4' type='video/mp4'>
                        </video>
					</div>
				</div>
			</div>
		</section> 
		@include('sections.footer') 
</div>
</body>
</html>

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

			window.onscroll = function() {myFunction()};

			var header = document.getElementById("header");

			var sticky = header.offsetTop;

			function myFunction() {
			if (window.pageYOffset > sticky) {
				header.classList.add("sticky");
			} else {
				header.classList.remove("sticky");
			}
			}

			function changeColor() {
            var myDiv = document.getElementById('container');

            myDiv.style.backgroundColor = 'black';
			 }

			document.addEventListener("DOMContentLoaded", function() {
				function handleIntersection(entries, observer) {
					entries.forEach(entry => {
						if (entry.isIntersecting) {
							entry.target.classList.add('is-visible');
							observer.unobserve(entry.target);
						}
					});
				}


				
            const observer = new IntersectionObserver(handleIntersection, { rootMargin: "-50px 0px" });

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

		window.onscroll = function () {
			var scrollButton = document.querySelector('.scroll-to-top');

			if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
				scrollButton.style.display = 'block';
			} else {
				scrollButton.style.display = 'none';
			}
		};
  </script>
