/* As part of post-switcher plugin */
var style = document.createElement('style');
style.type = 'text/css';
style.innerHTML = '.hiding { display: none }';
document.getElementsByTagName('head')[0].appendChild(style)

window.addEventListener('load', function() {
	let tm = document.querySelectorAll('article time');
	if (tm.length === 0) {
		tm = document.getElementsByClassName('post-on')
		if (tm.length === 0) {
			tm = document.getElementsByClassName('post-date')
		}
	}

	for (let i=0; i< tm.length; i++) {
		tm[i].classList.toggle('hiding');
	}
})
