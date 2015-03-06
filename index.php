<!DOCTYPE html>
<html lang="Fr">
<head>
	<meta charset="UTF-8">
	<title>Spot</title>
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="icon" type="image/png" href="img/spot-logo-app.png">
	<script src="js/vendor/jquery-1.7.2.min.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Roboto:500,400italic,100,300,700,500italic,100italic,300italic,400' rel='stylesheet' type='text/css'>
	<script src="js/plugins.js"></script>
	<script src="js/jquery.scrollSections.js"></script>
	<script>

		$(function() {
			var num = 0;
			$('.scrollsections').scrollSections({
				createNavigation: false,
    			navigation: true
			});
		});

		$(window).scroll(function(){
			var section = $(".menu .active-scrollsection").attr( "href" );

			var num = section.substr(section.length - 1);
			var position = [0,-350,-700,-1050,-1400,-1750,-2100];

			if(num>0){
				$('.iphone').css({
					"transform":"translateY(0)",
					"-webkit-transform": "translateY(0)",
		    		"-ms-transform":"translateY(0)",
		        	"transform":"translateY(0)",
					"-webkit-transition":"-webkit-transform 1s ease;"
				});
			}

			if(num<1){
				$('.iphone').css({
					"transform":"translateY(-200%)",
					"-webkit-transform": "translateY(-200%)",
		    		"-ms-transform":"translateY(-200%)",
		        	"transform":"translateY(-200%)",
					"-webkit-transition":"-webkit-transform 1s ease;"
				});
			}

			if(num == 2){
				$('.iphone').css({
					"-webkit-transform": "rotate(-90deg)"

				});

			}
			$(".slider").css({
				"transform" : "translateY("+position[num]+"px)",
				"-webkit-transform": "translateY("+position[num]+"px)",
	    		"-ms-transform":"translateY("+position[num]+"px)",
	        	"transform":"translateY("+position[num]+"px)",
				"-webkit-transition":"-webkit-transform 1s ease;"
			});

			$("video").each(function(){
    			$(this).get(0).pause();
			});

			$("#video" + num).get(0).currentTime = 0;

			$("#video" + num).get(0).play();

			console.log(section);

			console.log(position[num]);
		});
	</script>
</head>
<body>

	<nav id="scrollsections-navigation" class="wrap-menu">
		<div class="menu">
			<div class="logo"></div>
			<ul>
				<li><a href="#section0">Home</a></li>
				<li><a href="#section1">App</a></li>
				<li><a href="#section2">Vidéos</a></li>
				<li><a href="#section3">Partage</a></li>
				<li><a href="#section4">Premium</a></li>
				<li><a href="#section5">Témoignages</a></li>
				<li><a href="#section6">Télécharger</a></li>
				<li><a href="" class="login">Login</a></li>
			</ul>
		</div>
	</nav>

	<table>
			<tr>
				<td>
					<div class="iphone">
					<div class="screen">
						<div class="slider">

							<img id="video0" src="pictures/white.jpg" alt="fond blanc">

							<video id="video1" class="video-iphone" loop muted>
								<source src="movies/animation1.mp4" type="video/mp4" />
								La vidéo ne peut être affichée
							</video>

							<video id="video2" class="video-iphone" preload loop muted>
								<source src="movies/animation4.mp4" type="video/mp4"/>
								La vidéo ne peut être affichée
							</video>

							<video id="video3" class="video-iphone" preload loop muted>
								<source src="movies/animation5.mp4" type="video/mp4"/>
								La vidéo ne peut être affichée
							</video>

							<video id="video4" class="video-iphone" preload loop muted>
								<source src="movies/animation2.mp4" type="video/mp4"/>
								La vidéo ne peut être affichée
							</video>

							<video id="video5" class="video-iphone" preload loop muted>
								<source src="movies/animation3.mp4" type="video/mp4"/>
								La vidéo ne peut être affichée
							</video>

							<img id="video6" src="pictures/app-store.jpg" alt="Apple Store">

						</div>
					</div>
					</div>
			</td>
		</tr>
	</table>
	<section id="section0" class="scrollsections" >
		<div class="background">
			<div class="produit bounceInLeft animated"></div>
		</div>
		<table><tr><td>
			<div class="wrap-content">
				<div class="left">
					<h2>Concept</h2>
					<p>
						<b>Urban riders !</b> Avez-vous déjà imaginé vous voir réaliser vos exploits ? Et que la caméra vous suive ? Positionnez vos balises iBeacon©. Fixez votre caméra. Ready ? Let’s Spot ! Ridez, puis visionnez vos exploits directement sur votre smartphone.
					</p>
				</div>
				<div class="right">

				</div>
			</div>
		</td></tr></table>
	</section>

	<section id="section1" class="scrollsections" >
		<div class="background"></div>
		<table><tr><td>
			<div class="wrap-content">
				<div class="left" style="text-align:center; margin-top:100px;">
					<img src="img/spot-logo-app.png" height="90" style="diplay:inline-block;" alt="Logo App">
				</div>
				<div class="right">
					<h2>Application</h2>
					<p><b>Spot©</b> est votre interface pour accéder à vos vidéos. Si vous avez une caméra de sport, après synchronisation, votre caméra pointera en permanence sur votre smartphone. Sinon, filmez avec votre smartphone, et un bracelet connecté fera office de cible.<p>
			</div>
			</div>
		</td></tr></table>
	</section>

	<section id="section2" class="scrollsections" >
		<div class="background"></div>
		<table><tr><td>
			<div class="wrap-content">
				<div class="left">
					<h2>Vidéos</h2>
					<p>
						<b>Visionnez</b> vos Spots pendant votre session, <br>ou après. Libre à vous d’améliorer vos <br>performances ou de choisir un meilleur <br> angle de vue !
					</p>
				</div>
			</div>
		</td></tr></table>
	</section>

	<section id="section3" class="scrollsections" >
		<div class="background"></div>
		<table><tr><td>
			<div class="wrap-content">
				<div class="right">
					<h2>Partage</h2>
					<p>
						<b>Partagez</b> vos prouesses avec vos amis. Par Facebook, MMS ou email, envoyez en un clic vos Spot favoris.
					</p>
				</div>
			</div>
		</td></tr></table>
	</section>

	<section id="section4" class="scrollsections" >
		<div class="background"></div>
		<table><tr><td>
			<div class="wrap-content">
				<div class="left">
					<h2>Premium</h2>
					<p>
						<b>En manque</b> d’espace de stockage ? Souscrivez à notre abonnement Premium. Pour 5€ par mois, un stockage de 100 Go sur notre Cloud.
					</p>
				</div>
			</div>
		</td></tr></table>
	</section>

	<section id="section5" class="scrollsections" >
		<div class="background"></div>
		<table><tr><td>
			<div class="wrap-content">
				<div class="right">
					<h2>Témoignages</h2>
					<p>
						<b>Des avis</b> déjà satisfaits des utilisateurs de notre version bêta !
					</p>
				</div>
			</div>
		</td></tr></table>
	</section>

	<section id="section6" class="scrollsections" >
		<div class="background"></div>
		<table><tr><td>
			<div class="wrap-content">
				<div class="left">
					<h2>Télécharger</h2>
					<p><b>Notre application</b> est disponible sur l’AppStore et Google Play.</p>
					<a href="#" class="order">Commander <b>Spot</B></a>
				</div>
				<div class="right">
					<img src="img/appstore-google-play.png" height="110" style="margin-top:100px;" alt="logo store">
				</div>
			</div>
		</td></tr></table>
	</section>

</body>
</html>