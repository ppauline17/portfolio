// Code JavaScript pour mettre à jour la couleur du lien de la navigation
function checkScroll() {
    const sections = document.querySelectorAll('.section');
    const navLinks = document.querySelectorAll('.nav-link');

    sections.forEach((section, index) => {
        const rect = section.getBoundingClientRect();

        if (rect.top <= 50 && rect.bottom >= 50) {
            // La section est visible
            navLinks.forEach((link) => {
                link.classList.remove('active');
            });
            navLinks[index].classList.add('active');
        }
    });
}

// Écouteur d'événement pour le défilement
window.addEventListener('scroll', checkScroll);

// Appel initial pour vérifier la position au chargement de la page
window.addEventListener('load', checkScroll);




