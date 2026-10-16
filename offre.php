<?php
include_once 'models/head.php';
include_once 'models/preloard.php';
include_once 'models/header.php';
?>

<main class="main">
    <section class="sb-soon" id="emploi">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <span class="site-title-tagline">Publications</span>
                    <h1 class="sb-soon-title">Appels d’offres <span>&amp;</span> offres d’emploi</h1>
                    <p class="lead">Retrouvez bientôt ici toutes nos opportunités de collaboration pour renforcer ensemble la chaîne d’approvisionnement en produits de santé au Bénin.</p>
                    <?php if (time() < strtotime(date('Y-m-d'))): ?><div id="countdown" class="countdown-wrap my-4"></div><?php endif; ?>
                    <form class="newsletter-form">
                        <input type="email" class="input-newsletter form-control" placeholder="Entrez un mail valide"
                            name="email" autocomplete="off" id="email" aria-label="Votre email" required>
                        <button type="submit">Abonnez-vous</button>
                    </form>
                    <div class="coming-social">
                        <a href="https://web.facebook.com/sobaps/" target="_blank" rel="noopener" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://api.whatsapp.com/send/?phone=%2B22996863877&text&type=phone_number&app_absent=0" target="_blank" rel="noopener" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                        <a href="https://www.linkedin.com/company/sobaps-sa/" target="_blank" rel="noopener" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://www.youtube.com/@SoBAPSSA" target="_blank" rel="noopener" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="sb-soon-media">
                        <img src="./assets/img/slider/offre.png" alt="Offres d'emploi et appels d'offres">
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
include_once 'models/footer.php';
include_once 'models/link.php';
?>