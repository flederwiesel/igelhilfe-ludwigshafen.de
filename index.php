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

		<div id="menu" class="collapsed">
			<div>
				<ul>
					<li><a href="">Igel gefunden?</a></li>

					<li id="erste-hilfe" class="collapsible collapsed">
						<a href=""><span style="font-size: 16pt; color: red;">&#x271a;</span>&nbsp;Erste Hilfe</a>
						<span class="arrow"></span>
						<ul>
							<li><a href="">Igel aufrollen</a></li>
							<li><a href="">Fliegeneier/-maden</a></li>
						</ul>
					</li>

					<li><a href="">Pflegestellen</a></li>

					<li id="ueber-den-igel" class="collapsible collapsed">
						<a href="">Über den Igel</a>
						<span class="arrow"></span>
						<ul>
							<li><a href="">Biologie</a></li>
							<li><a href="">Ernährung</a></li>
							<li><a href="">Gefahren</a></li>
							<li><a href="">Auswilderung</a></li>
						</ul>
					</li>

					<li><a href="">Über uns</li>
					<li><a href=""><span style="color: red;">&#x2764;&#xfe0f;</span>&nbsp;Spenden</a></li>
				</ul>
			</div>

			<div>
				<ul>
					<li><a href="">Datenschutz</a></li>
					<li><a href="">Impressum</a></li>
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
		<h1>Igel gefunden?</h1>

		<div style="color: red; font-size: 16pt;">Notfallnummer für Igelfunde: <span class="nowrap">+49 176 5386 9871</span></div>
		<div style="font-weight: 700;">Da wir die Igelstation ausschließlich ehrenamtlich betreiben, sind wir nicht immer sofort erreichbar. In diesem Falle bitte eine Nachricht hinterlassen. In dringenden Fällen, die Sofortmaßnahmen erfordern, bitte eine Igelstation / Pflegestelle über unsere Pflegestellen-Links suchen und in der Zwischenzeit unsere Ratschläge zur Ersten Hilfe zu Rate ziehen.</div>

		<h2>Was ist bei Igelfunden zu beachten?</h2>
		<div>Nach § 44 Bundesnaturschutzgesetz darf ein Igel als Vertreter einer besonders geschützten Art nicht aus der Natur entnommen werden. Ausnahme bilden nach § 45 ebd. kranke, verletzte oder hilflose Tiere.</div>

		<h2>Wann ist ein Igel hilflos?</h2>
		<div>Nicht alle Fundigel benötigen Hilfe. Bitte die Checkliste durchgehen um festzustellen, ob es sich wirklich um einen Notfall handelt!</div>
	</div>

	<script>
		show = document.getElementById("showmenu");
		menu = document.getElementById("menu");

		show.addEventListener("change", function(e) {

			if (e.target.checked)
				menu.classList.remove("collapsed");
			else
				menu.classList.add("collapsed");
		});

		arrows = document.getElementsByClassName("arrow");

		for (i = 0; i < arrows.length; i++)
		{
			arrows[i].addEventListener("click", function(e) {

				li = e.target.parentNode;

				if (li.classList.contains("collapsed"))
					li.classList.remove("collapsed");
				else
					li.classList.add("collapsed");
			});
		}
	</script>
</body>
</html>
