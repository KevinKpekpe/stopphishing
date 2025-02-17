<?php include('header.php'); ?>
    <!-- Hero Section -->
    <header id="accueil" class="relative h-screen">
        <img src="https://cdn.pixabay.com/photo/2023/05/26/00/55/hacker-8018499_640.png" alt="Cybersécurité" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-r from-black to-transparent">
            <div class="container mx-auto px-4 h-full flex items-center">
                <div class="max-w-2xl text-white" data-aos="fade-right">
                    <h2 class="text-5xl font-bold mb-4">Protégez-vous contre le Phishing</h2>
                    <p class="text-xl mb-8">Découvrez comment identifier et vous protéger des tentatives d'hameçonnage
                        en ligne.</p>
                    <div class="flex space-x-4">
                        <a href="#types"
                            class="bg-blue-600 text-white px-8 py-3 rounded-full hover:bg-blue-700 transition transform hover:scale-105">
                            En savoir plus
                        </a>
                        <a href="#contact"
                            class="bg-transparent border-2 border-white text-white px-8 py-3 rounded-full hover:bg-white hover:text-blue-600 transition transform hover:scale-105">
                            Nous contacter
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Alertes en temps réel -->
    <div class="bg-red-50 dark:bg-red-900/20 border-l-4 border-red-500 p-4" id="alertBanner">
        <div class="flex items-center">
            <div class="flex-shrink-0">
                <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                        clip-rule="evenodd" />
                </svg>
            </div>
            <div class="ml-3">
                <p class="text-sm text-red-700 dark:text-red-200" id="alertText">
                    Chargement des alertes...
                </p>
            </div>
        </div>
    </div>
    <!-- Section Statistiques -->
    <section class="py-16 bg-white dark:bg-dark-100">
        <div class="container mx-auto px-4">
            <h3 class="text-3xl font-bold text-center mb-12" data-aos="fade-up">Statistiques du Phishing</h3>
            <div class="grid md:grid-cols-4 gap-8">
                <div class="p-6 bg-blue-50 dark:bg-dark-200 rounded-lg" data-aos="fade-up" data-aos-delay="100">
                    <div class="text-4xl font-bold text-blue-600 dark:text-blue-400 mb-2 counter" data-target="90">80
                    </div>
                    <p class="text-gray-600 dark:text-gray-400">% des cyberattaques débutent par un email</p>
                </div>
                <div class="p-6 bg-blue-50 dark:bg-dark-200 rounded-lg" data-aos="fade-up" data-aos-delay="200">
                    <div class="text-4xl font-bold text-blue-600 dark:text-blue-400 mb-2 counter" data-target="76">76
                    </div>
                    <p class="text-gray-600 dark:text-gray-400">% des entreprises ont été ciblées en 2023</p>
                </div>
                <div class="p-6 bg-blue-50 dark:bg-dark-200 rounded-lg" data-aos="fade-up" data-aos-delay="300">
                    <div class="text-4xl font-bold text-blue-600 dark:text-blue-400 mb-2 counter" data-target="3">3
                    </div>
                    <p class="text-gray-600 dark:text-gray-400">Millions € de pertes moyennes par attaque</p>
                </div>
                <div class="p-6 bg-blue-50 dark:bg-dark-200 rounded-lg" data-aos="fade-up" data-aos-delay="400">
                    <div class="text-4xl font-bold text-blue-600 dark:text-blue-400 mb-2 counter" data-target="65">65
                    </div>
                    <p class="text-gray-600 dark:text-gray-400">% d'augmentation des attaques depuis 2020</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Types de Phishing -->
    <section id="types" class="py-16 bg-gray-50 dark:bg-dark-200">
        <div class="container mx-auto px-4">
            <h3 class="text-3xl font-bold text-center mb-12" data-aos="fade-up">Types de Phishing</h3>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white dark:bg-dark-100 rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition-transform"
                    data-aos="fade-up">
                    <img src="https://cdn.pixabay.com/photo/2022/04/03/16/27/to-hack-7109362_960_720.png" alt="Email phishing" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h4 class="font-bold text-xl mb-2">Email Phishing</h4>
                        <p class="text-gray-600 dark:text-gray-400">Les techniques les plus courantes utilisées dans les
                            emails frauduleux.</p>
                        <button class="mt-4 text-blue-600 dark:text-blue-400 hover:underline">En savoir plus →</button>
                    </div>
                </div>
                <div class="bg-white dark:bg-dark-100 rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition-transform"
                    data-aos="fade-up">
                    <img src="https://cdn.pixabay.com/photo/2021/08/25/12/45/phishing-6573326_960_720.png" alt="Spear Phishing" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h4 class="font-bold text-xl mb-2">Spear Phishing</h4>
                        <p class="text-gray-600 dark:text-gray-400">Attaques ciblées visant des individus ou
                            organisations spécifiques.</p>
                        <button class="mt-4 text-blue-600 dark:text-blue-400 hover:underline">En savoir plus →</button>
                    </div>
                </div>
                <div class="bg-white dark:bg-dark-100 rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition-transform"
                    data-aos="fade-up">
                    <img src="https://cdn.pixabay.com/photo/2018/09/12/12/04/hack-3671982_640.jpg" alt="Smishing" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h4 class="font-bold text-xl mb-2">Smishing</h4>
                        <p class="text-gray-600 dark:text-gray-400">Phishing par SMS et messages texte sur mobile.</p>
                        <button class="mt-4 text-blue-600 dark:text-blue-400 hover:underline">En savoir plus →</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section À propos du Phishing -->
<section class="py-16 bg-white dark:bg-dark-100">
    <div class="container mx-auto px-4">
        <h3 class="text-3xl font-bold text-center mb-12" data-aos="fade-up">À propos du Phishing</h3>
        <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-12 items-center">
            <!-- Image -->
            <div class="rounded-lg overflow-hidden shadow-xl" data-aos="fade-right">
                <img src="https://images.unsplash.com/photo-1563986768609-322da13575f3?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" 
                     alt="Cybersécurité" 
                     class="w-full h-full object-cover">
            </div>
            <!-- Texte -->
            <div data-aos="fade-left">
                <div class="space-y-6">
                    <p class="text-gray-600 dark:text-gray-400 text-lg leading-relaxed">
                        Le phishing est une forme de cybercriminalité qui consiste à tromper les utilisateurs pour obtenir
                        des informations sensibles. Les cybercriminels se font passer pour des entités de confiance afin de
                        voler des données personnelles et financières.
                    </p>
                    <p class="text-gray-600 dark:text-gray-400 text-lg leading-relaxed">
                        La sensibilisation et la formation sont essentielles pour se protéger contre ces attaques qui
                        deviennent de plus en plus sophistiquées.
                    </p>
                    <div class="pt-4">
                        <a href="#protection" class="inline-flex items-center px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition duration-300">
                            En savoir plus
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section FAQ -->
<section class="py-16 bg-gray-50 dark:bg-dark-200">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-12 items-start">
            <!-- Image FAQ -->
            <div class="hidden md:block" data-aos="fade-right">
                <img src="https://images.unsplash.com/photo-1557597774-9d273605dfa9?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" 
                     alt="FAQ Illustration" 
                     class="rounded-lg shadow-xl">
                <div class="mt-8 bg-white dark:bg-dark-100 p-6 rounded-lg shadow-lg">
                    <h4 class="text-xl font-bold mb-4">Besoin d'aide ?</h4>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">
                        Notre équipe est disponible pour répondre à toutes vos questions sur la sécurité en ligne.
                    </p>
                    <a href="#contact" class="text-blue-600 hover:text-blue-700 font-semibold">Contactez-nous →</a>
                </div>
            </div>

            <!-- FAQ Questions -->
            <div>
                <h3 class="text-3xl font-bold mb-8" data-aos="fade-up">Questions Fréquentes</h3>
                <!-- Question 1 -->
                <div class="mb-6" data-aos="fade-up">
                    <button class="faq-button flex justify-between items-center w-full p-6 bg-white dark:bg-dark-100 rounded-lg shadow-sm hover:bg-gray-50">
                        <span class="font-semibold">Comment identifier un email de phishing ?</span>
                        <svg class="w-6 h-6 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="hidden p-6 bg-white dark:bg-dark-100 rounded-lg mt-2">
                        <p class="text-gray-600 dark:text-gray-400">Vérifiez l'adresse email de l'expéditeur, méfiez-vous des fautes d'orthographe, et ne cliquez jamais sur des liens suspects.</p>
                    </div>
                </div>

                <!-- Question 2 -->
                <div class="mb-6" data-aos="fade-up">
                    <button class="faq-button flex justify-between items-center w-full p-6 bg-white dark:bg-dark-100 rounded-lg shadow-sm hover:bg-gray-50">
                        <span class="font-semibold">Que faire si je suis victime de phishing ?</span>
                        <svg class="w-6 h-6 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="hidden p-6 bg-white dark:bg-dark-100 rounded-lg mt-2">
                        <p class="text-gray-600 dark:text-gray-400">Changez immédiatement vos mots de passe, contactez votre banque si nécessaire, et signalez l'incident aux autorités compétentes.</p>
                    </div>
                </div>

                <!-- Question 3 -->
                <div class="mb-6" data-aos="fade-up">
                    <button class="faq-button flex justify-between items-center w-full p-6 bg-white dark:bg-dark-100 rounded-lg shadow-sm hover:bg-gray-50">
                        <span class="font-semibold">Comment se protéger du phishing ?</span>
                        <svg class="w-6 h-6 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="hidden p-6 bg-white dark:bg-dark-100 rounded-lg mt-2">
                        <p class="text-gray-600 dark:text-gray-400">Utilisez l'authentification à deux facteurs, gardez vos logiciels à jour, et formez-vous régulièrement aux bonnes pratiques de sécurité.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- Section Contact -->
    <section id="contact" class="py-16 bg-gray-50 dark:bg-dark-200">
        <div class="container mx-auto px-4">
            <h3 class="text-3xl font-bold text-center mb-12" data-aos="fade-up">Contactez-nous</h3>
            <div class="max-w-2xl mx-auto">
                <form id="contactForm" class="space-y-6" data-aos="fade-up">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-gray-700 dark:text-gray-300 mb-2" for="nom">Nom</label>
                            <input type="text" id="nom"
                                class="w-full px-4 py-2 border rounded-lg dark:bg-dark-100 dark:border-gray-600 focus:outline-none focus:border-blue-500"
                                required>
                        </div>
                        <div>
                            <label class="block text-gray-700 dark:text-gray-300 mb-2" for="email">Email</label>
                            <input type="email" id="email"
                                class="w-full px-4 py-2 border rounded-lg dark:bg-dark-100 dark:border-gray-600 focus:outline-none focus:border-blue-500"
                                required>
                        </div>
                    </div>
                    <div>
                        <label class="block text-gray-700 dark:text-gray-300 mb-2" for="message">Message</label>
                        <textarea id="message" rows="5"
                            class="w-full px-4 py-2 border rounded-lg dark:bg-dark-100 dark:border-gray-600 focus:outline-none focus:border-blue-500"
                            required></textarea>
                    </div>
                    <button type="submit"
                        class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition transform hover:scale-105">
                        Envoyer
                    </button>
                </form>
            </div>
        </div>
    </section>
    <?php include('footer.php'); ?>