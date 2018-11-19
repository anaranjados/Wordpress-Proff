<!DOCTYPE html>
<html lang="ru" xmlns="http://www.w3.org/1999/xhtml" class="list">
<head><meta http-equiv="Content-Script-Type" content="text/javascript"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><title>a DEMO site</title><meta name="viewport" content="width=device-width, initial-scale=1.0"><base href="http://demo.i.proffline.net/"><meta name="author" content="Web: Alejandro Proenza | Design: Georgiy Zosimov | Video: Alexey Shumilov | @proffline team">
<!-- group of Favicons --><meta name="msapplication-config" content="/media/fav/browserconfig.xml"><meta name="msapplication-TileImage" content="/media/fav/fav228.png"><link rel="apple-touch-icon" sizes="57x57" href="/media/fav/fav57x57.png"><link rel="apple-touch-icon" sizes="60x60" href="/media/fav/fav60x60.png"><link rel="apple-touch-icon" sizes="72x72" href="/media/fav/fav72x72.png"><link rel="apple-touch-icon" sizes="76x76" href="/media/fav/fav76x76.png"><link rel="apple-touch-icon" sizes="114x114" href="/media/fav/fav114x114.png"><link rel="apple-touch-icon" sizes="120x120" href="/media/fav/fav120x120.png"><link rel="apple-touch-icon" sizes="144x144" href="/media/fav/fav144x144.png"><link rel="apple-touch-icon" sizes="152x152" href="/media/fav/fav152x152.png"><link rel="apple-touch-icon" sizes="180x180" href="/media/fav/fav180x180.png"><link rel="mask-icon" href="/media/fav/fav310-safari.svg" color="#000000"><meta rel="icon" type="icon/x-icon" href="favicon.ico">
<style type="text/css">@font-face {src: url("/media/font_YiBaiti.woff");font-family: Baiti;}@font-face {src: url("/media/font_CenturyGothic.woff");font-family: CenturyG;}@font-face {src: url("/media/font_Condensed.woff");	font-family: Condensed; }
body { margin:0%;	font-family: CenturyG; }	#content { overflow: hidden; }	#content img { width: 100%; }

/* MENU */
.menu-slide { margin-top: 9.35vw;	height: 40.65vw;	background-image: url("/media/Logo.png");	background-repeat: no-repeat;	background-size: contain; }
.menu-slide p { font-size: 4.2vw;	letter-spacing: 0.5em; float:left }
.menu-slide h1 { margin-top: 21vw;	margin-left: 36.4vw;	line-height: 1vw;	color: #231F20;	position: absolute; }
#menuElems { margin-top: 24.5vw;	padding-left: 36.38vw;	position: absolute;	}
#menuElems a { padding-right: 1.57vw;	font-family: Condensed;	font-size: 0.93vw;	white-space: pre;	text-decoration: none;	text-transform: uppercase; color: #231F20; letter-spacing: 0.1vw}
#menuElems a:hover, a:active { color:#E30613; }

/* ABOUT */
#about h2 { font-size:1.1vw;	margin-left:32vw;	margin-top: -46.2vw;	position: absolute;		letter-spacing: 0.2em;	color: white;	font-weight: normal; }
#about p { font-size: 5.6vw;	letter-spacing: 0.2em;	margin-left: 10vw;	margin-top:-45.9%;	position: absolute;}
#thin-grey-stripe {z-index: 1;	width:36%;	height:0.3vw;	background-color: white;	margin-top: -47vw;	position: absolute;	border-width:0px;}
#skewed-stripe { margin-top:-44.5%;	height:4vw;	width:52%;	margin-left:-8%;	position: absolute;	border-width: 0px;	background-color: white;	-ms-transform: skewX(-22deg); -webkit-transform: skewX(-22deg); transform: skewX(-22deg); }
#about-contents { margin-top: -37%;	width: 32vw;	font-size: 0.9vw;	margin-left: 10.3vw;	text-align: justify;	letter-spacing: 0.03vw;	position: absolute;	color: white;	text-indent: 3vw; }
.LogoFont {	font-family: Baiti;	font-weight: bold;	text-transform: uppercase;	color: #231F20; }
#triangle-right span {color: #E30613; position: absolute; font-size: 9vw; }	/* width: 0;	height: 0;	border-top: 0.5vw solid transparent;	border-left: 1.1vw solid #E30613;	border-bottom: 0.5vw solid transparent; } */
#triangle-right { position: relative;	margin-left: 39vw;	margin-top: -32vw; }

/* STORES */
#dpt { height:70vw;	margin-top: 29vw}
#dpt hr, #dpt img, #dpt h2, #dpt p { position: absolute; }
#dpt h2 { right: 39.2%;  margin-top: -20.5%;	font-size: 1.15vw;	font-weight: normal;	letter-spacing: 0.25em;	color: #231F20;	}
#dpt p { margin-top: -12.7%;	width: 34%;	right: 14.4%;	font-size: 1vw;	text-align: justify; color: #231F20;}
#eye-1 { width: 20%!important;	margin-top: 23%!important;		padding-left: 30%; }
#eye-2 { width: 14.5%!important;	margin-top: 40.2%!important;		padding-left: 50%; }
#paint { width: 20%!important;	margin-top: -27.5%!important;	right: 22%; }
#fat-stripe { margin-top: -18.3%;	height: 4.6vw;	width: 35%;	right: 13.5%;	background-color: black;	border-width: 0px;}
.two-red-stripes { background-color: #E30613;	border-width: 0px;	height: 0.32vw; }
.thin-stripe-1 { width: 19%;	margin-top: 31.5%; }
.thin-stripe-2 { width: 11%;	margin-top: 31.8%;	margin-left: 19%; }
#no-scroll-bar { height: 11.5vw;	margin-right: -40px;	overflow-y: scroll;	overflow-x: hidden;	margin-top: 4.5%; }
#cities { width: 47%;		font-size: 1.2vw;	letter-spacing: 0.2vw;	max-height: 11.4vw;	white-space: pre;	position: relative;	text-align: right;	text-transform: uppercase; }
#cities a { line-height: 2.5vw; text-decoration: none;	color: #231F20;	z-index: 1; }
#cities a:hover, #cities a:active { font-size: 1.19em; }
.triangle-left { font-size:0px;	position: absolute;	padding-left: 0.5vw;	width: 0;	height: 0;	border-top: 0.3vw solid transparent;	border-right: 0.45vw solid #E30613;	border-bottom: 0.3vw solid transparent;	margin-top: 0.95vw; }
.popup { text-transform: none;	letter-spacing: 0.12vw;	white-space: pre;	font-size: 1vw;	padding-left: 2.2vw;	position: absolute;}

/* FOOTER */
.foot, .foot a { text-decoration: none;	text-transform: uppercase;	color: white;	font-size: 1.1vw;	position: absolute;	white-space: pre; }
.text-mirror { -moz-transform: scale(-1, 1); -webkit-transform: scale(-1, 1);	-o-transform: scale(-1, 1);	-ms-transform: scale(-1, 1); transform: scale(-1, 1); position: absolute;}
</style></head>



<body><div id="content">
<!-- Menu -->
<header class="menu-slide">
<h1>
<span style="letter-spacing: 2.25vw;	font-size: 1.3vw;	font-family: Baiti">PROFFLINE</span><br>
<span style="letter-spacing: 0.253vw;	font-size: 0.65vw;	font-weight: normal">МАГАЗИН ПРОФЕССИОНАЛЬНОЙ КОСМЕТИКИ</span></h1>
	<div id="menuElems">
		<a href="#about-position">О компании</a><a rel="nofollow" target="_blank" href="">Магазины</a><a href="#contact">Контакты</a><a href="#buy">Купить&nbsp;<span style="display:inline; color:red!important; text-transform: none">online</span></a>
	</div>
</header>

<!-- ABOUT --><div id="about"><img id="about-position" src="/media/slide-3_short-black.jpg">
	<h2>О КОМПАНИИ</h2>
	<hr id="thin-grey-stripe">
	<hr id="skewed-stripe">
	<p class="LogoFont">PRO<span class="text-mirror" style="margin-left:-1.2vw">F</span><span style="margin-left:2.15vw; ">FLINE</span></p>
	<div id="about-contents">В основу открытия магазина легла любовь его основателей к профессиональному уходу за собой и желание делать людей счастливыми и уверенными в своей красоте, предлагая им лучшую продукцию, представленную на мировом рынке.<br><br>Наши магазины представлены на территории Юга России.<br>В настоящее время сеть активно развивается. Основным направлением деятельности компании является осуществление розничной торговли профессиональной	косметикой, инструментами и аксессуарами.</div>
	<div id="triangle-right">
		<span class="text-mirror LogoFont" style="padding-top: 12.4vw; margin-left:-3.2vw; ">F</span>
		<span class="LogoFont" style="padding-top:9vw; margin-left:0.8vw; ">F</span>
	</div>
</div>

<!-- Cities -->
<div id="dpt">
	<hr class="thin-stripe-1 two-red-stripes"><hr class="thin-stripe-2 two-red-stripes">
	<img src="/media/eye-1.jpg" id="eye-1"><img src="/media/eye-2.jpg" id="eye-2">
	<div class="LogoFont" style="font-size: 4.2vw;padding-top: 38%;padding-left: 17.5%;	letter-spacing: 0.8vw;">
		PRO<span class="text-mirror" style="color: #E30613; margin-left: -0.9%;">F</span>
	</div>
	<div class="LogoFont" style="font-size: 4.2vw; margin-top: -2.5%;	padding-left: 19.2%;	letter-spacing: 0.8vw;">
		<span style="padding-left: 13%; color: #E30613;margin-bottom: -20vw;">F</span>LINE
	</div>
	<hr id="fat-stripe">
	<img src="/media/paint.jpg" id="paint">
	<h2>МАГАЗИНЫ</h2>
	<p>Cеть магазинов proFFline поддерживает и развивает торговые залы в Южных городах России. Приходите к нам и убедитесь той обстановке в которой мы Вас встретим!<br>В январе 2019 стартует наш крупный интернет-магазин - ждите!</p>
	<div id="no-scroll-bar">
		<div id="cities"><a rel="nofollow" target="_blank" href="https://goo.gl/x2HwYB" class="title-popover"
	onmouseover="document.getElementById('armav').innerHTML='Карла Маркса, 51';"
	ontouchmove="document.getElementById('armav').innerHTML='Карла Маркса, 51';"
	ontouchend ="document.getElementById('armav').innerHTML='';"
	onmouseout ="document.getElementById('armav').innerHTML='';"
	>Армавир<span class="triangle-left"></span><span id="armav" class="popup"></span></a>
<a rel="nofollow" target="_blank" href="https://goo.gl/HUFWQc"
	onmouseover="document.getElementById('vladikav').innerHTML='Генерала Плиева, 18&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;Куйбышева, 7';"
	ontouchmove="document.getElementById('vladikav').innerHTML='Генерала Плиева, 18&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;Куйбышева, 7';"
	ontouchend ="document.getElementById('vladikav').innerHTML='';"
	onmouseout ="document.getElementById('vladikav').innerHTML='';"
	>Владикавказ<span class="triangle-left"></span><span id="vladikav" class="popup"></span></a>
<a rel="nofollow" target="_blank" href="https://goo.gl/HUFWQc"
	onmouseover="document.getElementById('georg').innerHTML='Калинина, 123';"
	ontouchmove="document.getElementById('georg').innerHTML='Калинина, 123';"
	ontouchend ="document.getElementById('georg').innerHTML='';"
	onmouseout ="document.getElementById('georg').innerHTML='';"
	>ГЕОРГИЕВСК<span class="triangle-left"></span><span id="georg" class="popup"></span></a>
<a rel="nofollow" target="_blank" href="https://goo.gl/q1fJff"
	onmouseover="document.getElementById('essent').innerHTML='Интернациональная, 30&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;Октябрьская, 434';"
	ontouchmove="document.getElementById('essent').innerHTML='Интернациональная, 30&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;Октябрьская, 434';"
	ontouchend ="document.getElementById('essent').innerHTML='';"
	onmouseout ="document.getElementById('essent').innerHTML='';"
	>ЕССЕНТУКИ<span class="triangle-left"></span><span id="essent" class="popup"></span></a>
<a rel="nofollow" target="_blank" href="https://goo.gl/DRHtR4"
	onmouseover="document.getElementById('kislov').innerHTML='Горького, 14';"
	ontouchmove="document.getElementById('kislov').innerHTML='Горького, 14';"
	ontouchend ="document.getElementById('kislov').innerHTML='';"
	onmouseout ="document.getElementById('kislov').innerHTML='';"
	>КИСЛОВОДСК<span class="triangle-left"></span><span id="kislov" class="popup"></span></a>
<a rel="nofollow" target="_blank" href="https://goo.gl/o6zX8i"
	onmouseover="document.getElementById('krasnodar').innerHTML='Крылатая, 2&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;Ставропольская, 228',document.getElementById('krasnodar-2').innerHTML='Восточно-Кругликовская, 30/1';"
	ontouchmove="document.getElementById('krasnodar').innerHTML='Крылатая, 2&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;Ставропольская, 228',document.getElementById('krasnodar-2').innerHTML='Восточно-Кругликовская, 30/1';"
	ontouchend ="document.getElementById('krasnodar').innerHTML='',document.getElementById('krasnodar-2').innerHTML='';"
	onmouseout ="document.getElementById('krasnodar').innerHTML='',document.getElementById('krasnodar-2').innerHTML='';"
	>КРАСНОДАР<span class="triangle-left"></span><span id="krasnodar" class="popup" style="margin-top:-0.7vw;"></span><span id="krasnodar-2" class="popup" style="margin-top: 0.7vw; margin-left: 2.5vw;"></span></a>
<a rel="nofollow" target="_blank" href="https://goo.gl/VRDXYx"
	onmouseover="document.getElementById('krop').innerHTML='Красная, 142';"
	ontouchmove="document.getElementById('krop').innerHTML='Красная, 142';"
	onmouseout ="document.getElementById('krop').innerHTML='';"
	ontouchend ="document.getElementById('krop').innerHTML='';"
	>КРОПОТКИН<span class="triangle-left"></span><span id="krop" class="popup"></span></a>
<a rel="nofollow" target="_blank" href="https://goo.gl/Jh4ofM"
	onmouseover="document.getElementById('mayc').innerHTML='Пролетарская, 231';"
	ontouchmove="document.getElementById('mayc').innerHTML='Пролетарская, 231';"
	onmouseout ="document.getElementById('mayc').innerHTML='';"
	ontouchend ="document.getElementById('mayc').innerHTML='';"
	>МАЙКОП<span class="triangle-left"></span><span id="mayc" class="popup"></span></a>
<a rel="nofollow" target="_blank" href="https://goo.gl/Vru1rc"
	onmouseover="document.getElementById('minv').innerHTML='22 Партсъезда, 100/3';"
	ontouchmove="document.getElementById('minv').innerHTML='22 Партсъезда, 100/3';"
	onmouseout ="document.getElementById('minv').innerHTML='';"
	ontouchend ="document.getElementById('minv').innerHTML='';"
	>МИНЕРАЛЬНЫЙЕ ВОДЫ<span class="triangle-left"></span><span id="minv" class="popup"></span></a>
<a rel="nofollow" target="_blank" href="https://goo.gl/PrxEYB"
	onmouseover="document.getElementById('mih').innerHTML='Ленина 167/2 к.3';"
	ontouchmove="document.getElementById('mih').innerHTML='Ленина 167/2 к.3';"
	onmouseout ="document.getElementById('mih').innerHTML='';"
	ontouchend ="document.getElementById('mih').innerHTML='';"
	>МИХАЙЛОВСК<span class="triangle-left"></span><span id="mih" class="popup"></span></a>
<a rel="nofollow" target="_blank" href="https://goo.gl/KQNisa"
	onmouseover="document.getElementById('nalchik').innerHTML='Ленина, 29';"
	ontouchmove="document.getElementById('nalchik').innerHTML='Ленина, 29';"
	onmouseout ="document.getElementById('nalchik').innerHTML='';"
	ontouchend ="document.getElementById('nalchik').innerHTML='';"
	>НАЛЬЧИК<span class="triangle-left"></span><span id="nalchik" class="popup"></span></a>
<a rel="nofollow" target="_blank" href="https://goo.gl/vDPQTm"
	onmouseover="document.getElementById('nevinn').innerHTML='Гагарина, 51';"
	ontouchmove="document.getElementById('nevinn').innerHTML='Гагарина, 51';"
	ontouchend ="document.getElementById('nevinn').innerHTML='';"
	onmouseout ="document.getElementById('nevinn').innerHTML='';"
	>НЕВИННОМЫССК<span class="triangle-left"></span><span id="nevinn" class="popup"></span></a>
<a rel="nofollow" target="_blank" href="https://goo.gl/FnwuJ6"
	onmouseover="document.getElementById('pyat').innerHTML='40 лет октября, 56Б&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;Дзержинского, 40&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;Ессентукская, 31А';"
	ontouchmove="document.getElementById('pyat').innerHTML='40 лет октября, 56Б&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;Дзержинского, 40&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;Ессентукская, 31А';"
	ontouchend ="document.getElementById('pyat').innerHTML='';"
	onmouseout ="document.getElementById('pyat').innerHTML='';"
	>ПЯТИГОРСК<span class="triangle-left"></span><span id="pyat" class="popup"></span></a>
<a rel="nofollow" target="_blank" href="https://goo.gl/Vm6EJm"
	onmouseover="document.getElementById('rostov').innerHTML='Будённовский, 41&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;Пушкинская, 192';"
	ontouchmove="document.getElementById('rostov').innerHTML='Будённовский, 41&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;Пушкинская, 192';"
	ontouchend ="document.getElementById('rostov').innerHTML='';"
	onmouseout ="document.getElementById('rostov').innerHTML='';"
	>РОСТОВ-НА-ДОНУ<span class="triangle-left"></span><span id="rostov" class="popup"></span></a>
<a rel="nofollow" target="_blank" href="https://goo.gl/EnLJx1"
	onmouseover="document.getElementById('stav').innerHTML='50 лет ВЛКСМ, 59А&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;Бруснева, 11Б&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;Ленина, 243',document.getElementById('stav-2').innerHTML='Карла Маркса, 78&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;Тухачевского, 17/4&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;Артёма, 49',document.getElementById('stav-3').innerHTML='Доваторцев, 75А';"
	ontouchmove="document.getElementById('stav').innerHTML='50 лет ВЛКСМ, 59А&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;Бруснева, 11Б&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;Ленина, 243',document.getElementById('stav-2').innerHTML='Карла Маркса, 78&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;Тухачевского, 17/4&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;Артёма, 49',document.getElementById('stav-3').innerHTML='Доваторцев, 75А';"
	ontouchend ="document.getElementById('stav').innerHTML='', document.getElementById('stav-2').innerHTML='', document.getElementById('stav-3').innerHTML='';"
	onmouseout ="document.getElementById('stav').innerHTML='', document.getElementById('stav-2').innerHTML='', document.getElementById('stav-3').innerHTML='';"
	>СТАВРОПОЛЬ<span class="triangle-left"></span><span id="stav" class="popup" style="margin-top: -1.4vw;"></span><span id="stav-2" class="popup"></span><span id="stav-3" class="popup" style="margin-top: 1.4vw; margin-left: 8vw;"></span></a>
<a rel="nofollow" target="_blank" href="https://goo.gl/KGSTUk"
	onmouseover="document.getElementById('tagan').innerHTML='Петровская, 51/4';"
	ontouchmove="document.getElementById('tagan').innerHTML='Петровская, 51/4';"
	ontouchend ="document.getElementById('tagan').innerHTML='';"
	onmouseout ="document.getElementById('tagan').innerHTML='';"
	>ТАГАНРОГ<span class="triangle-left"></span><span id="tagan" class="popup"></span></a>
<a rel="nofollow" target="_blank" href="https://goo.gl/ENKzV9"
	onmouseover="document.getElementById('cherk').innerHTML='Кавказская, 37';"
	ontouchmove="document.getElementById('cherk').innerHTML='Кавказская, 37';"
	ontouchend ="document.getElementById('cherk').innerHTML='';"
	onmouseout ="document.getElementById('cherk').innerHTML='';"
	>ЧЕРКЕССК<span class="triangle-left"></span><span id="cherk" class="popup"></span></a>
		</div>
	</div>
</div>

<!-- FOOTER -->
<footer id="buy" style="height: 98vw">
	<img src="/media/slide-5.png">
	<a href="/media/construction.php"><img src="/media/goOnlineTransp-link.png" style="margin-top:-76%;	display:block;	border: 0px;"></a>
<div class="foot" style="margin-top: 40%;	width: 37.3%;	text-align:right; ">
<a href="/media/Client-card.jpg" target="_blank" style="width:10.2vw;">дисконтная<br>программа</a><br><br>
<a href="/media/Certificate.png" target="_blank" style="padding-left: 2.2vw;">подарочные<br>сертификаты</a>
</div>
<div class="foot" id="contact" style="margin-top: 37%; left:53%; text-align: left; ">
<a rel="nofollow" href="https://www.instagram.com/proffline_official" target="_blank">instagram</a><br>
<a href="tel:+78004441111">8 800 444 1111</a><br>
<a href="mailto:info@proffline.net">info@proffline.net</a><br>
<a rel="nofollow" href="http://hh.ru/employer/3101593" target="_blank">карьера в&nbsp;<span class="text-mirror" style="float:left">F</span><span style="padding-left: 0.55vw;	position: relative;">F</span></a>
</div>
</footer>

</div></body></html>
