@include('sections.head')

<style>
 		
	body{
        font-family:'jumper PERSONAL USE ONLY Light', sans-serif;
    }

	#content{
		margin-top: 30px;
		margin-bottom:30px;
	}

    .content1{
		background-color:#000000;
		padding: 50px;
		padding-top: 90px;
		width: 40%;
		height: 70vh;
	}

	.content1>h1{
		color:#ffffff;
		font-family:'jumper PERSONAL USE ONLY Light', sans-serif;
		font-size:60px;
	}

	.content2{
		width: 60%;
	}

	.content2>img{
		height: 70vh;
		width: 100%;
	}
    
	.content-wrap{
		display: flex;
		background-color: #000000;
	}

    .content{
        background-size:cover;
        width:60%;                                                                
    }  

	.present > .presen{
		background-color:#6A5ACD;
		width: 500px; 
		background: linear-gradient(to right, #6A5ACD 60%, #fff 100%);
		margin-left: 10px;
        color: yellow;
		padding-left:35px;
		font-size: 15px;
		font-family:'jumper PERSONAL USE ONLY Light', sans-serif;
	}

    .present >.presen > h3{
        color: yellow;
    }

    .present > .barre{
        background-color: #000000;
        
        height: 1px;
        margin-bottom: 20px;
        margin-left: 50px;
        margin-right: 50px;
    }

    .present > p{
        margin-left: 100px ;
		margin-right: 100px;
		font-size: 17px;
		font-family:'jumper PERSONAL USE ONLY Light', sans-serif;

    }
	
@media screen and (max-width: 769px){

	.sub-menu-container {
    	background-color:#000000;
  	}
	
	#logo > a{
		height:15px
	}
	
	#content{
		height: 350px ;		
		margin-bottom:50px;
	}

	.content1{
		background-size:cover;
		padding: 30px;
		width: 100%;
		height: 350px ;		
		background-image:url('images/drone.jpg');
	}

	.present>p{
		font-size: 17px;
		margin-left:20px;
		margin-right:20px;
	}

	.present > .presen{
		background-color:#6A5ACD;
		width: 100%; 
		background: linear-gradient(to right, #6A5ACD 60%, #fff 100%);
		margin-left: 10px;
        color: yellow;
		padding-left:35px;
		font-size: 15px;
		font-family:'jumper PERSONAL USE ONLY Light', sans-serif;
	}
	
	.content1>h1{
		margin-top:12%;
		color:#FFF;
		text-align: center;
		font-size:35px;
		font-family:'jumper PERSONAL USE ONLY Light', sans-serif;
	}

	.barre{
		background:#FFF;
		
	}
  
	.content2>img{
		height: 30vh;
		width: 100%;
		display:none
	}

	.content2 {
		height: 30vh ;
		width: 100%;
		display:none
	}	
		
	.col-md-4 {
		padding-top: 10px;
	}

	.col-md-4 > a >h1{
		text-align:center;
		font-size:35px
	}

	.col-md-6 > img{
		height: 300px;
		width: 350px;
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
		color:#FFD966;
	}

	.menu-container > .menu-item > .menu-link >div{
		font-size:11px;
	}

	.sub-menu-container> .menu-item > .menu-link >div{
		font-size:11px;
	}
		
	.menu-item{
		text-align:justify ;
	}
}

@media (min-width: 770px) and (max-width: 950px){


	#logo > a{
		height:21px
	}

	.sub-menu-container {
		background-color:#000000;	
	}

	#content{
		height:60vh ;		
		margin-bottom:50px;
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
		font-size:45px;
	}

	.content2 {
		height: 60vh ;		
		width: 100%;
	}

	.content2>img{
		height: 60vh ;		
		width: 100%;                                                               
	}  

	.col-md-4{
		padding-top: 25px;
	}

	.col-md-6{
		margin-top: 10px;
	}

	.menu-item{
		text-align: justify;
	}

	.sub-menu-container > .menu-item > .menu-link:hover{
		color:#FFD966;
	}

	.menu-container > .menu-item > .menu-link >div{
		font-size:11px;
	}

	.sub-menu-container> .menu-item > .menu-link >div{
		font-size:11px;
	}

}

@media (min-width: 951px) and (max-width: 1400px){

	#logo > a{
		height:21px
	}

	.menu-container > .menu-item > .menu-link >div{
		font-size:11px;
	}

	.sub-menu-container> .menu-item > .menu-link >div{
		font-size:11px;
	}

	.menu-item{
		text-align: justify;
	}

	#content{
		height:60vh
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
	}

	.content2 {
		height: 60vh ;		
		width: 100%;
	}

	.content2>img{
		height: 60vh ;		
		width: 100%;                                                               
	}  
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
								<img class="logo-default"  src="images/logodronegroupe.png" alt="drone groupe Logo">
							</a>
						</div><!-- #logo end -->
						<div class="primary-menu-trigger">
							<button class="cnvs-hamburger" type="button" title="Open Mobile Menu">
								<span class="cnvs-hamburger-box"><span class="cnvs-hamburger-inner"></span></span>
							</button>
						</div>
						<!-- Primary Navigation
						============================================= -->
						<nav class="primary-menu with-arrows" style="position:relative; left: 5px;">

							<ul class="menu-container " >
							<li class="menu-item current" >
									<a class="menu-link" href="{{url('/presentation')}}" >
										<div >PRéSENTATION</div>
									</a>
								</li>
								<li class="menu-item">
									<a class="menu-link" href="{{url('/metier')}}" >
										<div >NOS MÉTIERS</div>
									</a>
								</li>
								<li class="menu-item">
									<a class="menu-link" href="{{url('/formation')}}" >
										<div >NOS FORMATIONS</div>
									</a>
									<ul class="sub-menu-container border-0">
										<li class="menu-item"><a class="menu-link" href="{{url('/formation#theorique')}}"><div>FORMATION THÉORIQUE</div></a></li>
										
										<li class="menu-item"><a class="menu-link" href="{{url('/formation#pratique')}}"><div>FORMATION PRATIQUE</div></a></li>
										
										<li class="menu-item"><a class="menu-link" href="{{url('/formation#specialise')}}"><div>FORMATION SPECIALISÉE</div></a></li>
										
										<li class="menu-item"><a class="menu-link" href="{{url('/formation#tele')}}"><div>FORMATION AU TÉLÉPILOTAGE</div></a></li>
									</ul>
								</li>
								<li class="menu-item">
									<a class="menu-link" href="{{url('/video')}}" >
										<div >VIDÉOTHèQUE</div>
									</a>
								</li>
								<li class="menu-item" >
									<a class="menu-link" href="{{url('/actualites')}}" >
										<div >actualités</div>
									</a>
								</li>
								<li class="menu-item" >
									<a class="menu-link" href="{{url('/reglementation')}}" >
										<div >RÉGLEMENTATION</div>
									</a>
								</li>
								<!-- <div class="morph-marker"></div> -->
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
					<h1 class="text-transform-none " data-animate="fadeInUp" data-delay="200"> DRONE GROUPE QUI SOMMES NOUS ?</h1>
					<div class="barre"  data-animate="fadeInUp" data-delay="500"></div>
				</div>
				<div class="content2">
					<img src="images/drone.jpg" alt="">
                </div>
		<div>
		</section><!-- #content end -->
		<section class="present">
    		<div class="presen"><h3>PRÉSENTATION</h3></div>
            <div class="barre-2"></div>
            <p>
            DRONE GROUPE est une société présente en France, au Sénégal et en Côte d’Ivoire. Nous sommes un bureau d’études techniques, prestations de services, conseils se rapportant à l’acquisition et au traitement de données numériques, aériennes, terrestres sous-terrestres , marines et sous-marines.
            </p>
            <p >
            Nous effectuons des prises de vues, des relevés cartographiques et géométriques notamment par l’utilisation d’aéronefs télépilotés (drones), de radars, de satellites pour la création, la production, la commercialisation de tout type de vidéos, photographies, aériennes, au sol, enterrées, sous l’eau, en vue d’effectuer des analyses et des traitements des données collectées.
            </p>
            <div class="barre-2"></div>
		</section>
		@include('sections.footer')

		</div>
		<div id="gotoTop" class="uil uil-angle-up"></div>
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


</html>