<!DOCTYPE html>
<html lang="Fr">
<head>
	<meta charset="UTF-8">
	<title>Spot</title>
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="js/vendor/jquery-1.7.2.min.js"></script>
	<script >
		$(window).scroll(function(){
			var section = $(".menu .active-scrollsection").text();
			var num = section.substr(section.length - 1);
			var position = [0,-350,-700,-1050,-1400,-1750];
			$(".video-scroll").css("transform", "translateY("+position[num]+"px)");
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
				<li><a href="#section1">Section1</a></li>
				<li><a href="#section2">Section2</a></li>
				<li><a href="#section3">Section3</a></li>
				<li><a href="#section4">Section4</a></li>
				<li><a href="#section5">Section5</a></li>
			</ul>
		</div>
	</nav>

	<table>
			<tr>
				<td>
					<div class="iphone">
					<div class="screen">
						<video id="video0" class="video-scroll" src="movies/test.mov" autoplay loop muted>
							La vidéo ne peut être affiché
						</video>
						<video id="video1" class="video-scroll" src="movies/test.mov" autoplay loop muted>
							La vidéo ne peut être affiché
						</video>
						<video id="video2" class="video-scroll" src="movies/test.mov" autoplay loop muted>
							La vidéo ne peut être affiché
						</video>
						<video id="video3" class="video-scroll" src="movies/test.mov" autoplay loop muted>
							La vidéo ne peut être affiché
						</video>
						<video id="video4" class="video-scroll" src="movies/test.mov" autoplay loop muted>
							La vidéo ne peut être affiché
						</video>
						<video id="video5" class="video-scroll" src="movies/test.mov" autoplay loop muted>
							La vidéo ne peut être affiché
						</video>
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
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc volutpat tempor magna, semper cursus mi sollicitudin efficitur. Etiam odio lectus, sollicitudin ac tortor non, sollicitudin aliquet mauris. Cras euismod erat erat, sed molestie metus sagittis sed. Vestibulum gravida hendrerit lacus cursus semper. Morbi ut nibh bibendum, accumsan felis vitae, ultrices leo. Donec quis purus sodales, congue arcu vitae, suscipit lacus. Fusce blandit erat diam, vitae convallis massa volutpat hendrerit. Duis sed sagittis justo, vitae mollis velit. Mauris in dui justo. Maecenas et nibh sit amet metus auctor semper sed a eros. Integer mollis orci eu finibus venenatis.</p>
				</div>
				<div class="right">
					<h2>Concept</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc volutpat tempor magna, semper cursus mi sollicitudin efficitur. Etiam odio lectus, sollicitudin ac tortor non, sollicitudin aliquet mauris. Cras euismod erat erat, sed molestie metus sagittis sed. Vestibulum gravida hendrerit lacus cursus semper. Morbi ut nibh bibendum, accumsan felis vitae, ultrices leo. Donec quis purus sodales, congue arcu vitae, suscipit lacus. Fusce blandit erat diam, vitae convallis massa volutpat hendrerit. Duis sed sagittis justo, vitae mollis velit. Mauris in dui justo. Maecenas et nibh sit amet metus auctor semper sed a eros. Integer mollis orci eu finibus venenatis.</p>
				</div>


			</div>
		</td></tr></table>
	</section>

	<section id="section1" class="scrollsections">
		<div class="background" style=""></div>
		<table><tr><td>
				<div class="wrap-content">
					<h2>Trouver un spot</h2>
				</div>
		</td></tr></table>

	</section>

	<section id="section2" class="scrollsections" >
		<div class="background" style=""></div>
		<table><tr><td>
			<div class="wrap-content">
				<h2>Accéder à vos vidéos</h2>
			</div>
		</td></tr></table>
	</section>

	<section id="section3" class="scrollsections" >
		<div class="background" style=""></div>
		<table><tr><td>
			<div class="wrap-content">
				<h2>Partage</h2>
			</div>
		</td></tr></table>
	</section>

	<section id="section4" class="scrollsections" >
		<div class="background" style=""></div>
		<table><tr><td>
			<div class="wrap-content">
				<h2>Premium</h2>
			</div>
		</td></tr></table>
	</section>

	<section id="section5" class="scrollsections" >
		<div class="background" style=""></div>
		<table><tr><td>
			<div class="wrap-content">
				<h2>Application</h2>
			</div>
		</td></tr></table>
	</section>


	<script src="js/plugins.js"></script>
	<script src="js/jquery.scrollSections.js"></script>
	<script>


		$(function() {
			$('.scrollsections').scrollSections({
				createNavigation: false,
    			navigation: true
			});

		});
	</script>
</body>
</html>