<?php
session_start();
$isLoggedIn = isset($_SESSION['user_id']);

$profileImage = ($isLoggedIn && !empty($_SESSION['photo_profil']))
    ? $_SESSION['photo_profil']
    : 'uploads/default.png';
$username = $isLoggedIn
    ? $_SESSION['prenom'] . ' ' . $_SESSION['nom']
    : '';
?>
<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Apprenez à vous protéger contre le phishing et les arnaques en ligne">
    <title>Stop Phishing - Protégez-vous contre les arnaques en ligne</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        .alert-animation {
            animation: slideIn 0.5s ease-out;
        }
        @keyframes slideIn {
            from { transform: translateX(-100%); }
            to { transform: translateX(0); }
        }
        .quiz-option:hover {
            transform: translateX(10px);
            transition: transform 0.3s ease;
        }
    </style>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        dark: {
                            100: '#1E293B',
                            200: '#0F172A',
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-100 dark:bg-dark-200 dark:text-gray-100 transition-colors duration-200">
    <!-- Barre de progression -->
    <div id="readingProgress" class="fixed top-0 left-0 h-1 bg-blue-600 z-50" style="width: 0%"></div>

    <!-- Boutons flottants -->
    <div class="fixed bottom-4 right-4 space-y-4 z-50">
        <button id="darkModeToggle" class="bg-blue-600 dark:bg-blue-400 text-white p-3 rounded-full shadow-lg hover:scale-110 transition-transform">
            <svg class="w-6 h-6 dark:hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
            </svg>
            <svg class="w-6 h-6 hidden dark:block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
            </svg>
        </button>
        <button id="backToTop" class="hidden bg-blue-600 dark:bg-blue-400 text-white p-3 rounded-full shadow-lg hover:scale-110 transition-transform">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
            </svg>
        </button>
    </div>

    <!-- Navigation -->
    <nav class="fixed w-full bg-blue-600 dark:bg-dark-100 text-white p-4 z-40 transition-all duration-300" id="navbar">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold flex items-center">
                <svg class="w-8 h-8 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                </svg>
                Stop Phishing
            </h1>
            <ul class="hidden md:flex space-x-6">
                <li><a href="index.php" class="hover:text-blue-200 transition">Accueil</a></li>
                <li><a href="types.php" class="hover:text-blue-200 transition">Types</a></li>
                <li><a href="#contact" class="hover:text-blue-200 transition">Contact</a></li>
            </ul>
            <!-- Affichage de la photo de profil et dropdown si connecté -->
            <?php if($isLoggedIn): ?>
            <div class="relative hidden md:block">
                <button id="profileButton" class="flex items-center space-x-2 focus:outline-none">
                    <img src="<?= htmlspecialchars($profileImage) ?>" alt="Profil" class="w-8 h-8 rounded-full object-cover border-2 border-white">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div id="profileDropdown" class="absolute right-0 mt-2 w-48 bg-white dark:bg-dark-200 text-gray-700 dark:text-gray-100 rounded shadow-lg hidden">
                    <a href="profile.php" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-dark-100">Profil</a>
                    <a href="deconnexion.php" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-dark-100">Déconnexion</a>
                </div>
            </div>
            <?php else: ?>
            <div class="hidden md:block">
                <a href="connexion.php" class="px-4 py-2 bg-blue-500 hover:bg-blue-400 rounded transition">Connexion</a>
                <a href="inscription.php" class="px-4 py-2 bg-blue-700 hover:bg-blue-600 rounded transition ml-2">Inscription</a>
            </div>
            <?php endif; ?>
            <button id="mobileMenuButton" class="md:hidden">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
        <!-- Menu mobile -->
        <div id="mobileMenu" class="hidden md:hidden bg-blue-700 dark:bg-dark-200 mt-4 rounded-lg">
            <a href="index.php" class="block px-4 py-2 hover:bg-blue-800 dark:hover:bg-dark-100">Accueil</a>
            <a href="types.php" class="block px-4 py-2 hover:bg-blue-800 dark:hover:bg-dark-100">Types</a>
            <a href="#contact" class="block px-4 py-2 hover:bg-blue-800 dark:hover:bg-dark-100">Contact</a>
            <?php if($isLoggedIn): ?>
                <a href="profile.php" class="block px-4 py-2 hover:bg-blue-800 dark:hover:bg-dark-100">Profil</a>
                <a href="deconnexion.php" class="block px-4 py-2 hover:bg-blue-800 dark:hover:bg-dark-100">Déconnexion</a>
            <?php else: ?>
                <a href="connexion.php" class="block px-4 py-2 hover:bg-blue-800 dark:hover:bg-dark-100">Connexion</a>
                <a href="inscription.php" class="block px-4 py-2 hover:bg-blue-800 dark:hover:bg-dark-100">Inscription</a>
            <?php endif; ?>
        </div>
    </nav>