@php
    $videos = App\Models\VideosModel::all();
@endphp
@include('sections.head')

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
							<source src='images/video.mp4' type='video/mp4'>
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

</html>