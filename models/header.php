<div id="cookie-banner" role="dialog" aria-live="polite" aria-label="Préférences de cookies">
    <div class="cookie-container">
        <div class="cookie-icon"><i class="fas fa-cookie-bite"></i></div>
        <div class="cookie-copy">
            <div class="cookie-title">Préférences de cookies</div>
            <p class="cookie-text">
                Nous respectons votre vie privée. Ce site utilise des cookies pour améliorer votre expérience et analyser l’utilisation de nos services.
                Vous pouvez accepter tous les cookies ou refuser ceux qui ne sont pas essentiels.
            </p>
        </div>
        <div class="cookie-buttons">
            <button class="cookie-btn cookie-btn-decline" id="btn-decline-all" type="button">
                <i class="fas fa-times"></i> Refuser
            </button>
            <button class="cookie-btn cookie-btn-accept" id="btn-accept-all" type="button">
                <i class="fas fa-check"></i> Accepter tout
            </button>
        </div>
    </div>
</div>

<header class="header">
    <a class="sb-skip" href="#contenu">Aller au contenu</a>

    <div class="header-top">
        <div class="container">
            <div class="header-top-wrapper">
                <div class="header-top-left">
                    <div class="header-top-contact">
                        <ul>
                            <li><a href="tel:+2290191484040"><i class="far fa-phone"></i>+229 01 91 48 40 40</a></li>
                            <li> <a href="mailto:contact@sobaps.bj"><i class="far fa-envelope"></i>contact@sobaps.bj</a></li>
                            <li>
                                <div class="sb-ticker"><span>SoBAPS S.A, la garantie de l’accès aux produits de santé de qualité...</span></div>
                            </li>
                        </ul>

                    </div>
                </div>
                <div class="header-top-right">
                    <div class="header-top-social">
                        <span>Suivez-nous:</span>
                        <a href="https://web.facebook.com/sobaps/" target="_blank" rel="noopener" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://api.whatsapp.com/send/?phone=%2B22996863877&text&type=phone_number&app_absent=0" target="_blank" rel="noopener" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                        <a href="https://www.linkedin.com/company/sobaps-sa/" target="_blank" rel="noopener" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://www.youtube.com/@SoBAPSSA" target="_blank" rel="noopener" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="main-navigation">
        <?php
        $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $active = basename($url);
        $color = "text-success fw-bold";
        ?>

        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="accueil">
                    <img src="assets/img/logo/logo_sobaps_white.png" alt="logo">
                </a>
                <div class="mobile-menu-right">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#main_nav" aria-expanded="false" aria-label="Menu principal">
                        <span class="navbar-toggler-icon"><i class="far fa-stream"></i></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="main_nav">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle <?php if ($active == 'accueil' || $active == 'sobaps' || $active == 'sobaps#directeur' || $active == 'sobaps#organigramme' || $active == 'certificats') echo 'active'; ?>" href="accueil" data-bs-toggle="dropdown">SoBAPS S.A</a>
                            <ul class="dropdown-menu fade-up">
                                <li><a class="dropdown-item <?php if ($active == 'accueil') echo $color; ?>" href="accueil">Accueil</a></li>
                                <li><a class="dropdown-item <?php if ($active == 'sobaps') echo $color; ?>" href="sobaps">Présentation SoBAPS S.A</a></li>
                                <li><a class="dropdown-item" href="sobaps#directeur">Mot du Directeur Général</a></li>
                                <li><a class="dropdown-item <?php if ($active == 'certificats') echo $color; ?>" href="certificats">Nos Certificats</a></li>
                                <li><a class="dropdown-item" href="sobaps#organigramme">Organigramme</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle <?php if ($active == 'ccpc') echo 'active'; ?>" href="ccpc" data-bs-toggle="dropdown">Nos Produits</a>
                            <ul class="dropdown-menu fade-up">
                                <li><a class="dropdown-item <?php if ($active == 'ccpc') echo $color; ?>" href="ccpc">Critères d'accès aux produits</a></li>
                                <li><a class="dropdown-item" href="ccpc#catalogue">Catalogue des prix</a></li>
                                <li><a class="dropdown-item" href="ccpc#politique">Politique de qualité</a></li>
                                <li><a class="dropdown-item" href="ccpc#canevas">Canevas de besoins</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle <?php if ($active == 'agence_cotonou' || $active == 'agence_parakou' || $active == 'agence_natitingou') echo 'active'; ?>" href="#" data-bs-toggle="dropdown">Nos Agences</a>
                            <ul class="dropdown-menu fade-up">
                                <li><a class="dropdown-item <?php if ($active == 'agence_cotonou') echo $color; ?>" href="agence_cotonou">Agence régionale de Cotonou</a></li>
                                <li><a class="dropdown-item <?php if ($active == 'agence_parakou') echo $color; ?>" href="agence_parakou">Agence régionale de Parakou</a></li>
                                <li><a class="dropdown-item <?php if ($active == 'agence_natitingou') echo $color; ?>" href="agence_natitingou">Agence régionale de Natitingou</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle <?php if ($active == 'offre' || $active == 'galeries') echo 'active'; ?>" href="#" data-bs-toggle="dropdown">Publications</a>
                            <ul class="dropdown-menu fade-up">
                                <li><a class="dropdown-item <?php if ($active == 'offre') echo $color; ?>" href="offre">Appels d'offres</a></li>
                                <li><a class="dropdown-item" href="offre#emploi">Offres d'emploi</a></li>
                                <li><a class="dropdown-item <?php if ($active == 'galeries') echo $color; ?>" href="galeries">Photothèque</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link <?php if ($active == 'news') echo 'active'; ?>" href="news">Actualités</a></li>
                        <li class="nav-item"><a class="nav-link <?php if ($active == 'contact') echo 'active'; ?>" href="contact">Contact</a></li>
                    </ul>
                    <div class="header-nav-right d-none">
                        <div class="header-btn">
                            <a href="#" class="theme-btn">Client<i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div> -->

    <div class="main-navigation">
        <?php
        $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $active = basename($url);
        $color = "text-success fw-bold";
        ?>

        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand sb-brand" href="accueil" aria-label="SoBAPS S.A — Accueil">
                    <img src="assets/img/logo/os.png" alt="SoBAPS" width="88" height="46">
                    <span class="sb-brand-text">Société Béninoise pour<br>l’Approvisionnement en<br>Produits de Santé</span>
                </a>

                <div class="mobile-menu-right">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#main_nav" aria-expanded="false" aria-label="Menu principal">
                        <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                    </button>
                </div>

                <div class="collapse navbar-collapse" id="main_nav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle <?php if ($active == 'accueil' || $active == 'sobaps' || $active == 'sobaps#directeur' || $active == 'sobaps#organigramme' || $active == 'certificats') echo 'active'; ?>"
                                href="accueil" data-bs-toggle="dropdown">
                                SoBAPS S.A
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
                                <li><a class="dropdown-item" href="accueil#certifications">
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
                                <!-- <li><a class="dropdown-item" href="ccpc#canevas">
                                        <i class="fas fa-clipboard-list me-2"></i>Canevas de besoins
                                    </a></li> -->
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
                                Actualités
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link <?php if ($active == 'contact') echo 'active'; ?>" href="contact">
                                Contact
                            </a>
                        </li>
                    </ul>

                    <div class="header-nav-right">
                        <div class="header-btn">
                            <a href="https://commande.sobaps.bj/" class="theme-btn" target="_blank">
                                <i class="fas fa-user me-2"></i>Accès Client
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>