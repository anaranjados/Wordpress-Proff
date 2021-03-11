<?php
/* This is the template that displays all of the <head> section and everything up until <main id="content">
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package WordPress
 */
?>
<!DOCTYPE html>
<html lang="ru-RU">
<head>
<title><?php echo(get_bloginfo('name')) ?></title>

<?php // Opengraph microdata (used in social media) ?>
<meta property="og:type" content="website" />
<meta property="og:locale" content="ru_RU" />
<meta property="og:title" content="<?php echo(get_bloginfo('name')) ?>" />
<meta property="og:video" content="<?php echo(get_site_url()) ?>/wp-content/uploads/Intro_FF.mp4" />
<meta property="og:url" content="<?php echo(get_site_url()) ?>" />
<meta property="og:image" content="<?php echo(get_site_url()) ?>/wp-content/uploads/Logo.png" />
<meta property="og:description" content="<?php echo(get_bloginfo ( 'description' )); ?>" /><?php // Opengraph microdata -end ?>

<meta name="description"		content="<?php echo(get_bloginfo ( 'description' )); ?>" />
<meta name="keywords" content="профессиональная косметика, магазин парикмахеров, proffline" />
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="author" content="Web: Alejandro Proenza | Design: Georgiy Zosimov | Video: Alexey Shumilov | @proffline team" />
<meta name="Content-Script-Type" content="text/javascript" />

<?php // favicon block ?>
<meta name="msapplication-config" content="/wp-content/uploads/fav/browserconfig.xml" /><meta name="msapplication-TileImage" content="/wp-content/uploads/fav/fav228.png" /><link rel="apple-touch-icon" sizes="57x57" href="/wp-content/uploads/fav/fav57x57.png" /><link rel="apple-touch-icon" sizes="60x60" href="/wp-content/uploads/fav/fav60x60.png" /><link rel="apple-touch-icon" sizes="72x72" href="/wp-content/uploads/fav/fav72x72.png" /><link rel="apple-touch-icon" sizes="76x76" href="/wp-content/uploads/fav/fav76x76.png" /><link rel="apple-touch-icon" sizes="114x114" href="/wp-content/uploads/fav/fav114x114.png" /><link rel="apple-touch-icon" sizes="120x120" href="/wp-content/uploads/fav/fav120x120.png" /><link rel="apple-touch-icon" sizes="144x144" href="/wp-content/uploads/fav/fav144x144.png" /><link rel="apple-touch-icon" sizes="152x152" href="/wp-content/uploads/fav/fav152x152.png" /><link rel="apple-touch-icon" sizes="180x180" href="/wp-content/uploads/fav/fav180x180.png" /><link rel="mask-icon" href="/wp-content/uploads/fav/fav310-safari.svg" color="#000000" /><link rel="icon" href="/favicon.ico" type="image/x-icon"><?php // favicon block -end ?>

<link href="<?php echo(get_stylesheet_uri())?>" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

<?php /* Google Analytics */ ?>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-130433830-1"></script><script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'UA-130433830-1');</script> <?php /* Google Analytics end & Yandex Metrika start */  ?>
<script> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter51418474 = new Ya.Metrika2({ id:51418474, clickmap:true, trackLinks:true, accurateTrackBounce:true	});	} catch(e) { }	}); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript";	s.async = true;	s.src = "https://mc.yandex.ru/metrika/tag.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }	})(document, window, "yandex_metrika_callbacks2"); </script><noscript><div><img src="https://mc.yandex.ru/watch/51418474" style="position: absolute; left: -9999px;" alt="" /></div></noscript>	<?php /* Yandex metrika end */  ?>
</head>

<body>
<div id="loader">		<?php /* The black curtains */  ?>
	<p id="loader-left"><span>PRO</span><span class="text-mirror" id="curtain-f1">F</span><br /><span>МАГАЗИН ПРОФЕССИ</span></p>
	<p id="loader-right"><span id="curtain-f2">F</span>LINE<br /><span>ОНАЛЬНОЙ КОСМЕТИКИ</span></p>
</div>

<main id="content">
