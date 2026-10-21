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
                        <h2 class="footer-widget-title">Contactez-nous</h2>
                        <ul class="footer-contact">
                            <li><i class="far fa-map-marker-alt"></i>Agence régionale de Cotonou</li>
                            <li><i class="far fa-phone" aria-hidden="true"></i><span><a href="tel:+2290191484040">01 91 48 40 40</a> / <a href="tel:+2290199430303">01 99 43 03 03</a></span></li>
                            <li><i class="far fa-map-marker-alt"></i>Agence régionale de Parakou</li>
                            <li><i class="far fa-phone" aria-hidden="true"></i><span><a href="tel:+2290191484242">01 91 48 42 42</a> / <a href="tel:+2290199430404">01 99 43 04 04</a></span></li>
                            <li><i class="far fa-map-marker-alt"></i>Agence régionale de Natitingou</li>
                            <li><i class="far fa-phone" aria-hidden="true"></i><span><a href="tel:+2290191484646">01 91 48 46 46</a> / <a href="tel:+2290199430505">01 99 43 05 05</a></span></li>
                            <li><i class="far fa-clock"></i>Lundi - Vendredi (08h - 20h)</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2">
                    <div class="footer-widget-box list">
                        <h2 class="footer-widget-title">Liens utiles</h2>
                        <ul class="footer-list">
                            <li><a href="accueil"><i class="fas fa-chevron-right"></i> Accueil</a></li>
                            <li><a href="sobaps"><i class="fas fa-chevron-right"></i> La SoBAPS S.A</a></li>
                            <li><a href="ccpc#catalogue"><i class="fas fa-chevron-right"></i> Catalogue des prix</a></li>
                            <li><a href="offre#emploi"><i class="fas fa-chevron-right"></i> Offre d’emploi</a></li>
                            <li><a href="ccpc#critere"><i class="fas fa-chevron-right"></i> Critères d’accès</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="footer-widget-box list">
                        <h2 class="footer-widget-title">Boîte à lettres</h2>
                        <div class="footer-newsletter">
                            <p>Abonnez-vous pour avoir nos nouvelles au quotidien</p>
                            <div class="subscribe-form">
                                <form action="#">
                                    <input type="email" name="email" class="form-control" placeholder="Votre email" aria-label="Votre email" required>
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
                        &copy; Copyright <span id="date"></span> <a href="accueil">SoBAPS S.A</a> Tous droits réservés.
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
            const links = document.querySelectorAll(`#main_nav .dropdown-item[href$="${fragment}"]`);
            if (!links.length) return;
            document.querySelectorAll("#main_nav .dropdown-item").forEach(link => {
                link.classList.remove("text-success", "fw-bold");
            });
            document.querySelectorAll(".nav-link.dropdown-toggle[data-has-fragment]").forEach(link => {
                link.classList.remove("active");
            });
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
                if (hash && this.pathname === location.pathname) applyFragmentHighlight('#' + hash);
            });
        });
    });
</script>
