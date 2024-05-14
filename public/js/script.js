

			window.onscroll = function() {myFunction()};

			var header = document.getElementById("header");

			var sticky = header.offsetTop;

			function myFunction() {
			if (window.pageYOffset > sticky) {
				header.classList.add("sticky");
			} else {
				header.classList.remove("sticky");
			}
			}

			function changeColor() {
            var myDiv = document.getElementById('container');

            myDiv.style.backgroundColor = 'black';
			 }

			document.addEventListener("DOMContentLoaded", function() {
				function handleIntersection(entries, observer) {
					entries.forEach(entry => {
						if (entry.isIntersecting) {
							entry.target.classList.add('is-visible');
							observer.unobserve(entry.target);
						}
					});
				}


				
            const observer = new IntersectionObserver(handleIntersection, { rootMargin: "-50px 0px" });

            document.querySelectorAll('.animate-on-scroll').forEach(el => observer.observe(el));
        });

		var videoEl = document.querySelector('#slide-video'),
			videoMute = document.querySelector('#video-slider-mute');

		videoMute.onclick = function(e) {
			e.preventDefault();

			if( videoMute.classList.contains('video-muted') ) {
				videoEl.muted = true;
			} else {
				videoEl.muted = false;
			}

			videoMute.classList.toggle('video-muted');
		};

		function scrollToTop() {
  		  window.scrollTo({
        	top: 0,
        	behavior: 'smooth' // Faites défiler en douceur
    		});
		}

		window.onscroll = function () {
			var scrollButton = document.querySelector('.scroll-to-top');

			if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
				scrollButton.style.display = 'block';
			} else {
				scrollButton.style.display = 'none';
			}
		};

// acceuil

// actu


		

document.addEventListener("DOMContentLoaded", function() {
	// Fonction pour observer les éléments et appliquer la classe "is-visible"
	function handleIntersection(entries, observer) {
		entries.forEach(entry => {
			if (entry.isIntersecting) {
				entry.target.classList.add('is-visible');
				observer.unobserve(entry.target);
			}
		});
	}

// Créer un nouvel observateur d'intersection avec la fonction de gestion
const observer = new IntersectionObserver(handleIntersection, { rootMargin: "-50px 0px" });

// Observez tous les éléments avec la classe "animate-on-scroll"
document.querySelectorAll('.animate-on-scroll').forEach(el => observer.observe(el));
});

// actu

// forma


// When the user scrolls the page, execute myFunction
	window.onscroll = function() {myFunction()};

	// Get the header
	var header = document.getElementById("header");

	// Get the offset position of the navbar
	var sticky = header.offsetTop;

	// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
	function myFunction() {
	if (window.pageYOffset > sticky) {
		header.classList.add("sticky");
	} else {
		header.classList.remove("sticky");
	}
	}

	function changeColor() {
	var myDiv = document.getElementById('container');

	// Changer la couleur de la div en noir
	myDiv.style.backgroundColor = 'black';
	 }

	document.addEventListener("DOMContentLoaded", function() {
		// Fonction pour observer les éléments et appliquer la classe "is-visible"
		function handleIntersection(entries, observer) {
			entries.forEach(entry => {
				if (entry.isIntersecting) {
					entry.target.classList.add('is-visible');
					observer.unobserve(entry.target);
				}
			});
		}

	// Créer un nouvel observateur d'intersection avec la fonction de gestion
	const observer = new IntersectionObserver(handleIntersection, { rootMargin: "-50px 0px" });

	// Observez tous les éléments avec la classe "animate-on-scroll"
	document.querySelectorAll('.animate-on-scroll').forEach(el => observer.observe(el));
});


function scrollToTop() {
window.scrollTo({
top: 0,
behavior: 'smooth' // Faites défiler en douceur
});
}

// Afficher ou masquer la flèche en fonction de la position de défilement
window.onscroll = function () {
var scrollButton = document.querySelector('.scroll-to-top');

if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
	scrollButton.style.display = 'block';
} else {
	scrollButton.style.display = 'none';
}
};

document.addEventListener("DOMContentLoaded", function() {
window.addEventListener("scroll", function() {
var specialsElements = document.querySelectorAll(".specials");

specialsElements.forEach(function(element) {
	if (isElementInViewport(element)) {
		element.classList.add("show");
	}
});
});

function isElementInViewport(el) {
var rect = el.getBoundingClientRect();
return (
	rect.top >= 0 &&
	rect.left >= 0 &&
	rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
	rect.right <= (window.innerWidth || document.documentElement.clientWidth)
);
}
});
// forma





