@include('sections.head')

<style>

		#logo > a{
			height:100%
		}

		.primary-menu > .menu-container >.current> .menu-link,
		.primary-menu > .menu-container >.menu-item:hover> .menu-link{
		color:#483D8B;
		}


		.morph-marker {
			--cnvs-morph-height: 3px;
			--cnvs-morph-duration: .3s;
			position: absolute;
			display: block;
			background: #483D8B;
			height: var(--cnvs-morph-height);
			border-radius: var(--bs-border-radius);
			transition: all var(--cnvs-morph-duration);
		}
		.morph-bg .morph-marker {
			--cnvs-morph-height: 100%;
			opacity: .1;
			bottom: 0 !important;
		}

		.morph-bg .menu-link {
			position: relative;
			--cnvs-primary-menu-padding-y: 11px;
			--cnvs-primary-menu-hover-color: var(--cnvs-primary-menu-color);
			z-index: 1;

		}


		#content{
			margin-top: 30px;
			margin-bottom:30px;
			
		}

        .content1{
			background-color:#483D8B;
			padding: 50px;
			padding-top: 90px;
			width:40%;
			height: 70vh ;
			
		}

		.content1>h1{
			color:#ffffff;
			font-family:'jumper PERSONAL USE ONLY Light', sans-serif;
			font-size:60px
		}

		.content2{       
			height: 70vh ;     
            width:60%;                                                                
        }  

		.content2>img{
			height: 70vh ;
			width: 100%;
			object-fit:fill                                                             
		}  

		.sec{
			background-color:#6A5ACD;
			background: linear-gradient(to right, #6A5ACD 60%, #fff 100%);
			margin-left: 10px;
            color: yellow;
			padding-left:35px;
			font-weight: lighter;
			font-family:'DIN Regular', sans-serif;
		}
		
		#first-sec{
			width: 800px;
		}

		#second-sec{
			width: 500px;
		}

		.sub-menu-container {
			background-color:#FBFCFA;
			opacity: 0.9;
			width: 300px;
		}

		.sub-menu-container >.menu-item:hover> .menu-link> div{
		color:#483D8B;
		}
        
        .menu > .barre{
            background-color: #000000;
            height: 1px;
            margin-bottom: 20px;
            margin-left: 50px;
            margin-right: 50px;
        }

        .menu > p{
			font-size: 20px;
        }
        .forma{
            margin-top: 40px;
        }

		.forma > section{
			width:100%
		}

		.formas{
			display:flex;
			margin: 40px;
			justify-content:space-evenly;
		}

		.formas>.text{
			width: 60%;
			font-size: 20px;
		}

		.formas>.text>h3{
			font-family:'jumper PERSONAL USE ONLY Light', sans-serif;
		}

		.formas>.text>p{
			margin-bottom: 15px;
		}

		.text > .barre, h5{
			margin:0;
		}

		.image{
			width: 400px;
			
		}

		.planning{
			margin-top: 20px;
		}
		.planning> h1{
			margin-top: 100px;
			text-align:center;
			color: #483D8B;
			
		}

		.planning> h1 > span{
			font-weight: lighter;
			
		}

		.blue{
			background-color: #483D8B;
			color:#fff;
		}

		.sky{
			background-color:#8FAADC;
			color:#fff;
		}

		.jaune{
			background-color:#FFD966;

		}

		table {
			border-collapse: collapse;
			border-color: white;
			width: 80%;
		}

		td {
		border: 2px solid #fff ; 
		padding: 8px;
		}


		.planning > table{
			margin-left: 100px ;
			margin-right: 100px;
		}
        .centre > ul > li{
            margin-left: 100px ;
			margin-right: 100px;
            list-style: none;
        }

		.centre  strong{
			font-family:'Arial', sans-serif;

		}

        .centre >p{
            margin-left: 100px ;
			margin-right: 100px;
        }

		.text> p{
			font-family:'DIN', sans-serif;
			font-style: italic;
			color:#483D8B;
		}

		.text> .prerequis{
			background-color:#483D8B;
			padding: 10px;
			color:#fff;
		}

		.text> .prerequis > span{
			color:#FCDC12;
		}

		.text> ul > li{
			list-style: none;
		}

		.centre{
			font-size: 20px;
		}

		.centre >ul > li >i{
			color:#6A5ACD;
			font-weight:bold;
		}

		body{
            font-family:'jumper PERSONAL USE ONLY Light', sans-serif;
            }
		
		.button.button-reveal i {
			opacity: 0;
			left: auto !important;
			right: 20px !important;
			background-color: transparent;
			transition: all .3s ease !important;
		}

@media screen and (max-width: 769px){

	.sub-menu-container {
    background-color:#ffffff;
  
  }

		#logo > a{
			height:50px
		}

		.menu-item{
				text-align: justify;
				/* border-bottom: 2px solid #000; */
			}

		.sticky {
			position: fixed;
			top: 0;
			width: 100%
		}
		#content{
			height: 300px;	
			margin-bottom:50px;
		}
		.content1{
			/* background-color: #000000; */
			background-image:url('images/M4_Plan de travail 1-01-01.jpg');
			background-size:cover;
			padding: 30px;
			width: 100%;
			height: 300px;
				}
			
		.barre{
			background-color:#483D8B;
			
		}

		.content2 {
			height: 300px;
			width: 100%;
			display:none;
		}
		.content2>img{
			height: 300px ;
			width: 100%;                                                               
		}  
		.content1>h1{
			margin-top:10%;
			color:#483D8B;
			font-size:35px;
			text-align: center;
			font-family:'jumper PERSONAL USE ONLY Light', sans-serif;

			}

		
		.centre>ul>li{
			margin-left: 40px;
		}
		
		.centre>p{
			margin-left: 40px;
			margin-right: 17px;
		}

		#first-sec{
			width: 100% ;
			padding-left:2px;
		}

		#second-sec{
			width: 100% ;
			padding-left:2px;
		}
		
		.forma > section{
			margin: 20px;
		flex-direction: column;
		align-items: stretch;
		text-align:center;
		position: relative;
		left: 80px;
		}

		.text> .prerequis{
			width: 100%;
		}

		.forma > section>.text{
			margin-top: 20px;
			text-align:justify;

		}

		.forma{
			margin-left: -70px;
			margin-right: 20px;
			width: 90%;
			
		}

		.formas>.text>h3{
			font-size: 25px;
			margin-bottom: 15px;
		}

		.formas>.text>p{
			font-size: 20px;
		}

		UL>LI{
			font-size: 15px;
		}

		.formas>.text>UL>LI{
			font-size: 15px;
		}

		.formas>.text{
			width: 98%;
			font-size: 15px;
		}
		.formas{
			margin: 20px;
			justify-content:space-between;
		}

		.forma > section >.text>h4{
			font-size:20px;
		}

		.planning >table{
			margin-left: 0px;
		}

		.image{
			height: 300px;
			width: 100%;
			/* position: relative;
			right: 20%; */
			
		}

		.first-ligne, .second-ligne {
		flex-direction: column;
		align-items: stretch;
		}
		.specials{
			
			flex-direction: column;
				align-items: stretch;
		}
		.centre >.first{
			margin-top: 100px;
		}

		p{
			font-size: 15px;
		}

		.forma > section{
			width:100%
		}
	}

		@media (min-width: 770px) and (max-width: 950px){

	
	#logo > a{
		height:40px
	}

	.menu-container > .menu-item > .menu-link >div{
		font-size:11px;
	}

	.sub-menu-container {
   		 background-color:#ffffff;
  
  }
	
  .content1{
background-color:#483D8B;
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

	.swiper-wrapper {
		height: 60vh ;
		width: 100%;
	}

	.menu-item{
		text-align: justify;
	}

	

	.sub-menu-container > .menu-item > .menu-link:hover{
		color:#FFD966;
	}
}
@media (min-width: 951px) and (max-width: 1400px){

	.menu-container{
		margin-left:10px
	}

	#logo > a{
	height:50px
	}

	.menu-container > .menu-item > .menu-link >div{
		font-size:12px;
	}

	.menu-container > .menu-item > .menu-link{
	text-align:justify
	}


.content1{
background-color:#483D8B;
padding: 50px;
width: 70%;
height: 60vh ;		
}


	
.content1>h1{
 margin-top:20px;
color:#ffffff;
font-family:'jumper PERSONAL USE ONLY Light', sans-serif;
font-size:45px;
}

.content2>img{
	height: 60vh ;
	width: 100%;
}

.content2{
	height: 60vh ;
	width: 100%;
}

#video h1{
font-size:10px;
}

}


		</style>

</head>

	<body>

	<div id="loader"></div>
		<!-- Header
		============================================= -->
		<header id="header" class="sticky ">
			<div id="header-wrap">
				<div class="container">
					<div class="header-row">
						<div id="logo">
							<a href="{{url('/')}}">
								<img class="logo-default"  src="images/60PX-01.png"  alt="drone groupe Logo">
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
										<div >NOS METIERS</div>
									</a>
								</li>
								<li class="menu-item current">
									<a class="menu-link" href="#" >
										<div >NOS FORMATIONS</div>
									</a>
									<ul class="sub-menu-container border-top" style="border-top:2px solid #483D8B">
										<li class="menu-item"><a class="menu-link" href="{{url('/formation#theorique')}}"><div onmouseover="this.style.color='#483D8B';" onmouseout="this.style.color='#000';">FORMATION THÉORIQUE</div></a></li>
										
										<li class="menu-item"><a class="menu-link" href="{{url('/formation#pratique')}}"><div onmouseover="this.style.color='#483D8B';" onmouseout="this.style.color='#000';">FORMATION PRATIQUE</div></a></li>
										
										<li class="menu-item"><a class="menu-link" href="{{url('/formation#specialise')}}"><div onmouseover="this.style.color='#483D8B';" onmouseout="this.style.color='#000';">FORMATION SPECIALISÉE</div></a></li>
										
										<li class="menu-item"><a class="menu-link" href="{{url('/formation#tele')}}"><div onmouseover="this.style.color='#483D8B';" onmouseout="this.style.color='#000';">FORMATION AU TÉLÉPILOTAGE</div></a></li>
									</ul>
								</li>
								<li class="menu-item">
									<a class="menu-link" href="{{url('/video')}}" >
										<div >VIDÉOTHèQUE</div>
									</a>
								</li>
								<li class="menu-item" >
									<a class="menu-link" href="#" >
										<div >actualités</div>
									</a>
								</li>
								<li class="menu-item " >
									<a class="menu-link" href="{{url('/reglementation')}}" >
										<div >REGLEMENTATION</div>
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
					<h1 class="text-transform-none " data-animate="fadeInUp" data-delay="200"> POURQUOI UN CENTRE DE FORMATION ?</h1>
					<div class="barre"  data-animate="fadeInUp" data-delay="500"></div>
				</div>
				<div class="content2" >
					<img src="images/M4_Plan de travail 1-01-01.jpg" alt="">
                </div>
		<div>
		</section><!-- #content end -->
		<section class="centre">
    		<h3 id="first-sec" class="sec">CENTRE DE FORMATION DRONE GROUPE</h3>
            <div class="barre-2"></div>
            <p>
            Ce département dénomé Centre de formation a pour mission de permettre à DRONE GROUPE Côte d'Ivoire de partager l'expérience et l'expertise acquise de ses animateurs dans la maitrise d'oeuvre des grands projets de dévellopement, dans l'aéronautique civile, dans les études techniques et financières des projets de divers secteurs d'activités, avec l'administration, les collectivités locales, les opérateurs économiques, les organisations non gouvernemengales et les cabinets de formation.
            </p>
            <p>
            Le centre de formation de DRONE GROUPE Côte d'Ivoire est un outil de promotion et de valorisation des secteurs privé et public.
            </p>
            <p>
            Les aéronefs télépilotés, engins autonomes ou commandés à distance, associés aux objets connectés sont l’un des piliers de l’industrie du Futur et constituent un enjeu majeur de société. La Science, la Technologie et l’Innovation se développent très rapidement et les nouveaux usages et gisements de valeurs associés sont encore en grande partie méconnus par la population.
            </p>
            <p>
           Les applications des aéronefs télépilotés à des marchés industriels ou grand public sont gigantesques. Les drones vont révolutionner nombre de métiers et de services actuels mais aussi créer de nouveaux métiers principalement dans les secteurs d’activités ci-dessous:
            </p>
            <ul class="animate-on-scroll">
                <li><i class="fa-solid fa-check"></i> infrastructures et transports ;</li>
                <li><i class="fa-solid fa-check"></i> bâtiment et architecture ;</li>
                <li><i class="fa-solid fa-check"></i> industrie, mines et innovation technologique ;</li>
                <li><i class="fa-solid fa-check"></i> urbanisme ;</li>
                <li><i class="fa-solid fa-check"></i> agriculture ;</li>
                <li><i class="fa-solid fa-check"></i> informatique et technologie de l’information et de la communication ;</li>
                <li><i class="fa-solid fa-check"></i> environnement et gestion urbaine ;</li>
                <li><i class="fa-solid fa-check"></i> planification et développement local ;</li>
                <li><i class="fa-solid fa-check"></i> cartographie ;</li>
                <li><i class="fa-solid fa-check"></i> topographie ;</li>
                <li><i class="fa-solid fa-check"></i> thermographie ;</li>
                <li><i class="fa-solid fa-check"></i> ortho photographie ;</li>
                <li><i class="fa-solid fa-check"></i> photogrammétrie ;</li>
                <li><i class="fa-solid fa-check"></i> ressources humaines ;</li>
                <li><i class="fa-solid fa-check"></i> management capacitaire.</li>
            </ul>
            <p>
            L’équipe d’animateurs dudit Centre en matière de formation est composée d’une part des experts de DRONE GROUPE et d’autre part de consultants extérieurs chevronnés.
            </p>
            <p>
            Le Centre de formation entretient un réseau de partenariat de qualité avec plusieurs organismes et a une vocation régionale et internationale.
            </p>
            <p>
            Le centre de formation dispense des formations initiales et des formations spécialisées. Les sessions de formation ne se déroulent que s'il y a un minimum de cinq<strong> (5)</strong> stagiaires.
            </p>
            <div class="barre-2"></div>
			<h3 id="second-sec" class="sec" style="margin-bottom:10px">NOS FORMATIONS</h3>
		</section>
		<section id="forma" class="forma">
            <section id = "theorique"class="formas animate-on-scroll">
				<div class="image" style="background-image:url('images/WhatsApp Image 2024-04-19 at 13.29.12 (2).jpeg');background-size:cover; " ></div>
                <div class="text">
                    <h3>FORMATION THÉORIQUE </h3>
                    <P> <i class="fa-solid fa-book-bookmark"></i><strong>COURS DU JOUR: 05 JOURS // COURS DU SOIR: 10 JOURS</strong></P>
					<ul>
						<li><i class="fa-solid fa-angle-right"></i> DROIT ET RÈGLEMENTATION DES AÉRONEFS TELEPILOTÉS</li>
						<li><i class="fa-solid fa-angle-right"></i> TECHNIQUES AÉRAUNOTIQUES</li>
						<li><i class="fa-solid fa-angle-right"></i> FACTEURS HUMAINS ET COMMUNICATION</li>
						<li><i class="fa-solid fa-angle-right"></i> NOTION DE MÉTÉOROLOGIE AÉRONAUTIQUE</li>
						<li><i class="fa-solid fa-angle-right"></i> PROCEDURES OPÉRATIONNELLES</li>
					</ul>
					<div class="prerequis">
						<span>PRÉREQUIS: </span>TOUTE PERSONNE AYANT DES APTITUDES EN MATHÉMATIQUE ET SCIENCE-PHYSIQUE
					</div>
				</div>
            </section>
            <section id = "pratique" class="formas animate-on-scroll" >
				<div class="image" style="background-image:url('images/dronemapping.jpg');background-size:cover; " ></div>
                <div class="text">
                    <h3>FORMATION PRATIQUE </h3>
                    <P><i class="fa-solid fa-book-bookmark"></i><strong>COURS DU JOUR: 03 JOURS</strong></P>
					<ul>
						<li><i class="fa-solid fa-angle-right"></i> PRÉSENTATION ET CONNAISSANCE DES DRONES</li>
						<li><i class="fa-solid fa-angle-right"></i> THÉORIES SUR LES CONTROLES</li>
						<li><i class="fa-solid fa-angle-right"></i> SIMMULATEUR DE VOL</li>
						<li><i class="fa-solid fa-angle-right"></i> CONCEPTION, PRÉPARATION ET EXÉCUTION DE MISSION</li>
						<li><i class="fa-solid fa-angle-right"></i> SORTIES SUR TERRAIN</li>
					</ul>
				<div class="prerequis"><span>PRÉREQUIS: </span>TOUTE PERSONNE AYANT DES APTITUDES THÉORIQUES AU TÉLÉPILOTAGE </div>
				</div>
			</section>
            <section id = "specialise" class="formas animate-on-scroll">
				<div class="image" style="background-image:url('images/Sans titre HH1-01.jpg');background-size:cover;"></div>
                <div class="text">
                    <h3>FORMATION SPÉCIALISÉE</h3>
                    <P><i class="fa-solid fa-book-bookmark"></i><strong>COURS DU JOUR: 05 JOURS</strong></P>
					<ul>
						<li><i class="fa-solid fa-angle-right"></i> TECHNIQUE DE CARTOGRAPHIE ET DE PHOTOGRAMMÉTRIE</li>
						<li><i class="fa-solid fa-angle-right"></i> LASERGRAMMETRIE</li>
						<li><i class="fa-solid fa-angle-right"></i> TECHNIQUES DE L'AUDIOVISUEL</li>
						<li><i class="fa-solid fa-angle-right"></i> TECHNIQUES DE COMMUNICATION</li>
					</ul>
				<div class="prerequis"><span>PRÉREQUIS: </span>TOUTE PERSONNE AYANT DES APTITUDES THÉORIQUES AU TÉLÉPILOTAGE</div>
				</div>
			</section>
            <section id = "tele" class="formas animate-on-scroll">
				<div class="image" style="background-image:url('images/DRONE4.jpg');background-size:cover;"></div>
                <div class="text">
                    <h3>FORMATION AU TÉLÉPILOTAGE</h3>
                    <P><i class="fa-solid fa-book-bookmark"></i><strong>COURS DU JOUR: 03 JOURS</strong></P>
					<ul>
						<li><i class="fa-solid fa-angle-right"></i> INTRODUCTION A LA RÈGLEMENTATION AÉRIENNE</li>
						<li><i class="fa-solid fa-angle-right"></i> PRÉSENTATION GÉNERALE DES DRONES</li>
						<li><i class="fa-solid fa-angle-right"></i>PERFORMANCE HUMAINE // COMMUNICATION</li>
						<li><i class="fa-solid fa-angle-right"></i> SIMMULATEUR DE VOL</li>
						<li><i class="fa-solid fa-angle-right"></i>SORTIES SUR TERRAIN</li>
					</ul>
					<div class="prerequis"><span>PRÉREQUIS: </span>AUCUN</div>
				</div>
            </section>
		</section>
		<section class="planning ">
			<h1>PLANNING DE FORMATION<br> SEPT <span style="color: #483D8B;">2023 </span>- MARS <span  style="color: #483D8B;">2024</span></h1>
			<table>
				<tr class="blue">
					<td>aucun renseignement</td>
					<td>aucun renseignement</td>
					<td>aucun renseignement</td>
					<td>aucun renseignement</td>
				</tr>
				<tr class="sky">
					<td>aucun renseignement</td>
					<td>aucun renseignement</td>
					<td>aucun renseignement</td>
					<td>aucun renseignement</td>
				</tr>
				<tr class="jaune">
					<td>aucun renseignement</td>
					<td>aucun renseignement</td>
					<td>aucun renseignement</td>
					<td>aucun renseignement</td>
				</tr>
				<tr>
					<td></td>
					<td class="sky">aucun renseignement</td>
					<td class="sky">aucun renseignement</td>
					<td class="sky">aucun renseignement</td>
				</tr>
				<tr>
					<td></td>
					<td class="jaune">aucun renseignement</td>
					<td class="jaune">aucun renseignement</td>
					<td class="jaune">aucun renseignement</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td class="sky">aucun renseignement</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td class="jaune">aucun renseignement</td>
				</tr>
			</table>
		</section>
		@include('sections.footer')
</body>
</html>