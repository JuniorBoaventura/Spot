<!DOCTYPE html>
<html lang="Fr">
<head>
	<meta charset="UTF-8">
	<title>Spot</title>
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>


	<div class="wrap-menu">
		<ul>
			<li><a href="#section1">Section1</a></li>
			<li><a href="#section2">Section2</a></li>
			<li><a href="#section3">Section3</a></li>
		</ul>
	</div>

	<section id="section1" class="scrollsections" style="background-color:red;">

		<table>
			<tr>
				<td><div class="iphone"></div></td>
			</tr>
		</table>

		<div class="wrap-content"></div>
	</section>

	<section id="section2" class="scrollsections" style="background-color:blue;">
		<div class="wrap-content"></div>
	</section>

	<section id="section3" class="scrollsections" style="background-color:green;">
		<div class="wrap-content"></div>
	</section>

	<script src="js/vendor/jquery-1.7.2.min.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/jquery.scrollSections.js"></script>
	<script>
		$(function() {
			$('.scrollsections').scrollSections();
		});
	</script>
</body>
</html>