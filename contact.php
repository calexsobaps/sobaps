<?php
include_once 'models/head.php';
include_once 'models/preloard.php';
include_once 'models/header.php';
include_once 'function/mail.php';
?>
<main class="main">

    <div class="site-breadcrumb" style="background: url(./assets/img/slider/imma.JPG)">
        <div class="container">
            <h1 class="breadcrumb-title">Contactez-<span>nous</span></h1>
            <ul class="breadcrumb-menu">
                <li><a href="accueil"><i class="far fa-home"></i>&nbsp;Accueil</a></li>
                <li class="active">Contact</li>
            </ul>
        </div>
    </div>


    <div class="case-area py-120">
        <div class="container-fluid">

            <div class="row rows">
                <div class="col-lg-6 mx-auto">
                    <div class="site-heading text-center">
                        <span class="site-title-tagline">SoBAPS S.A</span>
                        <h2 class="site-title">Avez-vous <span>des questions&nbsp;?</span></h2>
                        <div class="heading-divider"></div>
                    </div>
                </div>
            </div>

            <div class="contact-area">
                <div class="container">
                    <div class="contact-wrapper">
                        <div class="row">
                            <div class="col-lg-8 order-2 order-lg-1 align-self-center">
                                <div class="contact-form">
                                    <div class="contact-form-header">
                                        <h2>Écrivez-nous</h2>
                                        <p>Vous pouvez nous contacter directement par email ou téléphone pour toute question ou demande d'information.</p>
                                    </div>
                                    <?php MonMail($token); ?>
                                </div>
                            </div>
                            <div class="col-lg-4 order-1 order-lg-2">
                                <div class="contact-content">
                                    <div class="contact-info">
                                        <div class="contact-info-icon">
                                            <i class="fal fa-map-marker-alt"></i>
                                        </div>
                                        <div class="contact-info-content">
                                            <h3>Direction Générale</h3>
                                            <p> Quartier Enagnon-Cotonou,<br>01 BP 3280 RP Cotonou-Bénin</p>
                                        </div>
                                    </div>
                                    <div class="contact-info">
                                        <div class="contact-info-icon">
                                            <i class="fal fa-phone"></i>
                                        </div>
                                        <div class="contact-info-content">
                                            <h3>Téléphone</h3>
                                            <p><a href="tel:+2290195773232">(+229) 01 95 77 32 32</a><br><a href="tel:+2290167043333">(+229) 01 67 04 33 33</a></p>
                                        </div>
                                    </div>
                                    <div class="contact-info">
                                        <div class="contact-info-icon">
                                            <i class="fal fa-envelope"></i>
                                        </div>
                                        <div class="contact-info-content">
                                            <h3>Email</h3>
                                            <p><a href="mailto:contact@sobaps.bj">contact@sobaps.bj</a></p>
                                        </div>
                                    </div>
                                    <div class="contact-info">
                                        <div class="contact-info-icon">
                                            <i class="fal fa-clock"></i>
                                        </div>
                                        <div class="contact-info-content">
                                            <h3>Horaires d'ouverture</h3>
                                            <p>Lun - Ven (08h - 17h-30)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="contact-map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15860.934229367025!2d2.464284!3d6.363812!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103caad412560cef%3A0x9d9339e0fd16818f!2sAgence%20R%C3%A9gionale%20SoBAPS%20Cotonou!5e0!3m2!1sfr!2sbj!4v1753015516881!5m2!1sfr!2sbj"
                            style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>

                </div>
            </div>
        </div>
    </div>
</main>
<?php
include_once 'models/footer.php';
include_once 'models/link.php';
?>