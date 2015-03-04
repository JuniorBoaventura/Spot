<!DOCTYPE html>
<html lang="Fr">
<head>
	<meta charset="UTF-8">
	<title>Spot</title>
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>


	<nav id="scrollsections-navigation" class="wrap-menu">
		<div class="menu">
			<div class="logo"></div>
			<ul>
				<li><a href="#section1">Section1</a></li>
				<li><a href="#section2">Section2</a></li>
				<li><a href="#section3">Section3</a></li>
				<li><a href="#section4">Section4</a></li>
				<li><a href="#section5">Section5</a></li>
				<li><a href="#section6">Section6</a></li>
			</ul>
		</div>
	</nav>
	<table>
			<tr>
				<td><div class="iphone">
					<div class="screen">
						<video  src="movies/test.mov" controls="controls" autoplay loop>


						  Ici l'alternative à la vidéo : un lien de téléchargement, un message, etc.
						</video>
					</div>
				</div></td>
			</tr>
	</table>
	<section id="section1" class="scrollsections" >
		<div class="background dispo1" style=""></div>
		<table><tr><td>
			<div class="wrap-content">
				<h2>Concept</h2>
			</div>
		</td></tr></table>
	</section>

	<section id="section2" class="scrollsections">
		<div class="background" style=""></div>
		<table><tr><td>
				<div class="wrap-content">
					<h2>Trouver un spot</h2>
				</div>
		</td></tr></table>

	</section>

	<section id="section3" class="scrollsections" >
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

	<section id="section3" class="scrollsections" >
		<div class="background" style=""></div>
		<table><tr><td>
			<div class="wrap-content">
				<h2>Premium</h2>
			</div>
		</td></tr></table>
	</section>

	<section id="section3" class="scrollsections" >
		<div class="background" style=""></div>
		<table><tr><td>
			<div class="wrap-content">
				<h2>Application</h2>
			</div>
		</td></tr></table>
	</section>

	<script src="js/vendor/jquery-1.7.2.min.js"></script>
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