<!DOCTYPE html>
<html lang="fr" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Types de Phishing - Dashboard Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: {"50":"#eff6ff","100":"#dbeafe","200":"#bfdbfe","300":"#93c5fd","400":"#60a5fa","500":"#3b82f6","600":"#2563eb","700":"#1d4ed8","800":"#1e40af","900":"#1e3a8a","950":"#172554"}
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-50 dark:bg-gray-900 transition-colors duration-300">
    <div class="min-h-full">
        <!-- Sidebar -->
        <div class="fixed inset-y-0 left-0 w-64 bg-white dark:bg-gray-800 shadow-xl transition-colors duration-300">
            <div class="flex items-center justify-center h-20 bg-gradient-to-r from-blue-600 to-blue-800 dark:from-blue-800 dark:to-blue-900">
                <div class="flex items-center space-x-3">
                    <i class="fas fa-shield-alt text-2xl text-white"></i>
                    <h1 class="text-xl font-bold text-white">StopPhishing</h1>
                </div>
            </div>

            <nav class="mt-8">
                <div class="px-4 space-y-4">
                    <a href="#" class="flex items-center px-6 py-4 text-gray-700 dark:text-gray-200 bg-blue-50 dark:bg-blue-900/30 rounded-xl transition-all duration-300 hover:shadow-md">
                        <i class="fas fa-home text-blue-600 dark:text-blue-400 mr-4"></i>
                        <span class="font-medium">Dashboard</span>
                    </a>
                    <a href="#" class="flex items-center px-6 py-4 text-gray-600 dark:text-gray-400 hover:bg-blue-50 dark:hover:bg-blue-900/30 rounded-xl transition-all duration-300">
                        <i class="fas fa-shield-alt text-gray-500 dark:text-gray-400 mr-4"></i>
                        <span>Alertes Phishing</span>
                    </a>
                    <a href="#" class="flex items-center px-6 py-4 text-gray-600 dark:text-gray-400 hover:bg-blue-50 dark:hover:bg-blue-900/30 rounded-xl transition-all duration-300">
                        <i class="fas fa-users text-gray-500 dark:text-gray-400 mr-4"></i>
                        <span>Utilisateurs</span>
                    </a>
                    <a href="#" class="flex items-center px-6 py-4 text-gray-600 dark:text-gray-400 hover:bg-blue-50 dark:hover:bg-blue-900/30 rounded-xl transition-all duration-300">
                        <i class="fas fa-chart-bar text-gray-500 dark:text-gray-400 mr-4"></i>
                        <span>Statistiques</span>
                    </a>
                </div>
            </nav>
        </div>

        <!-- Contenu principal -->
        <div class="pl-64">
            <!-- Barre supérieure -->
            <div class="bg-white dark:bg-gray-800 shadow-sm border-b border-gray-200 dark:border-gray-700 transition-colors duration-300">
                <div class="flex items-center justify-between h-20 px-8">
                    <div class="flex items-center">
                        <div class="relative">
                            <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                            <input type="text" 
                                   placeholder="Rechercher..." 
                                   class="pl-10 pr-4 py-2 w-64 rounded-xl bg-gray-50 dark:bg-gray-700 text-gray-600 dark:text-gray-200 border border-gray-200 dark:border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all duration-300">
                        </div>
                    </div>

                    <div class="flex items-center space-x-6">
                        <!-- Toggle Dark Mode -->
                        <button id="darkModeToggle" class="p-2 rounded-xl hover:bg-gray-100 dark:hover:bg-gray-700 transition-all duration-300">
                            <i class="fas fa-sun text-yellow-500 text-xl dark:hidden"></i>
                            <i class="fas fa-moon text-blue-400 text-xl hidden dark:block"></i>
                        </button>

                        <!-- Profil -->
                        <div class="flex items-center space-x-4 bg-gray-50 dark:bg-gray-700 px-4 py-2 rounded-xl hover:shadow-md transition-all duration-300 cursor-pointer">
                            <img src="https://ui-avatars.com/api/?name=Admin&background=0D8ABC&color=fff" 
                                 alt="Profile" 
                                 class="w-10 h-10 rounded-full border-2 border-blue-500">
                            <div>
                                <p class="text-sm font-medium text-gray-700 dark:text-gray-200">Admin</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">Administrateur</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contenu -->
            <main class="p-8">
                <!-- Barre de recherche et bouton Ajouter -->
                <div class="flex justify-between items-center mb-6">
                    <div class="relative w-96">
                        <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                        <input type="text" 
                               placeholder="Rechercher un type de phishing..." 
                               class="pl-10 pr-4 py-2 w-full rounded-xl bg-white dark:bg-gray-800 text-gray-600 dark:text-gray-200 border border-gray-200 dark:border-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all duration-300">
                    </div>
                    
                    <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-xl flex items-center space-x-2 transition-colors duration-300">
                        <i class="fas fa-plus"></i>
                        <span>Ajouter un type</span>
                    </button>
                </div>

                <!-- Tableau -->
                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden">
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead class="bg-gray-50 dark:bg-gray-700">
                            <tr>
                                <th class="px-6 py-4 text-left text-xs font-semibold text-gray-500 dark:text-gray-300 uppercase tracking-wider">ID</th>
                                <th class="px-6 py-4 text-left text-xs font-semibold text-gray-500 dark:text-gray-300 uppercase tracking-wider">Image</th>
                                <th class="px-6 py-4 text-left text-xs font-semibold text-gray-500 dark:text-gray-300 uppercase tracking-wider">Titre</th>
                                <th class="px-6 py-4 text-left text-xs font-semibold text-gray-500 dark:text-gray-300 uppercase tracking-wider">Description</th>
                                <th class="px-6 py-4 text-left text-xs font-semibold text-gray-500 dark:text-gray-300 uppercase tracking-wider">Caractéristiques</th>
                                <th class="px-6 py-4 text-left text-xs font-semibold text-gray-500 dark:text-gray-300 uppercase tracking-wider">Protections</th>
                                <th class="px-6 py-4 text-left text-xs font-semibold text-gray-500 dark:text-gray-300 uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                            <tr class="hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors duration-200">
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600 dark:text-gray-300">1</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <img src="path/to/image.jpg" alt="Type" class="h-10 w-10 rounded-full">
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-700 dark:text-gray-200">Email Phishing</td>
                                <td class="px-6 py-4 text-sm text-gray-600 dark:text-gray-300">
                                    <div class="max-w-xs truncate">Tentatives de phishing par email...</div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex flex-wrap gap-2">
                                        <span class="px-2 py-1 text-xs rounded-full bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-200">Urgence</span>
                                        <span class="px-2 py-1 text-xs rounded-full bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-200">Données</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex flex-wrap gap-2">
                                        <span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200">Vérification</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600 dark:text-gray-300">
                                    <div class="flex space-x-2">
                                        <button class="text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-300">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="text-red-600 hover:text-red-800 dark:text-red-400 dark:hover:text-red-300">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <!-- Ajoutez plus de lignes ici -->
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <div class="flex justify-between items-center mt-6">
                    <div class="text-sm text-gray-600 dark:text-gray-400">
                        Affichage de 1 à 10 sur 20 entrées
                    </div>
                    <div class="flex space-x-2">
                        <button class="px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-xl text-gray-600 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-700">Précédent</button>
                        <button class="px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-xl text-gray-600 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-700">Suivant</button>
                    </div>
                </div>
            </main>
        </div>
    </div>


    <script>
        // Script pour le mode sombre
        document.addEventListener('DOMContentLoaded', function() {
            const darkModeToggle = document.getElementById('darkModeToggle');
            
            // Vérifier si le mode sombre était activé précédemment
            if (localStorage.getItem('darkMode') === 'enabled' || 
                (!localStorage.getItem('darkMode') && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                document.documentElement.classList.add('dark');
            }

            // Fonction pour basculer le mode sombre
            darkModeToggle.addEventListener('click', function() {
                document.documentElement.classList.toggle('dark');
                
                // Sauvegarder la préférence
                if (document.documentElement.classList.contains('dark')) {
                    localStorage.setItem('darkMode', 'enabled');
                } else {
                    localStorage.setItem('darkMode', 'disabled');
                }
            });

            // Animation des cartes au chargement
            const cards = document.querySelectorAll('.hover-scale');
            cards.forEach((card, index) => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(20px)';
                
                setTimeout(() => {
                    card.style.transition = 'all 0.5s ease';
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                }, index * 100);
            });
        });
    </script>
</body>
</html>