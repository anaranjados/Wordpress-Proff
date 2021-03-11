<?php
get_header();
// The template to display #content
?>

<header>	<?php // MENU ?>
<video id="v1" autoplay muted>  <?php // poster="/wp-content/uploads/poster_Intro_FF.gif" ?>
	<source src="/wp-content/uploads/Intro_FF.mp4" type="video/mp4">
	<source src="/wp-content/uploads/Intro_FF.webm" type="video/webm">
</video><span id="white-rect"></span>
<div id="hidden-menu">
	<h1>
		<span>PROFFLINE</span><br />
		<span>МАГАЗИН ПРОФЕССИОНАЛЬНОЙ КОСМЕТИКИ</span>
	</h1>
	<nav id="menuElems">
	<a href="#about">О компании</a><a href="#pos">Магазины</a><a href="#buy">Купить <span>online</span></a><a href="#contact">Контакты</a>
	</nav>
	<nav class="fixedMenu">
		<a style="padding-right: 55vw; font-family: Baiti;font-weight: bold;" href="/">
			<span class="text-mirror" style="float: left; color: red; font-size: 2.8vw;padding-top: 0.5vw;">F</span>
			<span style="color: red; margin-left: 1.3vw; font-size: 2.8vw">F</span>
		</a>
		<a href="#about">О компании</a>
		<a href="#pos">Магазины</a>
		<a href="/wp-content/themes/own/construction.php">Купить <span>online</span></a>
		<a href="tel:+78004441111" title="8 800 444 1111" style="color: black"><i class="fas fa-phone fa-1.5x fa-rotate-270"></i></a>
	</nav>
</div>
</header>

<section id="about_sect">
	<div class="skewed-rect" id="about"></div>
	<img src="/wp-content/uploads/Girl.png" alt="A girl" id="girl"/>
	<hr class="thin-grey-stripe"><hr id="thin" class="thin-grey-stripe">
	<h2>О КОМПАНИИ</h2>
	<hr id="skewed-stripe" />
	<p class="LogoFont">PRO<span class="text-mirror" style="margin-left: -1.2vw">F</span><span style="margin-left: 2.15vw">FLINE</span></p>
	<div id="about-contents">PROFFline – успешная сеть мультибрендовых магазинов профессиональной косметики, стремительно покоряющая beauty-рынок России. Забота о красоте – это то, что движет нашей компанией и делает нас настоящими экспертами в области профессиональной косметики и аксессуаров по уходу за волосами, лицом и телом. Для наших клиентов мы выбираем лучшие косметические бренды и марки, качество и надежность которых признаны во всем мире.<br />Секрет успеха PROFFline – это наша команда. Объединенные общими интересами и стремлениями, все вместе мы высоко ценим желания и потребности клиента, и с величайшим удовольствием работаем во имя красоты.</div>
	<div id="triangle-right">
		<span id="about-f1" class="text-mirror LogoFont">F</span>
		<span id="about-f2" class="LogoFont">F</span>
	</div>
	<div class="skewed-rect-contra"></div>
</section>
<?php // Departments ?><section id="dpt"><span style="margin-top:-40vw; position: absolute;" id="pos"></span>
	<hr class="thin-stripe-1 two-red-stripes" /><hr class="thin-stripe-2 two-red-stripes" />
	<img src="/wp-content/uploads/eye-1.jpg" id="eye-1" alt="Left eye"/><img src="/wp-content/uploads/eye-2.jpg" id="eye-2" alt="Right eye"/>
	<div id="dpt-logo-1" class="LogoFont">
		PRO<span class="text-mirror">F</span>
	</div>
	<div id="dpt-logo-2" class="LogoFont under-eyes">
		<span>F</span>LINE
	</div>
	<?php /* The way to minimize size of pictures with WEBP format is not drawn by any browser
        <!--picture id="paint" class="under-eyes not_transparent" style="position: absolute">
		<source srcset='/wp-content/uploads/paint.webp' type='image/webp'>
		<img src="/wp-content/uploads/paint.jpg" alt="Мазок">
	</picture--> */ ?>
	<img src="/wp-content/uploads/paint.jpg" id="paint" class="under-eyes" alt="Мазок"/>
	<span id="close-paint" class="under-eyes"></span>
	<hr id="fat-stripe" class="under-eyes" />
	<h2 class="under-eyes">МАГАЗИНЫ</h2>
	<p id="dpt_descr">В настоящее время мы активно развиваемся, покоряя все новые города, а вместе с ними завоевывая сердца новых клиентов. Во всех наших магазинах клиентов встречают профессиональные консультанты, которые регулярно совершенствуют свои знания и навыки на тренингах от ведущих косметических брендов. Это помогает сотрудникам всегда быть в курсе последних новинок и современных тенденций. Основываясь на своем опыте и знаниях, наши консультанты всегда помогут подобрать косметику, которая подойдет именно Вам.</p>

<?php
if (has_nav_menu('cities-loc')) { 
	wp_nav_menu([
		'theme_location' => 'cities-loc',
		'menu_id'		 => 'cities',
		'container'		 => 'nav',
		'container_id'	 => 'no-scroll-bar',
		'container_class'=> ' ',
		'depth'			 => '2',
		'link_after'	 => '<span class="triangle-left"></span><span class="popup"></span>',
		'items_wrap'	 => '<ul id="%1$s">%3$s</ul>'
	]);
} else {}	// if menu is empty, do not print anything
?>

</section>
<footer>
	<div class="skewed-rect" id="buy"></div>
	<hr id="crossing-online" />
	<p id="slogan">стань красивой<br/><span>сегодня</span></p>
	<a id="online" href="/wp-content/themes/own/opening-soon.html">ONLINE<br/><span>МАГАЗИН</span></a>
		<img id="cart" src="/wp-content/uploads/cart.png" alt="Корзина"/>
		<span id="focus_foot"></span>
		<br/>

<?php
if (has_nav_menu('left-footer')) {
	wp_nav_menu([
		'theme_location' => 'left-footer',
		'menu_id'		 => 'foot_left',
		'menu_class'	 => 'foot',
		'items_wrap'	 => '<ul id="%1$s" class="%2$s">%3$s</ul>',
		'container'		 => false
	]);
} else {};

if (has_nav_menu('right-footer')) {
	wp_nav_menu([
		'theme_location' => 'right-footer',
		'menu_id'		 => 'contact',
		'menu_class'	 => 'foot',
		'items_wrap'	 => '<ul id="%1$s" class="%2$s">%3$s</ul>',
		'container'		 => false
	]);
} else {};
?>

<div id="lines">
	<span class="hor-lines"></span><span class="hor-lines"></span>
	<span class="hor-lines"></span><span class="hor-lines"></span>
	<span class="vert-lines"></span><span class="vert-lines"></span>
	<span></span><span></span><span></span>
</div>
</footer>

<?php get_footer(); ?>