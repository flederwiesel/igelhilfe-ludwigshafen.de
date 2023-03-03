<?php
$dir = dirname(__FILE__);

if (isset($_GET["page"]))
	$page = preg_replace("/^.*\//", "", $_GET["page"]);
else
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
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Igelhilfe Ludwigshafen</title>
	<link rel="stylesheet" href="index.css">
</head>
<body>
	<div id="navbar">
		<div id="diner">
			<input type="checkbox" id="showmenu" autocomplete="off">
			<label for="showmenu" id="hamburger">
				<span></span>
				<span></span>
				<span></span>
			</label>
		</div>

		<div id="header">
			<div id="heading">
				<h1>Igelhilfe Ludwigshafen</h1>
			</div>
		</div>

		<div id="menu" class="expanded">
			<div>
				<ul>
					<li><a href="?">Igel gefunden?</a></li>

					<li id="erste-hilfe" class="expandable <?php if ($expand == "erste-hilfe") { ?>expanded<?php } ?>">
						<a href="?page=erste-hilfe"><span style="font-size: 16pt; color: red;">&#x271a;</span>&nbsp;Erste Hilfe</a>
						<span class="arrow"></span>
						<ul>
							<li><a href="?page=igel-aufrollen">Igel aufrollen</a></li>
							<li><a href="?page=fliegeneier-maden">Fliegeneier/-maden</a></li>
						</ul>
					</li>

					<li><a href="?page=pflegestellen">Pflegestellen</a></li>

					<li id="ueber-den-igel" class="expandable <?php if ($expand == "gefahren") { ?>expanded<?php } ?>">
						<a href="?page=igel">Über den Igel</a>
						<span class="arrow"></span>
						<ul>
							<li><a href="?page=biologie">Biologie</a></li>
							<li><a href="?page=ernaehrung">Ernährung</a></li>
							<li><a href="?page=gefahren">Gefahren</a></li>
							<li><a href="?page=auswilderung">Auswilderung</a></li>
						</ul>
					</li>

					<li><a href="?page=wir">Über uns</a></li>
					<li><a href="?page=spenden"><span style="color: red;">&#x2764;&#xfe0f;</span>&nbsp;Spenden</a></li>
				</ul>
			</div>

			<div>
				<ul>
					<li><a href="?page=datenschutz">Datenschutz</a></li>
					<li><a href="?page=impressum">Impressum</a></li>
				</ul>
			</div>

			<div id="contact">
				<div style="font-size: 12pt;"><span class="symbol">&#x1F4DE;&#xfe0e;</span><span class="nowrap">+49 176 5386 9871</span></div>
				<div style="font-size: 9pt;"><span class="symbol">&#x2709;</span>&nbsp;<a href="mailto:info@igelhilfe-ludwigshafen.de">info@igelhilfe-ludwigshafen.de</a></div>

				<div id="social-buttons">
					<a href="https://www.facebook.com/IgelhilfeLudwigshafen" rel="@IgelhilfeLudwigshafen">
						<img title="Facebook" alt="Facebook Button" src="img/social/f_logo_RGB-Blue_24x24.png" class="" width="24" height="24">
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
