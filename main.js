// Initialisation AOS
AOS.init({
    duration: 1000,
    once: true
});

// Gestion du mode sombre
const darkModeToggle = document.getElementById('darkModeToggle');
const html = document.documentElement;

if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    html.classList.add('dark');
}

darkModeToggle.addEventListener('click', () => {
    html.classList.toggle('dark');
    localStorage.theme = html.classList.contains('dark') ? 'dark' : 'light';
});

// Menu mobile
const mobileMenuButton = document.getElementById('mobileMenuButton');
const mobileMenu = document.getElementById('mobileMenu');

mobileMenuButton.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
});

// Barre de progression
window.addEventListener('scroll', () => {
    const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
    const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    const scrolled = (winScroll / height) * 100;
    document.getElementById('readingProgress').style.width = scrolled + '%';
});

// Bouton retour en haut
const backToTop = document.getElementById('backToTop');
window.addEventListener('scroll', () => {
    if (window.scrollY > 500) {
        backToTop.classList.remove('hidden');
    } else {
        backToTop.classList.add('hidden');
    }
});

backToTop.addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
});

// Système d'alertes
const alerts = [
    "⚠️ Nouvelle campagne de phishing détectée ciblant les clients bancaires",
    "🚨 Attention aux faux emails Netflix en circulation",
    "⚠️ Augmentation des arnaques par SMS signalée"
];

let currentAlert = 0;
const alertText = document.getElementById('alertText');

function rotateAlerts() {
    alertText.textContent = alerts[currentAlert];
    currentAlert = (currentAlert + 1) % alerts.length;
}

rotateAlerts();
setInterval(rotateAlerts, 5000);


// Formulaire de contact
document.getElementById('contactForm').addEventListener('submit', function (e) {
    e.preventDefault();
    // Ajouter la logique d'envoi du formulaire
    alert('Message envoyé avec succès !');
});
// Attendre que le document soit chargé
document.addEventListener('DOMContentLoaded', function () {
    // Sélectionner tous les boutons de la FAQ
    const faqButtons = document.querySelectorAll('.faq-button');

    // Ajouter un écouteur d'événement à chaque bouton
    faqButtons.forEach(button => {
        button.addEventListener('click', function () {
            // Trouver la réponse associée à ce bouton
            const answer = this.nextElementSibling;
            const icon = this.querySelector('svg');

            // Toggle la classe hidden sur la réponse
            answer.classList.toggle('hidden');

            // Rotation de l'icône
            if (answer.classList.contains('hidden')) {
                icon.style.transform = 'rotate(0deg)';
            } else {
                icon.style.transform = 'rotate(180deg)';
            }
        });
    });
});