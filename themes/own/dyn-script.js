$(document).ready(function() {

// * Preloader: curtains, FF letters filled in red
let wd = $(window).width();
$('#curtain-f1').delay(150).css('color', '#e30613');
$('#curtain-f2').delay(150).css('color', '#e30613');
$('#loader-left').delay(900).animate({marginLeft: wd*(-1.1)}, 900);
$('#loader-right').delay(900).animate({marginLeft: wd*2.16}, 900);      // iphone Xs has display aspect 19.5:9, so one side is 2.16 times wider than another (by Feb "19)

$('video').on('canplaythrough', function() {
  $('#hidden-menu').delay(9800).animate({opacity: 1}, 800);
  $('#white-rect').delay(7700).animate({opacity: 1}, 0);
  $(document).scroll(function() {
	  if ($(document).scrollTop() > wd*0.6) {
	  	$('#menuElems').css('opacity', '1');
	  	$('.fixedMenu').css('opacity', '0');
	  } else {
  		$('#menuElems').css('opacity', '0');
  		$('.fixedMenu').css('opacity', '1');
    	}
  });
  $('header').delay(4300).animate({ marginTop: wd*(-0.062)}, 1500);	// Menu delay, cover Chr video border, move header up
});

/***** Animation on whole page (it can be left if web-client swithes off JS)*****/

//preparatives
$('#thin').addClass(' not_transparent');
$('#skewed-stripe').css('width', '0');
$('#girl').addClass(' transparent');
$('#about-f1').animate({marginLeft: wd*(-0.13), marginTop: wd*(-0.13), opacity:0}, 0);
$('#about-f2').animate({marginLeft: wd*0.1, marginTop: wd*(-0.35), opacity:0}, 0);
$('#about-contents').css('opacity', '0');

// Пример  https://codepen.io/estwo/pen/czHvi
$('#about_sect').waypoint(function(direction) {
 if (direction === 'down') {				// About down
    $('#thin').animate({width: 0}, 850);
	$('#skewed-stripe').delay(500).animate({width: '53%'}, 700);
	$('#girl').delay(1000).animate({opacity: 1}, 700);
	$('#about-contents').delay(1000).animate({opacity: 1}, 700);
	$('#about-f1').delay(900).animate({marginTop: wd*(-0.22), marginLeft: wd*(-0.032), opacity: 1}, 700);
	$('#about-f2').delay(900).animate({marginTop: wd*(-0.25), marginLeft: wd*0.008, opacity: 1}, 700);
}}, {offset: '70%'});

$('#girl').waypoint(function(direction) {
 if (direction === 'down') {				// About down -reverse
	$('#thin').delay(400).animate({width: '36%'}, 700);
	$('#skewed-stripe').animate({width: 0}, 700);
	$('#girl').delay(500).animate({opacity: 0}, 200);
	$('#about-contents').delay(100).animate({opacity: 0}, 400);
	$('#about-f1').animate({marginTop: wd*(-0.11), marginLeft: wd*(-0.084), opacity: 0}, 400);
	$('#about-f2').animate({marginTop: wd*(-0.35), marginLeft: wd*0.1, opacity: 0}, 400);
}}, {offset: '-55%'}); // С верха девушки пролистано 55%

$('#about-contents').waypoint(function(direction) {
 if (direction === 'up') {				// About up
    $('#thin').animate({width: 0}, 700);
	$('#skewed-stripe').animate({width: '53%'}, 700);
	$('#girl').delay(600).animate({opacity: 1}, 700);
	$('#about-contents').delay(600).animate({opacity: 1}, 700);
	$('#about-f1').delay(600).animate({marginTop: wd*(-0.22), marginLeft: wd*(-0.032), opacity: 1}, 700);
	$('#about-f2').delay(600).animate({marginTop: wd*(-0.25), marginLeft: wd*0.008, opacity: 1}, 700);
}}, {offset: '-25%'});

$('#skewed-stripe').waypoint(function(direction) {
 if (direction === 'up') {			// About up -reverse
	$('#thin').delay(400).animate({width: '36%'}, 700);
	$('#skewed-stripe').animate({width: 0}, 700);
	$('#girl').delay(500).animate({opacity: 0}, 200);
	$('#about-contents').delay(100).animate({opacity: 0}, 400);
	$('#about-f1').animate({marginTop: wd*(-0.11), marginLeft: wd*(-0.084), opacity: 0}, 400);
	$('#about-f2').animate({marginTop: wd*(-0.35), marginLeft: wd*0.1, opacity: 0}, 400);
}}, {offset: '85%'});

$('#close-paint').addClass('not_transparent');
$('#fat-stripe').css('height', '0');
$('#eye-1').css('margin-top', '22%');
$('#eye-2').css('margin-top', '-52%');
$('#dpt_descr').css('opacity', '0');
$('.thin-stripe-2').waypoint(function(direction) {
 if (direction === 'down') {		// Departmens down
	$('#eye-1').delay(500).animate({marginTop: '-26%', opacity: 1}, 800);
	$('#eye-2').delay(500).animate({marginTop: '-8.8%', opacity: 1}, 800);
	$('#fat-stripe').delay(500).animate({height: '2%'}, 800);
	$('#close-paint').delay(1100).animate({right: 0}, 800);
	$('#dpt_descr').delay(1200).animate({opacity: 1}, 700);
}}, {offset: '100%'});

$('.thin-stripe-2').waypoint(function(direction){
if (direction === 'down') {		// Departmens down -reverse
	$('#eye-1').delay(400).animate({marginTop: '21%', opacity: 0}, 0);;
	$('#eye-2').delay(400).animate({marginTop: '-51%', opacity: 0}, 0);
	$('#fat-stripe').delay(300).animate({height: 0}, 700);
	$('#close-paint').delay(1100).animate({right: '21%'}, 700);
	$('#dpt_descr').animate({opacity: 0}, 700);
}}, {offset: '-1%'});

$("#dpt-logo-1").waypoint(function(direction) {
if (direction === 'up') {		// Departmens up
	$('#eye-1').delay(500).animate({marginTop: '-26%', opacity: 1}, 800);
	$('#eye-2').delay(500).animate({marginTop: '-8.8%', opacity: 1}, 800);
	$('#fat-stripe').delay(500).animate({height: '2%'}, 800);
	$('#close-paint').delay(1200).animate({right: 0}, 700);
	$('#dpt_descr').delay(1200).animate({opacity: 1}, 700);
}}, {offset: '-1%'});

$('.thin-stripe-2').waypoint(function(direction){
 if (direction === 'up') {		// Departmens up -rev
	$('#eye-1').delay(400).animate({marginTop: '21%', opacity: 0}, 700);;
	$('#eye-2').delay(400).animate({marginTop: '-51%'}, 700);
	$('#fat-stripe').delay(300).animate({height: 0}, 700);
	$('#close-paint').animate({right: '21%'}, 700);
	$('#dpt_descr').animate({opacity: 0}, 700);
}}, {offset: '100%'});

$('#crossing-online').css('width', '0');
$("#cart").waypoint(function(direction) {
 if (direction === 'down') {
	$('#crossing-online').delay(200).animate({width: '57.5%'}, 800);
}}, {offset: '100%'});
	
$('#focus_foot').waypoint(function(direction) {
 if (direction === 'down') {
	$('#crossing-online').animate({width: 0}, 500);
}},{offset: '100%'});

$("#contact").waypoint(function(direction) {
 if (direction === 'up') {
	$('#crossing-online').delay(300).animate({width: '57.5%'}, 800);
}}, {offset: '100%'});
	
$("#no-scroll-bar").waypoint(function(direction) {
 if (direction === 'up') {
	$('#crossing-online').animate({width: 0}, 500);
}},{offset: '-1%'});

$('#lines span:nth-child(7)').addClass(' not_transparent');
$('#lines span:nth-child(8)').addClass(' not_transparent');
$('#lines span:last-child').addClass(' not_transparent');
$('#contact').waypoint(function(direction) {	// Footer
  if (direction === 'down') {
	$('#lines span:nth-child(7)').delay(350).animate({width: 0}, 700);
	$('#lines span:nth-child(8)').animate({marginBottom: '18%'}, 400);
	$('#lines span:last-child').delay(250).animate({marginLeft: '100%'}, 700);
  }},{offset: '100%'});

$('#slogan').waypoint(function(direction) {
  if (direction === 'up') {
	$('#lines span:nth-child(7)').animate({width: '49.6%'}, 500);
	$('#lines span:nth-child(8)').delay(450).animate({marginBottom: 0}, 400);
	$('#lines span:last-child').animate({marginLeft: '50.7%'}, 500);
  }}, {offset: '1%'});

$("a").on('click', function(event) {  // animating jumps threw the #anchors
  if (this.hash !== "") {
   event.preventDefault();
   let hash = this.hash;
   $('html, body').animate({ scrollTop: $(hash).offset().top }, 700, function(){ window.location.hash = hash;});
  }
});
});
// -end of jQuery-


/* Dynamic behaviour when scrolling */
let n = 0;
const ele = document.querySelectorAll('#cities > li');
document.getElementById('no-scroll-bar').addEventListener('scroll', function() {
  let scr = document.getElementById('no-scroll-bar').scrollTop;
  const wd = document.documentElement.clientWidth *0.02; // less - later
  if ( scr > wd*(n+1) && scr <= wd*(n+2) ) {
	  n += 1;
	  ele[n].className = 'edge-city';
	  ele[n+1].className = 'almost-city';
	  ele[n+2].className = 'focus-city';
	  ele[n+3].className = 'almost-city';
	  ele[n+4].className = 'edge-city';
  } 
  else if( scr > wd*(n-1) && scr <= wd*n ) {
	  n -= 1;
	  ele[n].className = 'edge-city';
	  ele[n+1].className = 'almost-city';
	  ele[n+2].className = 'focus-city';
	  ele[n+3].className = 'almost-city';
	  ele[n+4].className = 'edge-city';
};
return n;
});

// * Link @career-FF always last in the footer-right
document.querySelector("#contact li:last-child a").innerHTML = 'карьера в&nbsp;<span class="text-mirror" style="float: left">F</span><span style="padding-left: 0.55vw;   position: relative;">F</span>';

// ** Cities opacity, moving submenu to menu, removing it
const suba = document.querySelectorAll('.sub-menu a');
let pop = document.querySelectorAll('#cities > li > a > .popup');
const anc = document.querySelectorAll('#cities > li > a');
let tri = document.getElementsByClassName('triangle-left');
const subm  = document.getElementsByClassName('sub-menu');

for (let i=0; i < anc.length; i++) {
	ele[i].className = 'edge-city';
	pop[i].textContent = suba[i].textContent;
	anc[i].addEventListener('mouseover', function() { over(this) });
	anc[i].addEventListener('touchmove', function() { over(this) });
	anc[i].addEventListener('touchend', function() { out(this) });
	anc[i].addEventListener('mouseout', function() { out(this) });
}

function over(which) {
	which.querySelector('#cities > li > a > .popup').style.display = 'initial';
	which.querySelector('.triangle-left').style.animation='anim_dpt_tr 0.4s ease-out forwards';
}
function out(which) {
	which.querySelector('#cities > li > a > .popup').style.display = 'none';
	which.querySelector('.triangle-left').style.animation='anim_dpt_tr_back 0.3s ease-in forwards';
}

// Removing redundancy of html from WP menu
for (i = anc.length; i>0; i--) {
	subm[i-1].remove();
}

// After whole ELE array appropriation
ele[1].className = 'almost-city';  ele[3].className = 'almost-city';    ele[2].className = 'focus-city';