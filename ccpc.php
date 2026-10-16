<?php
include_once 'models/head.php';
include_once 'models/preloard.php';
include_once 'models/header.php';
?>

<main class="main">

    <div class="hero-section">
        <div class="hero-slider owl-carousel owl-theme">
            <div class="hero-single" style="background-image: url(./assets/img/slider/magas.jpg)">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-12 col-lg-12 text-center">
                            <div class="hero-content">
                                <h1 class="hero-title wow animate__animated animate__fadeInUp"
                                    data-wow-duration="1s" data-wow-delay=".50s">
                                    Nos <span>produits</span> de santé
                                </h1>
                                <div class="hero-btn">
                                    <a class="theme-btn" href="#catalogue">Catalogue des prix <i class="far fa-arrow-down"></i></a>
                                    <a class="theme-btn theme-btn2" href="#canevas">Canevas <?php echo date('Y'); ?> <i class="far fa-arrow-down"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="hero-section testimonial-area bg py-120">
        <div class="hero-static" id="critere">
            <div class="hero-single">
                <div class="container">
                    <div class="row align-items-center rows">
                        <div class="col-lg-12">
                            <div class="hero-content">
                                <h6 role="none" class="hero-sub-title animate__ animate__fadeInUp animated">Note d'Information</h6>
                                <h2 class="hero-title animate__animated animate__fadeInUp">
                                    Critères d'accès <span>aux produits de santé</span> de la SoBAPS S.A
                                </h2>
                                <p class="animate__animated animate__fadeInUp about-text text-center">
                                    Les spécificités de nos produits nous obligent à définir des critères obligatoires pour leur accès.
                                </p>
                                <div>
                                    <a href="pdfs/CRITERES.pdf" target="_blank" class="theme-btn">Télécharger le document PDF <i class="far fa-download"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="service-area service-area2 py-120" id="catalogue">
        <div class="container">
            <div class="row rows">
                <div class="col-lg-12">
                    <div class="site-heading text-center">
                        <span class="site-title-tagline">Catalogue des Prix</span>
                        <h2 class="site-title">Que contient notre <span>Catalogue des Prix</span> ?</h2>
                        <div class="heading-divider"></div>
                        <p>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="flaticon-board-with-list"></i>
                        </div>
                        <div class="service-content">
                            <h3 class="service-title">
                                <a href="pdfs/MEDICAMENTS.pdf" target="_blank">Médicaments et produits de santé humaine</a>
                            </h3>
                            <p class="service-text">
                                Catalogue des prix de cession, à télécharger au format PDF.
                            </p>
                            <div class="service-arrow">
                                <a href="pdfs/MEDICAMENTS.pdf" target="_blank" class="theme-btn">Télécharger le PDF <i class="far fa-download"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="flaticon-board-with-list"></i>
                        </div>
                        <div class="service-content">
                            <h3 class="service-title">
                                <a href="pdfs/OXY.pdf" target="_blank">Oxygène médical et accessoires</a>
                            </h3>
                            <p class="service-text">
                                Catalogue des prix de cession, à télécharger au format PDF.
                            </p>
                            <div class="service-arrow">
                                <a href="pdfs/OXY.pdf" target="_blank" class="theme-btn">Télécharger le PDF <i class="far fa-download"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="flaticon-board-with-list"></i>
                        </div>
                        <div class="service-content">
                            <h3 class="service-title">
                                <a href="pdfs/VET.pdf" target="_blank">Produits de santé animale</a>
                            </h3>
                            <p class="service-text">
                                Catalogue des prix de cession, à télécharger au format PDF.
                            </p>
                            <div class="service-arrow">
                                <a href="pdfs/VET.pdf" target="_blank" class="theme-btn">Télécharger le PDF <i class="far fa-download"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="faq-area py-120" id="politique">
        <div class="container">
            <div class="row rows">
                <div class="col-lg-12">
                    <div class="site-heading">
                        <span class="site-title-tagline">Politique d'assurrance qualité</span>
                        <h2 class="site-title">Politique <span>Assurance Qualité</span> des médicaments <br>A la SoBAPS S.A </h2>
                        <div class="heading-divider"></div>
                        <p>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <span><i class="far fa-info-circle"></i></span> 1. Description générale
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show"
                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body text-justify">
                                L’Assurance Qualité consiste à garantir et à préserver la qualité du produit médical depuis la fabrication jusqu’à l’utilisateur final qu’est la population. La recherche de la qualité stricto sensu étant une préoccupation majeure pour la SoBAPS S.A, un Département chargé de l’Approvisionnement, et de la Logistique (DAL) dirigé par un Pharmacien a été créée à la Direction Générale depuis 2006. Par la suite un Département spécifique à l’Assurance Qualité directement rattaché à la Direction Générale a été créé en 2012.
                                <br>
                                S’il est vrai que le contrôle de qualité constitue un élément important dans l’assurance qualité, il ne permet cependant pas à lui seul d’assurer la qualité d’un produit.
                                <br>
                                La qualité doit être assurée à tous les niveaux du circuit à savoir :
                                <br>
                                <ul class="service-single-list">
                                    <li><i class="far fa-check-circle monochrome"></i>La sélection</li>
                                    <li><i class="far fa-check-circle monochrome"></i>L’approvisionnement</li>
                                    <li><i class="far fa-check-circle monochrome"></i>La logistique (l’acheminement / le transport)</li>
                                    <li><i class="far fa-check-circle monochrome"></i>La réception</li>
                                    <li><i class="far fa-check-circle monochrome"></i>Le stockage</li>
                                    <li><i class="far fa-check-circle monochrome"></i>La distribution au sein du système sanitaire</li>
                                </ul>
                                <br>
                                Aussi, la SoBAPS S.A a-t-elle mis en œuvre un système d’assurance qualité, permettant de garantir la qualité des produits pharmaceutiques à tous les niveaux d’activités de la centrale.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <span><i class="far fa-info-circle"></i></span> 2. Référentiel et standard
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                La politique de la SoBAPS S.A est de se conformer aux textes législatifs et référentiels pharmaceutiques nationaux et internationaux :
                                <br>
                                <ul class="service-single-list">
                                    <li><i class="far fa-check-circle monochrome"></i>Textes législatifs et règlementaires nationaux</li>
                                    <li><i class="far fa-check-circle monochrome"></i>Bonnes Pratiques de Distribution de l’UEMOA</li>
                                    <li><i class="far fa-check-circle monochrome"></i>Norme ISO 17025 pour les laboratoires</li>
                                    <li><i class="far fa-check-circle monochrome"></i>Norme ISO pour les matériels, produits de diagnostic et équipements médicaux</li>
                                    <li><i class="far fa-check-circle monochrome"></i>MQAS OMS</li>
                                    <li><i class="far fa-check-circle monochrome"></i>Convention de Viennes pour les narcotiques</li>
                                    <li><i class="far fa-check-circle monochrome"></i>Les pharmacopées internationalement reconnues</li>
                                </ul>
                                <br>
                                La SoBAPS S.A se conforme aussi aux politiques assurances qualité de ses partenaires notamment celle du Fonds Mondial.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false"
                                aria-controls="collapseThree">
                                <span><i class="far fa-info-circle"></i></span> 3. Gestion de la qualité
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse"
                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body text-justify">
                                <h4 class="mt-4">3.1 Personnel et responsabilité</h4> <br>
                                Toutes les fonctions liées à la gestion de la qualité des produits médicaux à la SoBAPS S.A sont assurées par des pharmaciens : tout pharmacien veille au respect des bonnes pratiques des achats, stockage et distribution. Cependant, le pharmacien responsable Assurance Qualité joue un rôle prépondérant dans la mise en œuvre de la politique qualité. Sous la responsabilité du Directeur Général, il est chargé de définir, mettre en place et organiser l’ensemble des activités permettant de garantir le maintien de la qualité des produits médicaux approvisionnés, stockés et distribués par la SoBAPS S.A.
                                <br>
                                <h4 class="mt-4">3.2 Système documentaire Assurance Qualité pharmaceutique</h4> <br>
                                La documentation est un élément clé du système d’assurance de la qualité de la SoBAPS S.A. Elle a pour objectif de définir le système de contrôle et de réduire le risque d’erreur inhérent à la communication orale. Grâce à elle, le personnel est en possession d’instructions détaillées et suit les procédures qui conviennent de manière logique et reproductible.
                                <br>
                                Le système documentaire assurance qualité de la SoBAPS S.A est constitué des documents suivants :
                                <br>
                                <ul class="service-single-list">
                                    <li><i class="far fa-check-circle monochrome"></i>D’un manuel qualité définissant la politique assurance qualité et la stratégie de sa mise en œuvre</li>
                                    <li><i class="far fa-check-circle monochrome"></i>Des procédures opératoires normalisées décrivant clairement et de façon détaillée toutes les activités pharmaceutiques de la SoBAPS S.A et les responsabilités qui y sont attachées</li>
                                    <li><i class="far fa-check-circle monochrome"></i>Des instructions opératoires qui décrivent en détail des tâches spécifiques</li>
                                    <li><i class="far fa-check-circle monochrome"></i>Des enregistrements des activités accomplies selon des formulaires ou documents préétablis et rattachés à la procédure concernée</li>
                                </ul>
                                <br>
                                La gestion des procédures et instructions opératoires assurance qualité pharmaceutiques comprenant la gestion des changements, la distribution, le retrait et l’archivage est sous la responsabilité du responsable Assurance Qualité.
                                <br>
                                Ces procédures sont accessibles aux différents départements mais la distribution des documents est contrôlée.
                                <br>
                                La formation aux procédures assurance qualité est réalisée de façon constante au sein de chaque département et la vérification de la mise en œuvre des procédures est réalisée à travers des exercices d’auto-évaluations périodiques par le responsable Assurance Qualité.
                                <br>
                                <h4 class="mt-4">3.3 Le processus d’assurance qualité des produits médicaux</h4><br>
                                Le processus d’assurance qualité des produits médicaux à la Centrale d’Achat des Médicaments Essentiels et consommable médicaux du BENIN, est formulé autour des axes procéduraux décrits ci-après:
                                <br>
                                <h5 class="montexte mt-4">A. Préqualification des fournisseurs</h5><br>
                                La pré qualification est faite sur la base d’une analyse des dossiers techniques et administratifs des différents fournisseurs (couple produit/fabricant par fournisseur).
                                <br>
                                <h5 class="montexte mt-4">B. Analyse des échantillons lors de la préqualification</h5><br>
                                L’appréciation de la qualité et de la conformité des échantillons de produits médicaux fournis lors de la pré qualification se font par:
                                <br>
                                <ul class="service-single-list">
                                    <li><i class="far fa-check-circle monochrome"></i> La vérification de la conformité de l’échantillon aux spécifications techniques exigées par le CAAO</li>
                                    <li><i class="far fa-check-circle monochrome"></i> L’envoi aux formations sanitaires des échantillons de certains consommables médicaux pour requérir leur appréciation après utilisation-test</li>
                                </ul>
                                <br>
                                <h5 class="montexte mt-4">C. Respect des conditions spécifiques de transport et de stockage propre aux médicaments</h5>
                                <br>
                                La conformité aux Bonnes Pratiques de Distribution est assurée par un ensemble de mesures décrites dans les procédures opératoires normalisées, par la supervision, la formation du personnel ainsi qu’une évaluation périodique des pratiques.
                                <br>
                                <h5 class="montexte mt-4">D. Contrôle qualité des produits médicaux</h5>
                                <br>
                                Des prélèvements randomisés sur des lots sont effectués à la réception des produits et en cours d’utilisation. Les prélèvements sont envoyés aux laboratoires sélectionnés et contractés.
                                <br>
                                <h5 class="montexte mt-4">E. Réception des produits médicaux</h5>
                                <br>
                                La réception des produits se fait de manière à :
                                <br>
                                <ul class="service-single-list">
                                    <li><i class="far fa-check-circle monochrome"></i> Garantir que les produits livrés correspondent aux spécifications préétablies</li>
                                    <li><i class="far fa-check-circle monochrome"></i> Vérifier la conformité aux critères de qualité définis dans le DAO</li>
                                    <li><i class="far fa-check-circle monochrome"></i> S’assurer que les quantités demandées sont respectées</li>
                                </ul>
                                <br>
                                <h5 class="montexte mt-4">F. Suivi de performance des fournisseurs</h5>
                                <br>
                                Les performances des fournisseurs notamment la qualité des produits fournis, le respect des délais de livraison, la fourniture des cautions, le respect des clauses contractuelles etc. sont suivies et analysées de manière continue. Un système de notification permet de mesurer la performance de ces derniers et l’évaluation est prise en compte pour l’attribution des futurs marchés.
                                <br>
                                <h5 class="montexte mt-4">G. Gestion des stocks</h5>
                                <br>
                                Des outils de gestion des stocks sont utilisés : les fiches de stock, la fiche de suivi des stocks et le logiciel SAGE 100 Edition pilotée.
                                <br>
                                A partir de ces outils, des paramètres de gestion tels que le calcul des sorties mensuelles moyennes, la définition de seuils d’alerte et de sécurité, les inventaires périodiques sont mis en place afin d’assurer un suivi optimale du stock de produits médicaux distribués par la SoBAPS S.A.
                                <br>
                                <h5 class="montexte mt-4">H. Gestion des périmés, casses et avaries</h5>
                                <br>
                                Des mesures sont prises afin de retirer du stock tout produit impropre à la consommation en vue de leur destruction suivant la règlementation en vigueur.
                                <br>
                                <h5 class="montexte mt-4">I. Monitoring</h5>
                                <br>
                                Le monitoring de la qualité des produits distribués et de la fiabilité des fournisseurs est réalisé à travers :
                                <br>
                                <ul class="service-single-list">
                                    <li><i class="far fa-check-circle monochrome"></i> Le renouvellement de la préqualification au bout de deux ans</li>
                                    <li><i class="far fa-check-circle monochrome"></i> Le suivi des conditions de stockage dans tous les entrepôts de la SoBAPS S.A</li>
                                    <li><i class="far fa-check-circle monochrome"></i> La gestion des réclamations client</li>
                                    <li><i class="far fa-check-circle monochrome"></i> Le suivi des performances fournisseurs</li>
                                </ul>
                                <br>
                                <h5 class="montexte mt-4">J. Traçabilité et rappel de lot</h5>
                                <br>
                                La traçabilité des lots est assurée à l’aide du système informatique depuis la réception jusqu’à la livraison des produits ce qui permet une mise en œuvre aisée de la procédure de rappel de lot.
                                <br>
                                <h4 class="mt-4">3.4 Audit/auto-évaluation et plan d’action</h4> <br>

                                La SoBAPS S.A est régulièrement auditée par ses partenaires (Gouvernement du Bénin, Fonds Mondial, SoBAPS S.A, UNITAID, Banque Mondiale, USAID, etc.).
                                <br>
                                L’autoévaluation est assurée sous la forme d’un audit interne croisé et couvre toutes les opérations pharmaceutiques de la SoBAPS S.A.
                                <br>
                                Suite aux audits, les observations et recommandations sont prises en compte et les plans d’actions correctives et préventives sont élaborés et gérés par le responsable Assurance Qualité ; leur mise en œuvre est également coordonnée par le responsable Assurance Qualité.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="hero-section sb-band-grey" id="canevas">
        <div class="hero-static">
            <div class="hero-single">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="hero-content">
                                <h6 role="none" class="hero-sub-title">Téléchargement</h6>
                                <h2 class="hero-title animate__animated animate__fadeInUp">
                                    <span>Canevas de besoins</span> <?php echo date('Y'); ?>
                                </h2>
                                <p class="animate__animated animate__fadeInUp about-text">
                                    Notre canevas de besoins pour les produits de santé.
                                </p>
                                <div>
                                    <a href="pdfs/CANEVAS_DE_BESOINS_2025.xlsx" target="_blank" class="theme-btn">Télécharger le canevas (Excel) <i class="far fa-file-excel"></i></a>
                                </div>
                            </div>
                        </div>
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