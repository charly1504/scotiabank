//efecto para loading line
NProgress.start();
setTimeout(function(){
	NProgress.done();
}, 1000);
//script para efecto de scroll
window.sr = ScrollReveal();
sr.reveal('.menusec');