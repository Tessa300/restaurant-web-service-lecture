<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blizzard|Home</title>
        
        <link rel="stylesheet" href="styles.css">
</head>
<body>

	<header id="header-small">
		<img id="title-img" src="images/Flamme.png"/>
		<p>Blizzard<p>
	</header>
	<header id="header-full">
		<img src="images/Flamme.png"/>
		<p>Blizzard<p>
	</header>
	<hr>
	<article class="cols2">
		<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
	</article>
	<hr>
	<h1>Unser Angebot</h1>
	<article class="box-container">
		<div class="box">
			<img src="sandwich.webp">
			<p class="box-title">Sandwich</p>
			<p>mit Tomaten, Salat, Schinken, Gurken, Mais</p>
			<p>mit Tomaten, Salat, Schinken, Gurken, Mais</p>
			<button>+<span> hinzufügen</span></button>
		</div>
		<div class="box">
			<img src="sandwich.webp">
			<p class="box-title">Sandwich</p>
			<p>mit Tomaten, Salat, Schinken, Gurken, Mais</p>
		</div>
		<div class="box">
			<img src="sandwich.webp">
			<p class="box-title">Sandwich</p>
			<p>mit Tomaten, Salat, Schinken, Gurken, Mais</p>
		</div>
		<div class="box">
			<img src="sandwich.webp">
			<p class="box-title">Sandwich</p>
			<p>mit Tomaten, Salat, Schinken, Gurken, Mais</p>
		</div>
		<div class="box">
			<img src="sandwich.webp">
			<p class="box-title">Sandwich</p>
			<p>mit Tomaten, Salat, Schinken, Gurken, Mais</p>
		</div>
		<div class="box">
			<img src="sandwich.webp">
			<p class="box-title">Sandwich</p>
			<p>mit Tomaten, Salat, Schinken, Gurken, Mais</p>
		</div>
		<div class="box">
			<img src="sandwich.webp">
			<p class="box-title">Sandwich</p>
			<p>mit Tomaten, Salat, Schinken, Gurken, Mais</p>
		</div>
		<div class="box">
			<img src="sandwich.webp">
			<p class="box-title">Sandwich</p>
			<p>mit Tomaten, Salat, Schinken, Gurken, Mais</p>
		</div>
	</article>
	<hr>
	<article>
		<p>Musterstraße 5</p>
	</article>
	
	<script>
	window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
    document.getElementById("header-small").style.position = "sticky";
    document.getElementById("header-small").style.top = "0";
  } else {
    document.getElementById("header-small").style.position = "absolute";
    document.getElementById("header-small").style.top = "-10em";
  }
}
	</script>
</body>
</html>