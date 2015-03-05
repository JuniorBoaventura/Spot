<!DOCTYPE html>
<html lang="Fr">
<head>
	<meta charset="UTF-8">
	<title>Spot</title>
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
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
			var position = [0,-350,-700,-1050,-1400];

			if(num>0){
				$('.iphone').css({"transform":"translateY(0)"});
			}

			if(num<1){
				$('.iphone').css({"transform":"translateY(-200%)"});
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
				<li><a href="#section1">Vidéo</a></li>
				<li><a href="#section2">Partage</a></li>
				<li><a href="#section3">Premium</a></li>
				<li><a href="#section4">App</a></li>
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
							<video id="video0" class="video-iphone" autoplay preload loop muted>
								<source src="movies/test.mov"/>
								La vidéo ne peut être affiché
							</video>
							<video id="video1" class="video-iphone"  loop muted>
								<source src="movies/animation1.mp4" type="video/mp4" />
								La vidéo ne peut être affiché
							</video>
							<video id="video2" class="video-iphone" pause preload loop muted>
								<source src="movies/test.mov"/>
								La vidéo ne peut être affiché
							</video>
							<video id="video3" class="video-iphone" pause preload loop muted>
								<source src="movies/test.mov"/>
								La vidéo ne peut être affiché
							</video>
							<video id="video4" class="video-iphone" pause preload loop muted>
								<source src="movies/test.mov"/>
								La vidéo ne peut être affiché
							</video>
							<video id="video5" class="video-iphone" pause preload loop muted>
								<source src="movies/animation1.mp4" type="video/mp4" />
								La vidéo ne peut être affiché
							</video>
						</div>
					</div>
					</div>
			</td>
		</tr>
	</table>
	<section id="section0" class="scrollsections" >
		<div class="background dispo1" style=""></div>
		<table><tr><td>
			<div class="wrap-content">
				<div class="left">
					<h2>Concept</h2>
					<p>
						Visionnez vos exploits directement sur votre iphone grâce à nos pistes balisées.
					</p>
				</div>
				<div class="right bounceInRight animated">
					<img src="img/iphone6-white2.png" height="200" alt="">
				</div>


			</div>
		</td></tr></table>
	</section>

	<section id="section1" class="scrollsections" >
		<div class="background" style=""></div>
		<table><tr><td>
			<div class="wrap-content">
				<div class="right">
					<h2>Visionne tes vidéos</h2>
				</div>

			</div>
		</td></tr></table>
	</section>

	<section id="section2" class="scrollsections" >
		<div class="background" style=""></div>
		<table><tr><td>
			<div class="wrap-content">
				<h2>Partage</h2>
			</div>
		</td></tr></table>
	</section>

	<section id="section3" class="scrollsections" >
		<div class="background" style=""></div>
		<table><tr><td>
			<div class="wrap-content">
				<div class="right">
					<h2>Premium</h2>
				</div>
			</div>
		</td></tr></table>
	</section>

	<section id="section4" class="scrollsections" >
		<div class="background" style=""></div>
		<table><tr><td>
			<div class="wrap-content">
			<div class="left"><h2>Télécharger</h2></div>


			</div>
		</td></tr></table>
	</section>



</body>
</html>