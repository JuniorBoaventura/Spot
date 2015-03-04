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
		<ul>
			<li><a href="#section1">Section1</a></li>
			<li><a href="#section2">Section2</a></li>
			<li><a href="#section3">Section3</a></li>
		</ul>
	</nav>
	<table>
			<tr>
				<td><div class="iphone"></div></td>
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
				<h2>Accéder à vos vidéo</h2>
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