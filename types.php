<?php include('header.php'); ?>
    <!-- Bannière Hero -->
    <header class="relative h-96">
        <img src="https://cdn.pixabay.com/photo/2021/08/17/09/14/phishing-6553620_1280.png" alt="Types de phishing" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-r from-black to-transparent">
            <div class="container mx-auto px-4 h-full flex items-center">
                <div class="max-w-4xl text-white" data-aos="fade-up">
                    <h1 class="text-5xl font-bold mb-4">Tous les types de phishing</h1>
                    <p class="text-xl">Découvrez les différentes méthodes utilisées par les cybercriminels</p>
                </div>
            </div>
        </div>
    </header>

    <!-- Liste des types -->
    <main class="py-16 bg-white dark:bg-dark-100">
        <div class="container mx-auto px-4">
            <div class="max-w-5xl mx-auto space-y-16">
                <!-- Type 1 -->
                <section class="grid md:grid-cols-2 gap-8 items-center" data-aos="fade-right">
                    <div class="order-2 md:order-1">
                        <h2 class="text-3xl font-bold mb-4">Email Phishing</h2>
                        <p class="text-gray-600 dark:text-gray-400 mb-4">
                            Méthode la plus courante utilisant des emails frauduleux imitant des organisations légitimes.
                            Caractéristiques :
                        </p>
                        <ul class="list-disc pl-6 mb-4 text-gray-600 dark:text-gray-400">
                            <li>Adresses email falsifiées</li>
                            <li>Urgence créée artificiellement</li>
                            <li>Pièces jointes malveillantes</li>
                        </ul>
                        <div class="p-4 bg-blue-50 dark:bg-dark-200 rounded-lg">
                            <h3 class="font-bold mb-2">Comment se protéger ?</h3>
                            <p>Vérifier l'adresse de l'expéditeur, ne jamais cliquer sur les liens suspects</p>
                        </div>
                    </div>
                    <img src="https://cdn.pixabay.com/photo/2022/04/03/16/27/to-hack-7109362_960_720.png" alt="Email phishing" 
                        class="order-1 md:order-2 rounded-lg shadow-xl h-64 w-full object-cover">
                </section>

                <!-- Type 2 -->
                <section class="grid md:grid-cols-2 gap-8 items-center" data-aos="fade-left">
                    <img src="https://cdn.pixabay.com/photo/2021/08/25/12/45/phishing-6573326_1280.png" alt="Spear phishing" 
                        class="rounded-lg shadow-xl h-64 w-full object-cover">
                    <div>
                        <h2 class="text-3xl font-bold mb-4">Spear Phishing</h2>
                        <p class="text-gray-600 dark:text-gray-400 mb-4">
                            Attaques ultra-ciblées contre des individus ou entreprises spécifiques. Particularités :
                        </p>
                        <ul class="list-disc pl-6 mb-4 text-gray-600 dark:text-gray-400">
                            <li>Informations personnalisées</li>
                            <li>Recherche préalable sur la victime</li>
                            <li>Usurpation d'identité crédible</li>
                        </ul>
                        <div class="p-4 bg-blue-50 dark:bg-dark-200 rounded-lg">
                            <h3 class="font-bold mb-2">Protection</h3>
                            <p>Former les employés, utiliser la vérification en deux étapes</p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>
<?php include('footer.php'); ?>