@include('sections.head')

<style>

	body{
            font-family:'jumper PERSONAL USE ONLY Light', sans-serif;
			font-size:20px;
        } 
	.sec{
		background-color:#6A5ACD;
		width: 550px; 
		background: linear-gradient(to right, #6A5ACD 60%, #fff 100%);
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
		font-family:'DIN Regular', sans-serif;        
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
		height: 70vh ;
	}

    .content1{
		background-color:#000000;
		padding: 50px;
		padding-top: 90px;
		width:60%;
		height: 70vh ;
		
	}

	.content1>h1{
		color:#ffffff;
		font-size:50px;
		font-family:'jumper PERSONAL USE ONLY Light', sans-serif;
	}

	.content2{
		width: 40%;  
	}

	.content2>img{
		height: 70vh ;
		width: 100%;                                                               
    } 

	.premier{
		width:1300px
	}

	.deuxieme{
		width:740px
	}

	strong{
		font-family:'Arial', sans-serif;
		
	}

	.content-wrap{
		display: flex;
		
	}

	.barre{
		margin-top: 1px;
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
		background-image:url('images/M1_Plan de travail 1.jpg');
		background-size:cover;
		background-color: #000000;
		padding: 30px;
		width: 100%;
		height: 350px ;		
	}

	.content2 {
		height: 350px ;		
		width: 100%;
		display:none
	}

	.content1>h1{
	    margin-top:10%;
		color:#ffffff;
		font-size:30px;
		text-align: center;
		
	}

	.premier{
		width:490px
	}

	.deuxieme{
		width:490px
	}

	.sec{
		background-color:#6A5ACD;
		margin-left: 10px;
        color: yellow;
		padding-left:35px;
		font-weight: lighter;
		font-family:'DIN Regular', sans-serif; 
	}

	.menu-item{
		text-align: justify;
	}

	.sub-menu-container > .menu-item > .menu-link:hover{
			color:#FFD966;
		}


	p{
		font-size: 17px;
	}

	ul>li{
		font-size: 17px;
	}
}
@media (min-width: 770px) and (max-width: 950px){

	.sub-menu-container {
    background-color:#000000;
  
  }

	#logo > a{
			height:20px
		}

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
		margin-top:10%;
		color:#ffffff;
		font-size:35px;
		}

	.content2 {
		height: 500px ;
		width: 100%;
	}

	.content2>img{
		height: 500px ;
		width: 100%;                                                               
	}  

	.menu-item{
		text-align: justify;
	}

	.sub-menu-container > .menu-item > .menu-link:hover{
		color:#FFD966;
	}

	.sec{
		width: 700px;
	}
	.menu-container > .menu-item > .menu-link{
	text-align:justify
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

	.content1{
background-color:#000000;
padding: 30px;
width: 80%;
height: 500px ;		
	
}

	
.content1>h1{
 margin-top:20px;
color:#ffffff;
font-size:40px;
}

.content2 {
	height: 500px ;		
	width: 100%;
}

.content2>img{
	height: 500px ;		
	width: 100%;                                                               
}  

	.sec{
		background-color:#6A5ACD;
		width: 700px;
	}

	.premier{
		width:1000px
	}

}

</style>

<body>
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
									<a class="menu-link" href="#" >
										<div >actualités</div>
									</a>
								</li>
								<li class="menu-item current" >
									<a class="menu-link" href="{{url('/reglementation')}}" >
										<div >REGLEMENTATION</div>
									</a>
								</li>
								<!-- <div class="morph-marker"></div> -->
							</ul>
						</nav>                       
					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->
	
		<section id="content">
		<div class="content-wrap py-0">
				<div class="content1" >
					<h1 class="text-transform-none " data-animate="fadeInUp" data-delay="200"> EXTRAIT DU REGLEMENT AERONAUTIQUE DE COTE D'IVOIRE (RACI <strong>2009</strong>) AMENDEMENT <strong>02</strong>, EDITION <strong>03</strong></h1>
					<div class="barre"  data-animate="fadeInUp" data-delay="500"></div>
				</div>
				<div class="content2" >
					<img src="images/M1_Plan de travail 1.jpg" alt="">
                </div>
		<div>
		</section><!-- #content end -->
		<section class="regle">
    		<h3 class="sec premier">CHAPITRE 7: AUTORISATIONS ET TITRE D'UTILISATION DES AERONEFS TELEPILOTES</h3>
            <div class="sub-regle">
            <div class="barre"></div>
            <p >
				Nul ne peut exploiter un Aéronef Télépiloté sans y avoir été formellement autorisé par l'ANAC.
            </p>
            <div class="num"> 7.1.1</div>
            <p  >
           		 Un exploitant ne peut exploiter un Aéronef Télépiloté pour des activités de travail aérien que s'il détient un agrément de travail aérien et une Autorisation d'Exploitation d' Aéronef Télépiloté (AEAT) en état de validité délivré par l'ANAC.
            </p>
            <div class="num">7.1.2</div>
            <p  >
           		 Pour postuler à un AEAT, un opérateur doit détenir un Agrément de travail aérien et soumettre un dossier de cantidature à l'ANAC au moin quatre-vingt-dix <strong> (90) </strong>jours avant la date prévue d'exploitation
            </p>
            <div class="num">7.3.3</div>
            <p>
           		Les dossiers de candidature mentionnés au<strong> 7.3.3 </strong> doit contenir au moin les éléments suivants:
            </p>
            <ul class="animate-on-scroll">
                <li class="animate-on-scroll">a) Un courrier de demande d'autorisation</li>
                <li class="animate-on-scroll">b) Une lettre d'engagement du postulant</li>
                <li class="animate-on-scroll">c) Une autorisation du ministère de la défense nationnale autorisant les activités particulières projetées</li>
                <li class="animate-on-scroll">d)Une autorisation du ministère en charge de la sécurité autorisant les activités projetées</li>
                <li class="animate-on-scroll">e) l'attestation d'enregistrement de chaque aéronef télépiloté</li>
                <li class="animate-on-scroll">f) les manuels d'utilisation de chaque type d'aéronef télépiloté</li>
                <li class="animate-on-scroll">g) les manuels d'entretien de chaque type d'aéronef télépiloté, si applicable</li>
                <li class="animate-on-scroll">h) la licence, la certification ou l'attestation de formation de chaque télépilote</li>
                <li class="animate-on-scroll">i)Une police d'assurance couvrant l'activité projetée</li>
                <li class="animate-on-scroll">j) Le manuel d'activité particulière rédigé conformément aux spécificaxion de l'appendice <strong>3</strong> au présent règlement.</li>
            </ul>
            <div  class="num">7.3.4</div>
            </div>
            <h3 class="sec deuxieme">CHAPITRE 8:FORMATION DES TELEPILOTES</h3>
            <div class="sub-regle">
            <p>
           		 Nul ne peut piloter un RPA s'il n'est titulaire d'une Attestation, d'un Certificat ou d'une Licence de Télépilote en état de validité reconnue, délivrée ou validée par l'ANAC conformément aux dispositions du RACI<strong> 2000</strong>.
            </p>
            <div class="num">8.1.1</div>
            <p>
           		 La formation théorique doit être dispensée dans un organisme de formation agréé ou habileté et le programme de formation doit être accepté par l'ANAC
            </p>
            <div class="num">8.2.2.2</div>
             </div>
            <div class="barre"></div>
		</section>
		@include('sections.footer')
</body>
</html>