<!DOCTYPE html>
<html lang="fr" class="h-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Type de Phishing - Dashboard Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: {
                            "50": "#eff6ff",
                            "100": "#dbeafe",
                            "200": "#bfdbfe",
                            "300": "#93c5fd",
                            "400": "#60a5fa",
                            "500": "#3b82f6",
                            "600": "#2563eb",
                            "700": "#1d4ed8",
                            "800": "#1e40af",
                            "900": "#1e3a8a",
                            "950": "#172554"
                        }
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

            <!-- Formulaire -->
            <main class="p-8">
                <form action="/add-type" method="POST" class="max-w-7xl mx-auto" enctype="multipart/form-data">
                    <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 space-y-8"> <!-- Augmenté le padding -->
                        <!-- Grille pour les informations principales -->
                        <div class="grid grid-cols-2 gap-8"> <!-- Création d'une grille à 2 colonnes -->
                            <div class="space-y-4">
                                <h2 class="text-xl font-semibold text-gray-700 dark:text-gray-200 border-b border-gray-200 dark:border-gray-700 pb-2">
                                    Informations principales
                                </h2>

                                <!-- Titre -->
                                <div>
                                    <label for="title" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                        Titre
                                    </label>
                                    <input type="text"
                                        id="title"
                                        name="title"
                                        required
                                        class="w-full px-4 py-2 rounded-xl border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-700 dark:text-gray-200 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300">
                                </div>

                                <!-- Description -->
                                <div>
                                    <label for="description" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                        Description
                                    </label>
                                    <textarea id="description"
                                        name="description"
                                        rows="4"
                                        class="w-full px-4 py-2 rounded-xl border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-700 dark:text-gray-200 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300"></textarea>
                                </div>

                                <!-- Image -->
                                <div>
                                    <label for="image" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                        Image
                                    </label>
                                    <div class="flex items-center space-x-4">
                                        <div class="flex-1">
                                            <input type="file"
                                                id="image"
                                                name="image"
                                                accept="image/*"
                                                class="w-full px-4 py-2 rounded-xl border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-700 dark:text-gray-200 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300">
                                        </div>
                                        <div class="w-32 h-32 bg-gray-100 dark:bg-gray-700 rounded-xl flex items-center justify-center"> <!-- Augmenté la taille -->
                                            <img id="imagePreview" src="#" alt="Preview" class="hidden max-w-full max-h-full rounded-xl">
                                            <i class="fas fa-image text-gray-400 text-3xl" id="imageIcon"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Caractéristiques -->
                            <div class="space-y-4">
                                <h2 class="text-xl font-semibold text-gray-700 dark:text-gray-200 border-b border-gray-200 dark:border-gray-700 pb-2">
                                    Caractéristiques
                                </h2>

                                <div id="characteristicsContainer" class="space-y-4">
                                    <div class="flex items-center space-x-2">
                                        <input type="text"
                                            name="characteristics[]"
                                            class="flex-1 px-4 py-2 rounded-xl border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-700 dark:text-gray-200 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300"
                                            placeholder="Entrez une caractéristique">
                                        <button type="button" class="text-red-500 hover:text-red-700" onclick="removeCharacteristic(this)">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>

                                <button type="button"
                                    onclick="addCharacteristic()"
                                    class="px-4 py-2 text-sm text-blue-600 dark:text-blue-400 hover:text-blue-800 dark:hover:text-blue-300 flex items-center space-x-2">
                                    <i class="fas fa-plus"></i>
                                    <span>Ajouter une caractéristique</span>
                                </button>
                            </div>
                        </div>

                        <!-- Protections (pleine largeur) -->
                        <div class="space-y-4">
                            <h2 class="text-xl font-semibold text-gray-700 dark:text-gray-200 border-b border-gray-200 dark:border-gray-700 pb-2">
                                Protections
                            </h2>

                            <div id="protectionsContainer" class="space-y-4">
                                <div class="flex items-center space-x-2">
                                    <textarea name="protections[]"
                                        rows="2"
                                        class="flex-1 px-4 py-2 rounded-xl border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-700 dark:text-gray-200 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300"
                                        placeholder="Entrez une protection"></textarea>
                                    <button type="button" class="text-red-500 hover:text-red-700" onclick="removeProtection(this)">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>

                            <button type="button"
                                onclick="addProtection()"
                                class="px-4 py-2 text-sm text-blue-600 dark:text-blue-400 hover:text-blue-800 dark:hover:text-blue-300 flex items-center space-x-2">
                                <i class="fas fa-plus"></i>
                                <span>Ajouter une protection</span>
                            </button>
                        </div>

                        <!-- Boutons d'action -->
                        <div class="flex justify-end space-x-4 pt-6 border-t border-gray-200 dark:border-gray-700">
                            <button type="button"
                                onclick="window.location.href='types.html'"
                                class="px-6 py-2 rounded-xl border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700 transition-all duration-300">
                                Annuler
                            </button>
                            <button type="submit"
                                class="px-6 py-2 rounded-xl bg-blue-600 text-white hover:bg-blue-700 transition-all duration-300">
                                Enregistrer
                            </button>
                        </div>
                    </div>
                </form>
            </main>
        </div>
    </div>

    <script>
        // Prévisualisation de l'image
        document.getElementById('image').addEventListener('change', function(e) {
            const file = e.target.files[0];
            const preview = document.getElementById('imagePreview');
            const icon = document.getElementById('imageIcon');

            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.classList.remove('hidden');
                    icon.classList.add('hidden');
                }
                reader.readAsDataURL(file);
            }
        });

        // Ajouter une caractéristique
        function addCharacteristic() {
            const container = document.getElementById('characteristicsContainer');
            const div = document.createElement('div');
            div.className = 'flex items-center space-x-2';
            div.innerHTML = `
                <input type="text" 
                       name="characteristics[]" 
                       class="flex-1 px-4 py-2 rounded-xl border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-700 dark:text-gray-200 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300"
                       placeholder="Entrez une caractéristique">
                <button type="button" class="text-red-500 hover:text-red-700" onclick="removeCharacteristic(this)">
                    <i class="fas fa-times"></i>
                </button>
            `;
            container.appendChild(div);
        }

        // Supprimer une caractéristique
        function removeCharacteristic(button) {
            button.parentElement.remove();
        }

        // Ajouter une protection
        function addProtection() {
            const container = document.getElementById('protectionsContainer');
            const div = document.createElement('div');
            div.className = 'flex items-center space-x-2';
            div.innerHTML = `
                <textarea name="protections[]" 
                          rows="2"
                          class="flex-1 px-4 py-2 rounded-xl border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-700 dark:text-gray-200 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300"
                          placeholder="Entrez une protection"></textarea>
                <button type="button" class="text-red-500 hover:text-red-700" onclick="removeProtection(this)">
                    <i class="fas fa-times"></i>
                </button>
            `;
            container.appendChild(div);
        }

        // Supprimer une protection
        function removeProtection(button) {
            button.parentElement.remove();
        }

        // Mode sombre
        document.addEventListener('DOMContentLoaded', function() {
            const darkModeToggle = document.getElementById('darkModeToggle');

            if (localStorage.getItem('darkMode') === 'enabled' ||
                (!localStorage.getItem('darkMode') && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                document.documentElement.classList.add('dark');
            }

            darkModeToggle.addEventListener('click', function() {
                document.documentElement.classList.toggle('dark');
                localStorage.setItem('darkMode',
                    document.documentElement.classList.contains('dark') ? 'enabled' : 'disabled'
                );
            });
        });
    </script>
</body>

</html>