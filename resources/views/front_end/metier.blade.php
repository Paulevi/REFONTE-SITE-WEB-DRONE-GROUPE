@include('sections.head')

	<style>

		body{
            font-family:'jumper PERSONAL USE ONLY Light', sans-serif;
			font-size: 17px;
            }

		.sec{
			background-color:#6A5ACD;
			width: 500px; 
			background: linear-gradient(to right, #6A5ACD 60%, #fff 100%);
			margin-left: 10px;
            color: yellow;
			padding-left:35px;
			font-weight: lighter;
			font-family:'DIN Regular', sans-serif;
			font-size: 20px;

		}

        .menu > p{
			margin-left: 100px ;
			margin-right: 100px;
			font-size: 17px;
        }
		

        .metier{
            margin-top: 50px;
        }

		.metiers{
			display:flex;
			margin: 40px;
			margin-top: 50px;
			justify-content:space-evenly;
		}

		.metiers >.text > h3{
			font-family:'jumper PERSONAL USE ONLY Light', sans-serif;
			font-size: 25px;

		}

		.metiers >.text >p{
			font-size: 17px;
			
		}

		.metiers>.text{
			width: 60%;
			font-size: 17px;
			
		}

		.metiers>.image >img{
			height: 100%;
			width: 400px;
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

		.specials>.text>.barre{
			margin-bottom: 5px;
		}
		

		.specials>.text>h6{
			font-family:'jumper PERSONAL USE ONLY Light', sans-serif;
			font-size: 23px;
		}

		.specials>.text>p>strong{
			font-family:'Arial', sans-serif;
		}

		.text > .barre, h5{
			margin:0;
		}

		/* .image{
			height: 300px;
			width: 300px;
			
			background-size:cover;
		} */
        
		.special{
			background-color:#000000;
		}
		.special> h1 > span{
			padding: 10px;
    	border-bottom: 4px solid #FFF;
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
			height:70vh;
			margin-bottom: 30px;
		}
		.content1{
			background-color:#000000;
			padding: 50px;
			padding-top: 90px;
			width: 43%;
			height: 70vh ;
		}

		.content1>h1{
			color:#ffffff;
			font-size:62px;
			font-family:'jumper PERSONAL USE ONLY Light', sans-serif;
		}

		.content2{
			height: 70vh ;
			width: 57%;
		}

		.content2>img{
			height: 70vh ;
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
			height: 30px;
			width: 80%;
			font-size: 17px;
			background: linear-gradient(to right, #000 60%, #fff 100%);

			/* box-shadow: 10px 5px 5px 0px rgba(0, 0, 0, 0.5); */

		}

		.menu > ul >li >i{
			margin-left: 40px;
			margin-right:20px;
			color:#FFD966
		}

		.troisieme{
			width: 800px;
		}

		.dernier{
			margin-top:20px;
		}


		
@media screen and (max-width: 769px){

	.sub-menu-container {
    background-color:#000000;
  
  }

  #logo > a{
	height:15px
}

	#content{
		height:350px;	
		margin-bottom:50px;
	}

	.menu > p{
			margin-left: 50px ;
			margin-right: 50px;
			font-size: 17px;
        }

	.menu > ul >li>i{
		margin-left: 4px;
	}

	.menu > ul >li{
		    font-size:15px;
			padding-left:2px;
			margin-left: 40px;
			margin-top: 20px;
			list-style: none;
			background: linear-gradient(to right, #000 70%, #fff 100%);
			background-color: #000000;
			color:#fff;
			height: 50px;
			width: 90%;

		}


	.menu-container{
		
		text-align:center;
		}
	.content1{
			/* background-color: #000000; */
			background-image:url('images/drone2.jpg');
			background-size:cover;
			padding: 30px;
			width: 100%;
			height: 350px;
				}

		.content2 {
			height: 50vh;
			width: 100%;
			display:none;
		}
		.content2>img{
			height: 50vh ;
			width: 100%;                                                               
		}  
	.content1>h1{
		margin-top:18%;
		color:#fff;
		font-size:35px;
		text-align: center;

		}

		.metier{
			margin-left:-65px
		}

		

		.metiers{
        flex-direction: column;
        align-items: stretch;
		position: relative;
		left: 50px;}

		.metiers > .text >h3{
			font-size:20px;
		}
		.metiers > .text >p{
			font-size:17px;
		}

		.sub-menu-container > .menu-item > .menu-link:hover{
			color:#FFD966;
		}

		.menu-item{
			text-align: justify;
			/* border-bottom: 2px solid #fff; */
		}

		.specials >.text{
			padding-top :20px;
			width:100%;
		}

		.special{
			height:100%;
			width: 100%;
			
		}

		.first-ligne .specials:Nth-child(2){
			/* background:red; */
			margin-bottom:-25%
		}

		.second-ligne .specials:Nth-child(2){
			/* background:red; */
			height: 600px;
		}

		.first-ligne, .specials{
			
			width:100%;
			margin-left:3%;
		}

		.second-ligne, .specials{
			
			width:100%;
			margin-left:3%;
		}

		.first-ligne .specials .text{
			
			width:100%;
			margin-left:5%;
		}
		.second-ligne .specials .text{
			width:100%;
			margin-left:5%;
			
		}

		.specials .text .barre{
			width: 100%;
		}
		
		.first-ligne, .second-ligne {
			width:100%;
			margin-left:-5%;
			flex-direction: column;
			align-items: stretch;
		}
		.specials{		
			margin-bottom:10%;	
			height: 500px;
			width: 100%;
			margin-bottom:5%;
			padding-left:2%;
			flex-direction: column;
       		align-items: stretch;
		}

		.specials .image{
			width: 95%;
		}
		.metiers>.text{
			width: 400px;
		}

		.metiers>.image{
			width: 400px;
		}

		.metiers>.image>img{
			height: 350px;
		}

		.sec{
			padding-left:4px;
			width: 400px;
		}

		.troisieme{
			width: 400px;
		}

	}

	
@media (min-width: 770px) and (max-width: 950px){

	.sub-menu-container {
    background-color:#000000;
  
  }

 	 #logo > a{
	height:21px
	}

	.menu-container > .menu-item > .menu-link >div{
		font-size:11px;
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
		.menu-item{
			text-align: justify;
		}
		.sub-menu-container > .menu-item > .menu-link:hover{
		color:#FFD966;
	}

	}

@media (min-width: 951px) and (max-width: 1400px){

	#logo > a{
	height:21px
	}

	.menu-container > .menu-item > .menu-link >div{
		font-size:11px;
	}

	.menu-container > .menu-item > .menu-link{
	text-align:justify
}
#content{
	height: 500px ;		

}
	
	.specials > image{
		width:100px;
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
	font-size: 55px;

}

	.content2 {
		height: 500px ;		
		width: 100%;
	}

	.content2>img{
	height: 500px ;		
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
	font-size: 20px;gba(0, 0, 0, 0.5);

		}
}	</style>

</head>

<body id="body" class="body">		
	<div id="loader"></div>		
		<header id="header" class="sticky dark">
			<div id="header-wrap">
				<div class="container">
					<div class="header-row">
						<div id="logo">
							<a href="{{url('/')}}">
								<img class="logo-default"  src="images/logodronegroupe.png" alt="drone groupe Logo" style="height: 40px; width: auto;">
							</a>
						</div>
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
								<li class="menu-item current">
									<a class="menu-link" href="{{url('/metier')}}" >
										<div >NOS METIERS</div>
									</a>
								</li>
								<li class="menu-item">
									<a class="menu-link" href="{{url('/formation')}}" >
										<div >NOS FORMATIONS</div>
									</a>
									<ul class="sub-menu-container border-top">
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
				<div class="content1">
					<h1 class="text-transform-none " data-animate="fadeInUp" data-delay="200"> QUELS SONT NOS METIERS ?</h1>
					<div class="barre" data-animate="fadeInUp" data-delay="500"></div>
				</div>
				<div class="content2" >
					<img src="images/drone2.jpg" alt="">
                </div>
		<div>
		</section><!-- #content end -->
		<section class="menu">
    		<h3 class="sec premier">EXPLORATION GEOSPACIALE</h3>
            <div class="barre-2"></div>
            <p>
            DRONE GROUPE met à votre disposition le potentiel des drones professionnels homologués, du matériel de géodétection à la pointe de la technologie pour différentes applications techniques et audiovisuelles et des opérateurs chevronnés.
            </p>
            <p>
			Partenaire de référence des entreprises, industriels et collectivités publiques, DRONE GROUPE est un acteur majeur de l’imagerie aérienne par drones et l'exploration géospatiale, implanté sur le territoire français et en Afrique de l'ouest en attendant le déploiement dans les autres régions de l'Afrique. Nous innovons constamment pour garantir les meilleurs diagnostics et les meilleurs études aux moindres coûts avec un maximum de souplesse et de réactivité.
            </p>
			<h3 class="sec deuxieme">EXPLORATION CAPACITAIRE</h3>
            <div class="barre-2"></div>
            <p>
			DRONE GROUPE, grâce à des recherches poussées, a réussi à développer au moyen de l'intelligence artificielle, une solution innovante permettant de numériser les capacités intrinsèques de l'être humain et son environnement.
			Ainsi, nous offrons aux particuliers, entreprises et organisations, la possibilité de fonctionner plus efficacement, car ayant des employés et des collaborateurs plus efficients à leurs postes.</p>
			<h3 class="sec troisieme">QU'EST-CE QUE LE MANAGEMENT CAPACITAIRE ?</h3>
            <div class="barre-2"></div>
            <p>
			Le management capacitaire prend en compte les exigences capacitaires des entreprises, des organisations et des postes de travail, et leur confrontation aux capacités des postulants ou des salariés. C’est un moyen complémentaire aux méthodes classiques traditionnellement utilisées pour les prises de décision. Le management capacitaire permet d’améliorer la performance et l’efficacité des organisations et des entreprises par la réduction des dysfonctionnements résultant des insuffisances capacitaires humaines, par un choix optimal dès le recrutement et de l’affectation du personnel à des postes adéquats.
			Le management capacitaire utilise des outils innovants permettant de répondre aux interrogations portant sur des questions irrationnelles telles que :</p>
			<ul class="animate-on-scroll">
				<li  class="animate-on-scroll"><i class="fa fa-check"></i>LA CAPACITÉ DE PROBITÉ MORALE OU D'INTEGRITÉ</li>
				<li  class="animate-on-scroll"><i class="fa fa-check"></i>LA CAPACITÉ DE GESTION DE CONFLITS, DE REGULATION OU D'AUTO-REGULATION</li>
				<li  class="animate-on-scroll"><i class="fa fa-check"></i>LA CAPACITÉ DE LUCIDITÉ, DE VIGILANCE ET D'ATTENTION</li>
				<li  class="animate-on-scroll"><i class="fa fa-check"></i>LA CAPACITÉ DE REFLEXION (ÉLABORATION DE STRATÉGIES ET DE SCÉNARIOS)</li>
				<li  class="animate-on-scroll"><i class="fa fa-check"></i>LA CAPACITÉ ENTREPRENARIALE</li>
				<li  class="animate-on-scroll"><i class="fa fa-check"></i>LA CAPACITÉ MANAGÉRIALE</li>
				<li  class="animate-on-scroll"><i class="fa fa-check"></i>LA CAPACITÉ D'ENDURANCE ET DE PERSÉVÉRANCE</li>
				<li  class="animate-on-scroll"><i class="fa fa-check"></i>LA CAPACITÉ DE DYNAMISME ET DE MOBILISATION DE RESSOURCES</li>
			</ul>
		</section>
		<h3 class="sec dernier">NOS METIERS</h3>
		<section id="metier" class="metier">
            <div class="metiers animate-on-scroll">
                <div class="text">
                    <h3>AUDIT ET DÉTECTION DES INFRASTRUCTURES AÉRIENNES, ENTERRÉES, TERRESTES ET SOUS-TERRAINES, MARINES ET SOUS-MARINES</h3>
                    <P>AVEC NOS SOLUTIONS DE DÉTECTION POUR DECOUVRIR DES DONNÉES DE RESEAUX, RELEVER NUMERIQUEMENT VOS SOUS-SURFACES ET LES CONVERTIR IMMÉDIATEMENT EN INFORMATIONS EXPLOITABLES ADAPTÉES A VOS BESOINS, AUSSI BIEN SUR LE TERRAIN </P>
                </div>
                <div class="image"><img src="images/hhj_Plan de travail 1 (1).jpg" alt=""></div>
            </div>
            <div class="metiers animate-on-scroll">
                <div class="text">
                    <h3>TRAITEMENT DE DONNÉES</h3>
                    <P>(CARTOGRAPHIE, TERMOGRAPHIE, LASERGRAMMETRIE, ORTHOPHOTO, PHOTOGRAMMÉTRIE)</P>
                </div>
                <div class="image"><img src="images/M11-02.jpg" alt="" ></div>
            </div>
            <div class="metiers animate-on-scroll">
                <div class="text">
                    <h3>FORMATION TÉLÉPILOTES</h3>
                    <P>NOTRE CENTRE DE FORMATION HOMOLOGUÉ PAR L'ANAC DISPENSE DES FORMATIONS THÉORIQUES, PRATIQUES OU ENCORE SPECIALISÉES POUR FAIRE DE VOUS DES PROFESSIONNELS. </P>
                </div>
                <div class="image"><img src="images/M11-02-01.jpg" alt="" ></div>
            </div>
            <div class="metiers animate-on-scroll">
                <div class="text">
                    <h3>EXPLORATION CAPACITAIRE</h3>
                    <P>GRACE A NOS RECHERCHES POUSSÉES , NOUS AVONS REUSSIT A DEVELOPPER AU MOYEN DE L'INTELLIGENCE ARTIFICIELLE, UNE SOLUTION INNOVANTE PERMETTANT DE NUMERISER LES CAPACITÉS INTRINSEQUE(APTITUDE NATURELLE, INNÉE) DE L'ETRE HUMAIN ET SON ENVIRONNEMENT, AINSI NOUS OFFRONS AUX PARTICULIERS, ENTREPRISES ET ORGANISATIONS, LA POSSIBILITÉ DE FONCTIONNER PLUS EFFICACEMENT, CAR AYANT DES EMPLOYÉS ET DES COLLABORATEURS PLUS EFFICACES A LEURS POSTES.</P>
                </div>
                <div class="image"><img src="images/M2_Plan de travail 1-01.jpg" alt="" ></div>
            </div>
            <div class="metiers animate-on-scroll">
                <div class="text">
                    <h3>SECURITÉ PUPLIQUE ET SURVEILLANCE</h3>
                    <P>(RECONNAISSANCE FACIALE PAR IA)</P>
                </div>
                <div class="image"><img src="images/neuronne2.png" alt="" style="height=300px; width=300px"></div>
            </div>
		</section>
		<section class="special">
			<h1> <span  style="color:#ffffff;">NOS SPECIALITÉS</span></h1>
			<div class="first-ligne">
			<div class="specials animate-on-scroll">
			<div class="image"><img src="images/M12_Plan de travail 1-01.jpg" alt=""></div>
                <div class="text">
                    <h6  style="color: #fff;">DETECTER, REPERTORIER, NUMERISER</h6>
					<div class="barre"></div>
                    <P>INSPECTION TEMPORELLE DES BATIMENTS, CHANTIERS, BTP</P>
                </div>
            </div>
            <div class="specials animate-on-scroll" >
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
            <div class="specials animate-on-scroll"">
				<div class="image"><img src="images/EEE- 1-01.jpg" alt=""></div>
                <div class="text">
                    <h6 style="color: #fff;">REALITÉ AUGMENTÉE, TOURS ET VISITES VIRTUELLES</h6>
					<div class="barre"></div>
                    <P>AFFICHAGE D'INFRASTRUCTURES AVEC LA REALITÉ AUGMENTÉE, VIRTUALISATION DE L'ENVIRONNEMENT INTERIEUR ET EXTERIEUR</P>
                </div>
               
            </div>
			</div>

		</section>
		@include('sections.footer')
</body>
</html>