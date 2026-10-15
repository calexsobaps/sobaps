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

<!-- Filtre « monochrome vert » : transforme logos et pictogrammes en #009c39 (le blanc devient transparent) -->
<svg width="0" height="0" style="position:absolute" aria-hidden="true" focusable="false">
    <filter id="sb-mono" color-interpolation-filters="sRGB">
        <feColorMatrix type="matrix" values="0 0 0 0 0
                                             0 0 0 0 0.6118
                                             0 0 0 0 0.2235
                                             -0.2126 -0.7152 -0.0722 1 0" />
    </filter>
</svg>

<footer class="footer-area">
    <div class="footer-widget">
        <div class="container">
            <div class="row footer-widget-wrapper">
                <div class="col-md-6 col-lg-4">
                    <div class="footer-widget-box about-us">
                        <a href="accueil" class="footer-logo" aria-label="SoBAPS S.A — Accueil">
                            <img src="assets/img/logo/os.png" alt="SoBAPS">
                        </a>
                        <p class="mb-20">
                            Société Béninoise pour l'Approvisionnement en Produits de Santé (SoBAPS S.A)
                        </p>
                        <ul class="footer-social">
                            <li><a href="https://web.facebook.com/sobaps/" target="_blank" rel="noopener" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://api.whatsapp.com/send/?phone=%2B22996863877&text&type=phone_number&app_absent=0" target="_blank" rel="noopener" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a></li>
                            <li><a href="https://www.linkedin.com/company/sobaps-sa/" target="_blank" rel="noopener" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="https://www.youtube.com/@SoBAPSSA" target="_blank" rel="noopener" aria-label="YouTube"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="footer-widget-box">
                        <h4 class="footer-widget-title">Contactez-nous</h4>
                        <ul class="footer-contact">
                            <li><i class="far fa-map-marker-alt"></i>Agence régionale de Cotonou</li>
                            <li><a href="tel:+2290191484040"><i class="far fa-phone"></i>0191484040 / 0199430303</a></li>
                            <li><i class="far fa-map-marker-alt"></i>Agence régionale de Parakou</li>
                            <li><a href="tel:+2290191484242"><i class="far fa-phone"></i>0191484242 / 0199430404</a></li>
                            <li><i class="far fa-map-marker-alt"></i>Agence régionale de Natitingou</li>
                            <li><a href="tel:+2290191484646"><i class="far fa-phone"></i>0191484646 / 0199430505</a></li>
                            <li><i class="far fa-clock"></i>Lundi - Vendredi (08h - 20h)</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2">
                    <div class="footer-widget-box list">
                        <h4 class="footer-widget-title">Liens utiles</h4>
                        <ul class="footer-list">
                            <li><a href="accueil"><i class="fas fa-chevron-right"></i> Accueil</a></li>
                            <li><a href="sobaps"><i class="fas fa-chevron-right"></i> SoBAPS S.A ?</a></li>
                            <li><a href="ccpc#catalogue"><i class="fas fa-chevron-right"></i> Catalogue des prix</a></li>
                            <li><a href="offre#emploi"><i class="fas fa-chevron-right"></i> Offre d’emploi</a></li>
                            <li><a href="ccpc#critere"><i class="fas fa-chevron-right"></i> Critères d’accès</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="footer-widget-box list">
                        <h4 class="footer-widget-title">Boîte à lettres</h4>
                        <div class="footer-newsletter">
                            <p>Abonnez-vous pour avoir nos nouvelles au quotidien</p>
                            <div class="subscribe-form">
                                <form action="#">
                                    <input type="email" class="form-control" placeholder="Votre email" aria-label="Votre email">
                                    <button class="theme-btn" type="submit">
                                        Abonnez-vous <span class="far fa-envelope"></span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <p class="copyright-text">
                        &copy; Copyright <span id="date"></span> <a href="accueil">SoBAPS S.A</a> Tous droits reservés.
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>


<script>
    document.addEventListener("DOMContentLoaded", () => {
        function hasCookieConsent() {
            return document.cookie.split(';').some(c => c.trim().startsWith('cookieConsent='));
        }

        if (!hasCookieConsent()) {
            setTimeout(showCookieBanner, 800);
        }

        document.getElementById("btn-accept-all").addEventListener("click", function() {
            setCookieConsent("all");
            hideCookieBanner();
            showConfirmation("Tous les cookies ont été acceptés.");
        });

        document.getElementById("btn-decline-all").addEventListener("click", function() {
            setCookieConsent("none");
            hideCookieBanner();
            showConfirmation("Les cookies non essentiels ont été refusés.");
        });
    });

    function showCookieBanner() {
        const banner = document.getElementById("cookie-banner");
        banner.style.display = "block";
        void banner.offsetWidth;
        banner.classList.add("cookie-show");
    }

    function hideCookieBanner() {
        const banner = document.getElementById("cookie-banner");
        banner.classList.remove("cookie-show");
        setTimeout(() => {
            banner.style.display = "none";
        }, 600);
    }

    function setCookieConsent(consent) {
        const expiryDate = new Date();
        expiryDate.setFullYear(expiryDate.getFullYear() + 1);
        document.cookie = `cookieConsent=${consent}; path=/; expires=${expiryDate.toUTCString()}; SameSite=Strict`;
    }

    function showConfirmation(message) {
        if (window.sbToast) {
            window.sbToast("Préférences enregistrées", message);
        }
    }
</script>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        function applyFragmentHighlight(fragment) {
            if (!fragment) return;
            document.querySelectorAll('a[href*="#"]').forEach(link => {
                link.classList.remove("text-success", "fw-bold");
            });
            document.querySelectorAll(".nav-link.dropdown-toggle[data-has-fragment]").forEach(link => {
                link.classList.remove("active");
            });

            const links = document.querySelectorAll(`a[href$="${fragment}"]`);
            links.forEach(link => {
                link.classList.add("text-success", "fw-bold");
            });

            const parentDropdown = links[0]?.closest(".dropdown-menu")?.previousElementSibling;
            if (parentDropdown) {
                parentDropdown.classList.add("active");
                parentDropdown.setAttribute("data-has-fragment", "true");
            }
        }

        applyFragmentHighlight(window.location.hash);

        document.querySelectorAll('a[href*="#"]').forEach(link => {
            link.addEventListener("click", function(e) {
                const hash = this.getAttribute("href").split("#")[1];
                if (hash) {
                    history.pushState(null, null, `#${hash}`);
                    applyFragmentHighlight(`#${hash}`);
                }
            });
        });
    });
</script>
