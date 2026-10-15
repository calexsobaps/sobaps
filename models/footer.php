<div id="cookie-banner">
    <div class="cookie-container">
        <div class="particles" id="particles"></div>

        <div class="cookie-header">
            <div class="cookie-icon-small">
                <i class="fas fa-cookie-bite"></i>
            </div>
            <div class="cookie-title">Préférences de Cookies</div>
        </div>

        <div class="cookie-content">
            <p class="cookie-text">
                Nous respectons votre vie privée. <br>
                Ce site utilise des cookies pour améliorer votre expérience et analyser l’utilisation de nos services.
                Vous pouvez accepter tous les cookies ou refuser ceux qui ne sont pas essentiels. Votre choix sera respecté.

            </p>
            <div class="cookie-buttons">
                <button class="cookie-btn cookie-btn-decline" id="btn-decline-all">
                    <i class="fas fa-times"></i> Refuser
                </button>
                <button class="cookie-btn cookie-btn-accept" id="btn-accept-all">
                    <i class="fas fa-check"></i> Accepter tout
                </button>
            </div>
        </div>
    </div>
</div>


<footer class="footer-area">
    <div class="footer-widget">
        <div class="container">
            <div class="row footer-widget-wrapper pt-100 pb-70">
                <div class="col-md-6 col-lg-4">
                    <div class="footer-widget-box about-us">
                        <a href="#" class="footer-logo">
                            <img src="assets/img/logo/os.png" alt="SoBAPS" style="width: 150px !important;">
                        </a>
                        <p class="mb-20">
                            Société Béninoise pour l'Approvisionnement en Produits de Santé (SoBAPS S.A)
                        </p>
                        <ul class="footer-social">
                            <li><a href="https://web.facebook.com/sobaps/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://api.whatsapp.com/send/?phone=%2B22996863877&text&type=phone_number&app_absent=0" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                            <li><a href="https://www.linkedin.com/company/sobaps-sa/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="https://www.youtube.com/@SoBAPSSA" target="_blank"><i class="fab fa-youtube"></i></a></li>
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
                            <li><a href="accueil"><i class="fas fa-caret-right"></i> Accueil</a></li>
                            <li><a href="sobaps"><i class="fas fa-caret-right"></i> SoBAPS S.A ?</a></li>
                            <li><a href="ccpc#catalogue"><i class="fas fa-caret-right"></i>Catalogue des prix</a></li>
                            <li><a href="offre#emploi"><i class="fas fa-caret-right"></i> Offre d’emploi</a></li>
                            <li><a href="ccpc#critere"><i class="fas fa-caret-right"></i> Critères d’accès</a></li>
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
                                    <input type="email" class="form-control" placeholder="Votre email">
                                    <button class="theme-btn" type="submit">
                                        <span class="far fa-envelope"></span> Abonnez-vous
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
                        &copy; Copyright <span id="date"></span> <a href="#">SoBAPS S.A</a> Tous droits reservés.
                    </p>
                </div>
                <div class="col-lg-6 align-self-center">
                    <!-- <ul class="footer-menu">
                        <li><a href="contact">Support</a></li>
                        <li><a href="#">Conditions d'utilisation</a></li>
                        <li><a href="#">Politique de confidentialité</a></li>
                    </ul> -->
                </div>
            </div>
        </div>
    </div>
    <div style="width: 100%; height: 16px;" class="d-flex">
        <div style="width: 33.3333%; background: green; height: 100%;"></div>
        <div style="width: 33.3333%; background: yellow; height: 100%;"></div>
        <div style="width: 33.3333%; background: red; height: 100%;"></div>
    </div>
</footer>


<script>
    document.addEventListener("DOMContentLoaded", () => {
        createParticles();

        function hasCookieConsent() {
            const cookies = document.cookie.split(';');
            for (let i = 0; i < cookies.length; i++) {
                const cookie = cookies[i].trim();
                if (cookie.startsWith('cookieConsent=')) {
                    return true;
                }
            }
            return false;
        }

        if (!hasCookieConsent()) {
            setTimeout(() => {
                showCookieBanner();
            }, 800);
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

    function createParticles() {
        const particlesContainer = document.getElementById('particles');
        const particleCount = 15;

        for (let i = 0; i < particleCount; i++) {
            const particle = document.createElement('div');
            particle.classList.add('particle');

            const size = Math.random() * 6 + 2;
            particle.style.width = `${size}px`;
            particle.style.height = `${size}px`;

            particle.style.left = `${Math.random() * 100}%`;

            particle.style.animationDelay = `${Math.random() * 15}s`;

            const hue = 220 + Math.random() * 100;
            particle.style.backgroundColor = `hsla(${hue}, 100%, 70%, 0.4)`;

            particlesContainer.appendChild(particle);
        }
    }

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
        const notification = document.createElement('div');
        notification.style.cssText = `
                position: fixed;
                top: 30px;
                right: 30px;
                background: rgba(15, 15, 25, 0.95);
                backdrop-filter: blur(20px);
                color: white;
                padding: 16px 24px;
                border-radius: 12px;
                border-left: 4px solid #14a449;
                box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
                z-index: 3000;
                font-family: 'Poppins', sans-serif;
                transform: translateX(150%);
                transition: transform 0.5s cubic-bezier(0.16, 1, 0.3, 1);
                max-width: 350px;
            `;

        notification.innerHTML = `
                <div style="display: flex; align-items: center; gap: 12px;">
                    <i class="fas fa-check-circle" style="color: #14a449; font-size: 1.2rem;"></i>
                    <div>
                        <div style="font-weight: 600; margin-bottom: 4px;">Préférences enregistrées</div>
                        <div style="font-size: 0.9rem; color: #c0c0e0;">${message}</div>
                    </div>
                </div>
            `;

        document.body.appendChild(notification);

        setTimeout(() => {
            notification.style.transform = 'translateX(0)';
        }, 10);

        setTimeout(() => {
            notification.style.transform = 'translateX(150%)';
            setTimeout(() => {
                document.body.removeChild(notification);
            }, 500);
        }, 5000);
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