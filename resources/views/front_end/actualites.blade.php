@php
    $actus = App\Models\actu_model::orderBy('id_actu', 'desc')->get();
@endphp

@include('sections.head')

	<style>

	 body{
        font-family:'jumper PERSONAL USE ONLY Light', sans-serif;
    }

	#content{
		height: 70vh;
		margin-top: 30px;
		margin-bottom:30px;
	}

	.content1{
		background-color:#000000;
		padding: 50px;
		padding-top: 80px;
		width:40%;
		height: 70vh ;
	}

	.content1>h1{
		color:#ffffff;
		font-family:'jumper PERSONAL USE ONLY Light', sans-serif;
		font-size:60px
	}

	.content2{
		width: 60%;  
	}

	.content2>img{
		height: 70vh ;
		width: 100%;                                                               
    } 

    .content{
        background-size:cover;
        width:60%;                                                                
    }  
	
	.entry-image a img{
		height:300px
	}

	.grid-inner{
		background:#000;
		border-radius:10px
	} 

	.entry-title{
		margin-bottom: -5px
	}

	.entry h2{
		font-family:'jumper PERSONAL USE ONLY Light', sans-serif;
		color:#ffffff;
		margin-left:3%
	}

	.entry ul li{
		font-family:'jumper PERSONAL USE ONLY Light', sans-serif;
		margin-left:3%;
		margin-bottom: 5%
	}

	.btn-primary{
		position:relative;
		bottom: 30px;
		left:3%;
		width: 200px;
		font-family:'jumper PERSONAL USE ONLY Light', sans-serif;
		border:2px solid #fff;
		background:#fff;
		color:#000
	}

	.btn-primary:hover{
		border:2px solid #fff;
		background:#000;
		color:#fff
	}

	.button.button-reveal i {
	opacity: 0;
	left: auto !important;
	right: 20px !important;
	background-color: transparent;
	transition: all .3s ease !important;
	}

	.content-wrap{
		padding-top:0
	}

@media screen and (max-width: 769px){

	.sub-menu-container {
   		 background-color:#000000;
  	}

  	.menu-container > .menu-item > .menu-link >div{
		font-size:11px;
		text-align:justify
	}

	.sub-menu-container> .menu-item > .menu-link >div{
		font-size:11px;
	}

	.sub-menu-container> .menu-item > .menu-link >div:hover{
		color:#FFD966
	}

  
	#logo > a{
		height: 15px;
	}
	
	#content{
		height: 350px;	
		margin-bottom:50px;
	}

	.content-wrap{
		position: relative;
		background-color: transparent;
	}
		
	.content1{
		background-color:transparent;
		padding: 30px;
		width: 100%;
		height: 350px;
		position: absolute;
	 }

	.content2>img{
		height: 350px;
		width: 100%;
	}

	.content2 {			
		height: 350px ;
		width: 100%;
	}

    .content1>h1{
		margin-top:8%;
		color:#ffffff;
		font-size:35px;
		text-align: center;
	}

	.entry{
		width: 100%;

	}

	.present >p {
		font-size: 17px;
	}

	.grid-inner{
		width:100%;
	}

	.entry-image a img{
		height:200px
	}

	.entry h2{
		font-size:20px
	}

	.sec{
			width: 100%;
		}
}

@media (min-width: 770px) and (max-width: 1100px){


	#logo > a{
		height:21px
	}

	.menu-container > .menu-item > .menu-link >div{
		font-size:11px;
	}

	.sub-menu-container> .menu-item > .menu-link >div{
		font-size:11px;
	}


	.menu-container > .menu-item > .menu-link{
		text-align:justify
	}

	.sub-menu-container {
		background-color:#696969; 
	}

	#logo > a{
		height: 20px;
	}

	.sub-menu-container {
		background-color:#000000;
	}

    .sub-menu-container > .menu-item > .menu-link:hover{
		color:#FFD966;
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
	}

	.content2>img{
		height: 500px ;		
		width: 100%;                                                               
	}    

	.grid-inner{
		height: 100%;
	}

	.entry h2{
		font-size:20px
	}

}

@media (min-width: 1101px) and (max-width: 1400px){

	#logo > a{
		height:21px
	}

	.menu-container > .menu-item > .menu-link >div{
		font-size:11px;
	}

	.sub-menu-container> .menu-item > .menu-link >div{
		font-size:11px;
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
		font-family:arial;
		font-size: 45px;;
	}

	.content2 {
		height: 60vh ;
		width: 100%;
	}

	.content2>img{
		height: 60vh ;
		width: 100%;                                                               
	}  

	.grid-inner{
		height:100%
	}
}
</style>

</head>

	<body id="body" class="stretched">

	<div id="loader"></div>
	<div id="wrapper">
		<!-- Header
		============================================= -->
		<header id="header" class="sticky dark">
			<div id="header-wrap">
				<div class="container">
					<div class="header-row">

						<div id="logo">
							<a href="{{url('/')}}">
								<img class="logo-default"  src="../images/logodronegroupe.png" alt="drone groupe Logo">
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
							<ul class="menu-container" >
								<li class="menu-item" >
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
								<li class="menu-item current" >
									<a class="menu-link" href="#" >
										<div >actualités</div>
									</a>
								</li>
								<li class="menu-item " >
									<a class="menu-link" href="{{url('/reglementation')}}" >
										<div >REGLEMENTATION</div>
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
					<h1 data-animate="fadeInUp" data-delay="200" class="text-transform-none ">CONSULTEZ NOS DERNIÈRES ACTUALITÉS</h1>
					<div class="barre" data-animate="fadeInUp" data-delay="500"></div>
				</div>
				<div class="content2" >
					<img src="images/M6_Plan de travail 1-01-01-01-01.jpg" alt="">
                </div>
		<div>
		</section>
		<section id="actus">
		<h3 class="sec">NOS ACTUALITÉS</h3>
		<div class="barre-2"></div>
			<div class="content-wrap">
				<div class="container">
					<div id="posts" class=" row gutter-50">
						@foreach($actus as $actu)
						<div class="entry col-sm-6 col-12 animate-on-scroll">
							<div class="grid-inner ">
								<div class="entry-image">
									<a  data-lightbox="image"><img  src="data:image/png;base64,{{ base64_encode($actu->image_actu) }}" ></a>
								</div>
								<div class="entry-title">
									<h2>{{$actu->titre_actu}}</h2>
								</div>
								<div class="entry-meta">
									<ul>
										<li style="font-family: 'Arial', sans-serif"><i class="uil uil-schedule"></i>{{$actu->DATE}}</li>
									</ul>
								</div>
								<div class="entry-content">
								<a href="{{ route('actu.show', ['id' => $actu->id_actu]) }}" class="btn btn-primary button  button-reveal text-transform-none ls-0"> <i class="bi-arrow-right"></i>CONSULTER</a>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</section>
		@include('sections.footer')
	</div>
	</body>

	<!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<!-- <div id="gotoTop" class="uil uil-angle-up"></div> -->

	<!-- JavaScripts
	============================================= -->
	<script src="../js/plugins.min.js"></script>
	<script src="../js/functions.bundle.js"></script>
    <script src="../js/plugins.min.js"></script>
	<script src="../js/functions.bundle.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>




</html>