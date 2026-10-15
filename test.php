<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SoBAPS S.A - Navigation</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Police Google Fonts - Modernes et professionnelles -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet"> -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #006837;
            /* Vert professionnel */
            --primary-dark: #004d26;
            --primary-light: #4c9c7a;
            --secondary-color: #2c3e50;
            --accent-color: #f39c12;
            --light-color: #f8f9fa;
            --dark-color: #212529;
            --gradient-primary: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            --gradient-accent: linear-gradient(135deg, var(--accent-color), #e67e22);
            --shadow-light: 0 5px 15px rgba(0, 0, 0, 0.08);
            --shadow-medium: 0 8px 25px rgba(0, 0, 0, 0.12);
            --shadow-dark: 0 10px 30px rgba(0, 0, 0, 0.15);
            --transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
            --border-radius: 10px;
            --nav-height: 80px;
        }

        /* Polices améliorées */
        /* body {
            font-family: 'Inter', sans-serif;
        } */

        .main-navigation {
            background: white;
            box-shadow: var(--shadow-light);
            position: relative;
            z-index: 1000;
            transition: var(--transition);
        }

        .main-navigation.scrolled {
            box-shadow: var(--shadow-medium);
            padding-top: 5px;
            padding-bottom: 5px;
        }

        .navbar {
            padding: 0;
            min-height: var(--nav-height);
        }

        .container {
            max-width: 1400px;
        }

        /* Logo amélioré */
        .navbar-brand {
            padding: 10px 0;
            transition: var(--transition);
        }

        .navbar-brand img {
            height: 60px;
            transition: var(--transition);
        }

        .main-navigation.scrolled .navbar-brand img {
            height: 50px;
        }

        /* Menu principal */
        .navbar-nav {
            gap: 5px;
        }

        .nav-item {
            position: relative;
        }

        .nav-link {
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;
            font-size: 15px;
            color: var(--secondary-color) !important;
            padding: 12px 18px !important;
            border-radius: var(--border-radius);
            transition: var(--transition);
            position: relative;
            letter-spacing: 0.3px;
        }

        .nav-link:hover,
        .nav-link:focus,
        .nav-link.active {
            color: white !important;
            background: var(--gradient-primary);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 104, 55, 0.2);
        }

        /* Indicateur pour éléments actifs */
        .nav-link.active::after {
            content: '';
            position: absolute;
            bottom: 5px;
            left: 50%;
            transform: translateX(-50%);
            width: 5px;
            height: 5px;
            background-color: white;
            border-radius: 50%;
        }

        /* Dropdown amélioré */
        .dropdown-menu {
            border: none;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow-medium);
            padding: 10px;
            margin-top: 10px !important;
            min-width: 250px;
            animation: fadeInUp 0.3s ease-out;
            border-top: 3px solid var(--primary-color);
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .dropdown-item {
            font-family: 'Inter', sans-serif;
            font-weight: 500;
            padding: 12px 20px;
            border-radius: 8px;
            margin: 3px 0;
            color: var(--secondary-color);
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }

        .dropdown-item::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 3px;
            background: var(--primary-light);
            transform: scaleY(0);
            transition: var(--transition);
        }

        .dropdown-item:hover,
        .dropdown-item:focus {
            background-color: rgba(0, 104, 55, 0.08);
            color: var(--primary-dark);
            padding-left: 25px;
        }

        .dropdown-item:hover::before {
            transform: scaleY(1);
        }

        .dropdown-item.active {
            background-color: rgba(0, 104, 55, 0.1);
            color: var(--primary-color) !important;
            font-weight: 600;
        }

        /* Style pour les éléments actifs en vert */
        .text-success.fw-bold {
            color: var(--primary-color) !important;
            background: rgba(0, 104, 55, 0.08);
            border-left: 3px solid var(--primary-color);
        }

        /* Toggle button amélioré */
        .navbar-toggler {
            border: none;
            padding: 10px;
            border-radius: var(--border-radius);
            background: var(--gradient-primary);
            box-shadow: var(--shadow-light);
            transition: var(--transition);
        }

        .navbar-toggler:hover {
            transform: scale(1.05);
            box-shadow: var(--shadow-medium);
        }

        .navbar-toggler:focus {
            box-shadow: 0 0 0 3px rgba(0, 104, 55, 0.25);
        }

        .navbar-toggler-icon {
            background-image: none;
            color: white;
            font-size: 1.5rem;
            width: auto;
            height: auto;
        }

        /* Effet de survol pour les dropdown-toggle */
        .dropdown-toggle::after {
            display: inline-block;
            margin-left: 8px;
            vertical-align: middle;
            border-top: 0.4em solid;
            border-right: 0.3em solid transparent;
            border-left: 0.3em solid transparent;
            transition: var(--transition);
        }

        .dropdown:hover .dropdown-toggle::after {
            transform: rotate(180deg);
        }

        /* Bouton client amélioré */
        .theme-btn {
            background: var(--gradient-accent);
            color: white !important;
            padding: 12px 24px;
            border-radius: 50px;
            font-weight: 600;
            font-family: 'Montserrat', sans-serif;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: var(--transition);
            box-shadow: 0 4px 15px rgba(243, 156, 18, 0.3);
            border: none;
        }

        .theme-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(243, 156, 18, 0.4);
            color: white;
        }

        .theme-btn i {
            transition: var(--transition);
        }

        .theme-btn:hover i {
            transform: translateX(5px);
        }

        /* Responsive */
        @media (max-width: 991px) {
            .navbar-collapse {
                background: white;
                border-radius: var(--border-radius);
                box-shadow: var(--shadow-medium);
                padding: 20px;
                margin-top: 15px;
            }

            .navbar-nav {
                gap: 10px;
            }

            .nav-link {
                padding: 15px !important;
            }

            .dropdown-menu {
                box-shadow: none;
                margin-top: 5px !important;
                margin-left: 15px;
                border-left: 2px solid var(--primary-light);
                border-top: none;
            }

            .header-nav-right {
                margin-top: 20px;
                padding-top: 20px;
                border-top: 1px solid rgba(0, 0, 0, 0.1);
            }

            .theme-btn {
                width: 100%;
                justify-content: center;
            }
        }

        @media (min-width: 992px) {
            .header-nav-right {
                margin-left: 20px;
                padding-left: 20px;
                border-left: 1px solid rgba(0, 0, 0, 0.1);
            }
        }

        /* Animation d'apparition */
        @keyframes slideInDown {
            from {
                transform: translateY(-20px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .main-navigation {
            animation: slideInDown 0.5s ease-out;
        }

        /* Badge pour nouveaux éléments */
        .nav-badge {
            background: var(--gradient-accent);
            color: white;
            font-size: 0.7rem;
            padding: 2px 6px;
            border-radius: 10px;
            margin-left: 5px;
            vertical-align: middle;
        }
    </style>
</head>

<body>
    <!-- Navigation améliorée -->
    <div class="main-navigation">
        <?php
        // Simulation des variables PHP pour l'exemple
        $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $active = basename($url);
        $color = "text-success fw-bold";
        ?>

        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="accueil">
                    <img src="https://via.placeholder.com/200x60/006837/FFFFFF?text=SOBAPS+LOGO" alt="SoBAPS S.A">
                </a>

                <div class="mobile-menu-right">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                    </button>
                </div>

                <div class="collapse navbar-collapse" id="main_nav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle <?php if ($active == 'accueil' || $active == 'sobaps' || $active == 'sobaps#directeur' || $active == 'sobaps#organigramme' || $active == 'certificats') echo 'active'; ?>"
                                href="accueil" data-bs-toggle="dropdown">
                                SoBAPS S.A
                                <span class="nav-badge">Nouveau</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item <?php if ($active == 'accueil') echo $color; ?>" href="accueil">
                                        <i class="fas fa-home me-2"></i>Accueil
                                    </a></li>
                                <li><a class="dropdown-item <?php if ($active == 'sobaps') echo $color; ?>" href="sobaps">
                                        <i class="fas fa-building me-2"></i>Présentation SoBAPS S.A
                                    </a></li>
                                <li><a class="dropdown-item" href="sobaps#directeur">
                                        <i class="fas fa-comment-alt me-2"></i>Mot du Directeur Général
                                    </a></li>
                                <li><a class="dropdown-item <?php if ($active == 'certificats') echo $color; ?>" href="certificats">
                                        <i class="fas fa-certificate me-2"></i>Nos Certificats
                                    </a></li>
                                <li><a class="dropdown-item" href="sobaps#organigramme">
                                        <i class="fas fa-sitemap me-2"></i>Organigramme
                                    </a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle <?php if ($active == 'ccpc') echo 'active'; ?>"
                                href="ccpc" data-bs-toggle="dropdown">
                                Nos Produits
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item <?php if ($active == 'ccpc') echo $color; ?>" href="ccpc">
                                        <i class="fas fa-clipboard-check me-2"></i>Critères d'accès aux produits
                                    </a></li>
                                <li><a class="dropdown-item" href="ccpc#catalogue">
                                        <i class="fas fa-tags me-2"></i>Catalogue des prix
                                    </a></li>
                                <li><a class="dropdown-item" href="ccpc#politique">
                                        <i class="fas fa-award me-2"></i>Politique de qualité
                                    </a></li>
                                <li><a class="dropdown-item" href="ccpc#canevas">
                                        <i class="fas fa-clipboard-list me-2"></i>Canevas de besoins
                                    </a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle <?php if ($active == 'agence_cotonou' || $active == 'agence_parakou' || $active == 'agence_natitingou') echo 'active'; ?>"
                                href="#" data-bs-toggle="dropdown">
                                Nos Agences
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item <?php if ($active == 'agence_cotonou') echo $color; ?>" href="agence_cotonou">
                                        <i class="fas fa-map-marker-alt me-2"></i>Agence régionale de Cotonou
                                    </a></li>
                                <li><a class="dropdown-item <?php if ($active == 'agence_parakou') echo $color; ?>" href="agence_parakou">
                                        <i class="fas fa-map-marker-alt me-2"></i>Agence régionale de Parakou
                                    </a></li>
                                <li><a class="dropdown-item <?php if ($active == 'agence_natitingou') echo $color; ?>" href="agence_natitingou">
                                        <i class="fas fa-map-marker-alt me-2"></i>Agence régionale de Natitingou
                                    </a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle <?php if ($active == 'offre' || $active == 'galeries') echo 'active'; ?>"
                                href="#" data-bs-toggle="dropdown">
                                Publications
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item <?php if ($active == 'offre') echo $color; ?>" href="offre">
                                        <i class="fas fa-bullhorn me-2"></i>Appels d'offres
                                    </a></li>
                                <li><a class="dropdown-item" href="offre#emploi">
                                        <i class="fas fa-briefcase me-2"></i>Offres d'emploi
                                    </a></li>
                                <li><a class="dropdown-item <?php if ($active == 'galeries') echo $color; ?>" href="galeries">
                                        <i class="fas fa-camera me-2"></i>Photothèque
                                    </a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link <?php if ($active == 'news') echo 'active'; ?>" href="news">
                                <i class="fas fa-newspaper me-1"></i>Actualités
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link <?php if ($active == 'contact') echo 'active'; ?>" href="contact">
                                <i class="fas fa-envelope me-1"></i>Contact
                            </a>
                        </li>
                    </ul>

                    <div class="header-nav-right">
                        <div class="header-btn">
                            <a href="#" class="theme-btn">
                                <i class="fas fa-user me-2"></i>Espace Client
                                <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<!-- 
    <script>
        // Animation au scroll
        window.addEventListener('scroll', function() {
            const nav = document.querySelector('.main-navigation');
            if (window.scrollY > 50) {
                nav.classList.add('scrolled');
            } else {
                nav.classList.remove('scrolled');
            }
        });

        // Fermer le dropdown en cliquant ailleurs
        document.addEventListener('click', function(event) {
            const dropdowns = document.querySelectorAll('.dropdown-menu');
            dropdowns.forEach(function(dropdown) {
                if (!dropdown.parentElement.contains(event.target)) {
                    const bsCollapse = new bootstrap.Collapse(dropdown.parentElement.querySelector('.dropdown-toggle'));
                    bsCollapse.hide();
                }
            });
        });

        // Animation des liens au survol
        document.querySelectorAll('.nav-link, .dropdown-item').forEach(link => {
            link.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-2px)';
            });

            link.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });

        // Initialisation
        document.addEventListener('DOMContentLoaded', function() {
            console.log('Navigation SoBAPS S.A chargée avec succès');
        });
    </script> -->
</body>

</html>