<?php
$dir = dirname(__FILE__);

if (isset($_GET["page"]))
	if ($_GET["page"])
		$page = preg_replace("/^.*\//", "", $_GET["page"]);

if (!isset($page))
	$page = "start";

switch ($page)
{
case "igel-aufrollen":
case "fliegeneier-maden":
	$expand = "erste-hilfe";
	break;

case "biologie":
case "ernaehrung":
case "gefahren":
case "auswilderung":
	$expand = "gefahren";
	break;

default:
	$expand = NULL;
	break;
}
?>
<!DOCTYPE html>
<html lang="de-DE">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="google-site-verification" content="VZDQWIFWf9WF5wDf76nll6pCgyQ9OL5pheGBdIyLcgQ"/>
	<meta name="msvalidate.01" content="F47427578188AA19188E38D94756CE8E"/>
	<meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:standard, max-video-preview:0">
	<meta name="description" content="Igelstation und gemeinnütziger Verein. Notfallnummer für verletzte, kranke und hilflose Igel: +49 176 5386 9871.">
	<meta name="keywords" content="igel, igelhilfe, igelstation, krank, verletzt, hilflos, ludwigshafen">
	<meta property="og:type" content="website">
	<meta property="og:locale" content="de_DE">
	<meta property="og:url" content="https://igelhilfe-ludwigshafen.de/">
	<meta property="og:site_name" content="Igelhilfe Ludwigshafen">
	<meta property="og:title" content="Igel gefunden, was nun? – Igelhilfe Ludwigshafen">
	<meta property="og:description" content="Igelstation und gemeinnütziger Verein. Notfallnummer für verletzte, kranke und hilflose Igel: +49 176 5386 9871.">
	<meta property="og:description" content="Wir sind ein gemeinnütziger Verein der sich der Aufklärungsarbeit und Förderung von Lebensraum für Igel widmet. Wir betreiben eine amtl. genehmigte Auffangstation zur Pflege kranker, verletzter und hilfloser Igel mit dem Ziel der Wiederauswilderung.">
	<meta property="og:image" content="https://igelhilfe-ludwigshafen.de/img/igor-150.jpg">
	<meta property="og:image:type" content="image/jpeg">
	<meta property="og:image:width" content="150">
	<meta property="og:image:height" content="150">
	<meta property="fb:app_id" content="@IgelhilfeLudwigshafen">
	<meta name="theme-color" content="#066">
	<title>Igelhilfe Ludwigshafen</title>
	<link rel="sitemap" type="application/xml" title="Sitemap" href="https://igelhilfe-ludwigshafen.de/sitemap.xml">
	<link rel="canonical" href="https://igelhilfe-ludwigshafen.de/">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<!-- third-generation iPad with high-resolution Retina display: -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="favicon144.png" />
	<!-- iPhone with high-resolution Retina display: -->
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="favicon114.png" />
	<!-- first- and second-generation iPad: -->
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="favicon72.png" />
	<!-- non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
	<link rel="apple-touch-icon-precomposed" href="favicon57.png" />
	<!-- basic favicon -->
	<link rel="icon" href="favicon32.png" />
	<!-- -->
	<link rel="shortcut icon" href="favicon.ico" />
	<link rel="stylesheet" href="index.css">
</head>
<body>
	<div id="navbar">
		<div id="diner">
			<input type="checkbox" id="showmenu" autocomplete="off">
			<label for="showmenu" id="hamburger">
				<span>&nbsp;</span>
				<span>&nbsp;</span>
				<span>&nbsp;</span>
			</label>
		</div>

		<div id="header">
			<div class="title">Igelhilfe Ludwigshafen</div>
		</div>

		<div id="menu" class="expanded">
			<div>
				<ul>
					<li><a href="?">Igel gefunden?</a></li>

					<li id="erste-hilfe" class="expandable <?php if ($expand == "erste-hilfe") { ?>expanded<?php } ?>">
						<a href="?page=erste-hilfe"><span style="font-size: 16pt; color: red;">✚</span>&nbsp;Erste Hilfe</a>
						<span class="arrow">&nbsp;</span>
						<ul>
							<li><a href="?page=igel-aufrollen">Igel aufrollen</a></li>
							<li><a href="?page=fliegeneier-maden">Fliegeneier/-maden</a></li>
						</ul>
					</li>

					<li><a href="?page=pflegestellen">Pflegestellen</a></li>

					<li id="ueber-den-igel" class="expandable <?php if ($expand == "gefahren") { ?>expanded<?php } ?>">
						<a href="?page=igel">Über den Igel</a>
						<span class="arrow">&nbsp;</span>
						<ul>
							<li><a href="?page=biologie">Biologie</a></li>
							<li><a href="?page=ernaehrung">Ernährung</a></li>
							<li><a href="?page=gefahren">Gefahren</a></li>
							<li><a href="?page=auswilderung">Auswilderung</a></li>
						</ul>
					</li>

					<li><a href="?page=wir">Über uns</a></li>
					<li><a href="?page=spenden"><span style="color: red;">❤️</span>&nbsp;Spenden</a></li>
				</ul>
			</div>

			<div>
				<ul>
					<li><a href="?page=anreise-parken">Anfahrt / Parken</a></li>
					<li><a href="?page=datenschutz">Datenschutz</a></li>
					<li><a href="?page=impressum">Impressum</a></li>
				</ul>
			</div>

			<div id="contact">
				<div style="font-size: 12pt;"><span class="symbol">📞︎</span><span class="nowrap">+49 176 5386 9871</span></div>
				<div style="font-size: 9pt;"><span class="symbol">✉</span>&nbsp;<a href="mailto:info@igelhilfe-ludwigshafen.de">info@igelhilfe-ludwigshafen.de</a></div>

				<div id="social-buttons">
					<a href="https://www.facebook.com/IgelhilfeLudwigshafen" rel="@IgelhilfeLudwigshafen">
						<img title="Facebook" alt="Facebook Button" src="img/social/f_logo_RGB-Blue_24x24.png" width="24" height="24">
					</a>
					<a href="https://fb.com/msg/IgelhilfeLudwigshafen" rel="@IgelhilfeLudwigshafen">
						<img title="Facebook Messenger" alt="Facebook Messenger" src="img/social/fbmsg-24x24.png" width="24" height="24">
					</a>
					<a href="https://telegram.me/IgelhilfeLudwigshafen" rel="@IgelhilfeLudwigshafen">
						<img title="Telegram Messenger" alt="Telegram Messenger" src="img/social/telegram-24x24.png" width="24" height="24">
					</a>
					<img title="Signal Messenger" alt="Signal Messenger" src="img/social/signal-24x24.png" width="24" height="24">
					<a href="https://api.whatsapp.com/send?phone=+4917653869871" rel="@IgelhilfeLudwigshafen">
						<img title="WhatsApp Messenger" alt="WhatsApp Messenger" src="img/social/WhatsApp_Logo_24x24.png" width="24" height="24">
					</a>
				</div>
			</div>
		</div>
	</div>

	<div id="content">
	<?php
		if (!is_file("$dir/$page.php"))
			$page = "start";

		if (is_file("$dir/$page.php"))
			include("$dir/$page.php");
	?>
	</div>

	<script>
		show = document.getElementById("showmenu");
		menu = document.getElementById("menu");

		show.addEventListener("change", function(e) {

			if (e.target.checked)
				menu.classList.remove("expanded");
			else
				menu.classList.add("expanded");
		});

		arrows = document.getElementsByClassName("arrow");

		for (i = 0; i < arrows.length; i++)
		{
			arrows[i].addEventListener("click", function(e) {

				li = e.target.parentNode;

				if (li.classList.contains("expanded"))
					li.classList.remove("expanded");
				else
					li.classList.add("expanded");
			});
		}
	</script>
</body>
</html>
