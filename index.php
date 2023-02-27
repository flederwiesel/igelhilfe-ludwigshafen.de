<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Igelhilfe Ludwigshafen</title>
	<style>
	@font-face {
		font-family: "Open Sans";
		font-style: normal;
		font-weight: 400;
		src: url(fonts/OpenSans-400.ttf) format("truetype");
	}

	@font-face {
		font-family: "Open Sans";
		font-style: normal;
		font-weight: 500;
		src: url(fonts/OpenSans-500.ttf) format("truetype");
	}

	@font-face {
		font-family: "Open Sans";
		font-style: normal;
		font-weight: 600;
		src: url(fonts/OpenSans-600.ttf) format("truetype");
	}

	@font-face {
		font-family: "Open Sans";
		font-style: normal;
		font-weight: 700;
		src: url(fonts/OpenSans-700.ttf) format("truetype");
	}

	@font-face {
		font-family: "Source Serif Pro";
		font-style: normal;
		font-weight: 400;
		src: url(fonts/SourceSerifPro-400.ttf) format("truetype");
	}

	@font-face {
		font-family: "Source Serif Pro";
		font-style: normal;
		font-weight: 600;
		src: url(fonts/SourceSerifPro-600.ttf) format("truetype");
	}

	@font-face {
		font-family: "Source Serif Pro";
		font-style: normal;
		font-weight: 700;
		src: url(fonts/SourceSerifPro-700.ttf) format("truetype");
	}

	@media screen and (max-width: 779px) {
		/* mobile */
		body {
			background-position: center;
		}

		#diner {
			position: fixed;
			top: 0;
			right: 0;
			padding: 1em;
			z-index: 666;
		}

		#diner input {
			display: none;
		}

		/* https://w3codepen.com/howto-html-css-hamburger-menu-icon/ */
		#hamburger span {
			display: block;
			position: relative;
			z-index: 666;
			background: #333;
			margin: .3em;
			height: .3em;
			width: 2em;
			border-radius: 2px;
			cursor:pointer;

			-webkit-transition: .25s ease-in-out;
			-moz-transition: .25s ease-in-out;
			-o-transition: .25s ease-in-out;
			transition: .25s ease-in-out;
		}

		#showmenu:checked ~ #hamburger span:nth-child(1) {
			-webkit-transform: rotate(135deg) translate(.42em, -.42em);
			-moz-transform: rotate(135deg) translate(.42em, -.42em);
			-o-transform: rotate(135deg) translate(.42em, -.42em);
			transform: rotate(135deg) translate(.42em, -.42em);
		}

		#showmenu:checked ~ #hamburger span:nth-child(2) {
			opacity: 0;
		}

		#showmenu:checked ~ #hamburger span:nth-child(3) {
			-webkit-transform: rotate(-135deg) translate(.42em, .42em);
			-moz-transform: rotate(-135deg) translate(.42em, .42em);
			-o-transform: rotate(-135deg) translate(.42em, .42em);
			transform: rotate(-135deg) translate(.42em, .42em);
		}

		#navbar {
			position: sticky;
			top: 0;
		}

		#header {
			display: table;
		}

		#header h1 {
			margin: 0;
		}

		#heading {
			display: table-cell;
			vertical-align: middle;
			height: 4em;
			padding-left: 6em;
			padding-right: 3em;
			background: url(img/igor-150.jpg) no-repeat;
			background-size: 5em 5em;
			background-position: left center;
		}

		#menu {
			position: fixed;
			top: 0;
			width: 100%;
			height: 100%;
			background: white;
		}

		#menu.collapsed {
			display: none;
		}

		#menu > div:not(:first-child) {
			border-top: 1px solid #ccc;
		}
	}

	@media screen and (min-width: 780px) {
		/* desktop */
		body {
			background-position: center;
		}

		#diner {
			display: none;
		}

		#navbar {
			position: fixed;
			width: 360px;
			height: 100%
		}

		#header {
			box-sizing: border-box;
			text-align: center;
		}

		#header h1 {
			margin: 0 1em;
		}

		#heading {
			padding-top: 10em;
			background: url(img/igor-150.jpg) no-repeat;
			background-size: 9em 9em;
			background-position: center top;
		}

		#menu > div {
			border-top: 1px solid #ccc;
		}

		#content {
			margin-left: 360px;
		}
	}

	body {
		margin: 0;
		padding: 0;
		background-image: url("img/igor.jpg");
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-size: cover;
		font-family: "Open Sans", Verdana, Helvetica, sans-serif;
		font-weight: 500;
		font-size: 12pt;
		color: #333;
	}

	h1, h2, h3, h4, h5, h6 {
		font-family: "Source Serif Pro", serif;
		font-weight: 600;
	}

	.nowrap {
		white-space: nowrap;
	}

	.symbol {
		font-size: 14pt;
	}

	#navbar {
		overflow: auto;
		background: white;
	}

	#header {
		background: white;
		padding: 1em;
	}

	#header h1 {
		font-family: "Open Sans";
		font-size: 20pt;
		font-weight: 500;
	}

	#menu {
		overflow: auto;
		text-align: center;
	}

	#menu > div {
		margin: 0 1em;
		padding: 1em 0;
	}

	#menu a {
		text-decoration: none;
		color: #333;
	}

	#menu ul,
	#menu li {
		margin: 0;
		padding: 0;
		list-style-type: none;
	}

	#menu li {
		width: 100%;
		font-variant-caps: all-small-caps;
		font-size: 13pt;
		font-weight: 700;
		line-height: 200%;
		color: #999;
	}

	#menu li img {
		margin-right: .3em
	}

	#menu li > a:visited {
		color: #333;
	}

	#menu li > a:hover {
		color: #999;
	}

	#menu li.collapsible a:active {
		color: red;
	}

	#menu li.collapsible ul * {
		color: #999;
	}

	#menu li.collapsible ul a:hover {
		color: #666;
	}

	#menu li.collapsible span.arrow {
		display: inline-block;
		margin-left: .5em;
		width: 13px;
		height: 13px;
		background: url("img/arrows.png") no-repeat;
		background-position: 0 -13px;
		cursor: pointer;
	}

	#menu li.collapsible.collapsed span.arrow {
		background-position: 0 0px;
	}

	#menu li.collapsed ul {
		display: none;
	}

	#contact {
		font-size: 10pt;
		padding-top: 2em !important;
	}

	#contact div {
		padding-top: .5em;
	}

	#social-buttons {
		padding-top: 2em !important;
	}

	#content {
		min-height: 100vh;
		background: rgba(255, 255, 255, 0.75);
		padding: 1em;
	}

	#content h1 {
		margin-top: 0.3em;
	}

	#content div:not(:first-child) {
		margin: 1em 0;
	}
	</style>
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
