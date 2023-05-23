<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blizzard|home</title>
		<meta name="description" content="Startseite">
        
        <link rel="stylesheet" href="/styles.css">
</head>
<body>
	<header id="header-small">
		<img id="title-img" src="/images/Flamme.png"/>
		<p>Blizzard<p>
	</header>
	<header id="header-full">
		<img src="/images/Flamme.png"/>
		<p>Blizzard<p>
	</header>

    {{$slot}}

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