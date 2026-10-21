<?php
/*
 * Actualités affichées sur la page « Actualités » et sur l'accueil.
 *
 * Pour ajouter une actualité : copier un bloc du tableau $actualites et le
 * remplir. Les articles sont triés automatiquement du plus récent au plus ancien.
 *   - groupe : "sante" (santé au Bénin, hors SoBAPS) ou "sobaps"
 *   - theme  : clé du tableau $themes_actu ci-dessous
 *   - une    : true pour mettre l'article « À la une » (un seul à la fois)
 *   - source / url : site d'origine de l'information (lien « Lire l'article »)
 */

$themes_actu = array(
    "politique"       => ["label" => "Politique de santé",     "icon" => "fa-landmark"],
    "medicament"      => ["label" => "Médicament",             "icon" => "fa-pills"],
    "paludisme"       => ["label" => "Paludisme",              "icon" => "fa-mosquito"],
    "rh"              => ["label" => "Personnels de santé",    "icon" => "fa-user-doctor"],
    "infrastructures" => ["label" => "Infrastructures",        "icon" => "fa-hospital"],
    "vih"             => ["label" => "VIH / IST",              "icon" => "fa-ribbon"],
);

$actualites = array(
    [
        "id" => "combler-les-ecarts-4e-promotion",
        "groupe" => "sante", "theme" => "rh", "date" => "2026-10-07", "une" => true,
        "titre" => "787 jeunes professionnels de santé retenus pour la 4e promotion du projet « Combler les écarts »",
        "resume" => "Par communiqué du 7 octobre 2026, le ministère de la Santé a publié la liste des 787 candidats retenus : 290 infirmiers diplômés d’État, 200 sages-femmes, 187 hygiénistes et 110 médecins. Financé par la Banque islamique de développement, le projet renforce les effectifs des formations sanitaires. Les retenus suivront d’abord des séances d’information et d’orientation.",
        "source" => "Bénin Web TV", "url" => "https://beninwebtv.bj/benin-787-agents-sante-combler-les-ecarts/",
    ],
    [
        "id" => "journees-scientifiques-ist-vih",
        "groupe" => "sante", "theme" => "vih", "date" => "2026-10-09",
        "titre" => "7es Journées scientifiques sur les IST/VIH/sida au Bénin",
        "resume" => "Le ministère de la Santé a programmé le 9 octobre 2026, au Palais des Congrès de Cotonou, les 7es Journées scientifiques sur les IST/VIH/sida. Ouvertes aux professionnels de santé, chercheurs, étudiants, ONG et partenaires, elles portent notamment sur les innovations en matière de prévention, de dépistage, de surveillance et de traitement.",
        "source" => "Ministère de la Santé", "url" => "https://sante.gouv.bj/evenements/EV00000001",
    ],
    [
        "id" => "conseil-ministres-tchaourou",
        "groupe" => "sante", "theme" => "infrastructures", "date" => "2026-10-07",
        "titre" => "Conseil des ministres : relance de l’hôpital de zone de Tchaourou et quatorze centres de santé à reconstruire",
        "resume" => "Le Conseil des ministres du 7 octobre 2026 a approuvé le recours à une nouvelle entreprise pour achever l’hôpital de zone de Tchaourou, dont le chantier était exécuté à 54,27 % lorsque le prestataire initial s’est montré défaillant. Il a également validé la reconstruction de quatorze centres de santé et l’achèvement du centre de santé de Lougba, dans la commune de Bantè.",
        "source" => "Bénin Web TV", "url" => "https://beninwebtv.com/benin-logements-sociaux-routes-et-sante-au-coeur-des-decisions-du-conseil-des-ministres-du-7-octobre/",
    ],
    [
        "id" => "urgences-vitales-tournee",
        "groupe" => "sante", "theme" => "politique", "date" => "2026-09-02",
        "titre" => "Urgences vitales : le ministre de la Santé évalue la gratuité des premiers soins sur le terrain",
        "resume" => "Les 26 et 27 août 2026, le ministre Benjamin Hounkpatin a visité des hôpitaux publics du Borgou, des Collines, du Zou et de l’Atlantique pour vérifier l’application de la prise en charge gratuite des urgences vitales, en vigueur depuis juin 2026.",
        "source" => "Prime News Monde", "url" => "https://www.primenewsmonde.bj/2026/09/02/prise-en-charge-des-urgences-vitales-le-ministre-de-la-sante-sur-le-terrain-pour-le-bilan/",
    ],
    [
        "id" => "icasa-2027",
        "groupe" => "sante", "theme" => "vih", "date" => "2026-07-27",
        "titre" => "Le Bénin accueillera l’ICASA 2027, la conférence africaine sur le sida et les IST",
        "resume" => "Le Bénin a été désigné pays hôte de la 24e Conférence internationale sur le sida et les infections sexuellement transmissibles en Afrique (ICASA), prévue en 2027. Ce rendez-vous réunit chercheurs, décideurs et acteurs communautaires de tout le continent.",
        "source" => "Society for AIDS in Africa", "url" => "https://www.saafrica.org/pages/2026/07/27/communique-de-presse-le-benin-pays-hote-de-la-24e-edition-de-la-conference-internationale-sur-le-sida-et-les-ist-en-afrique-icasa-2027/",
    ],
    [
        "id" => "abmed-maturite-3",
        "groupe" => "sante", "theme" => "medicament", "date" => "2026-07-09",
        "titre" => "Réglementation pharmaceutique : l’ABMed aux portes du niveau de maturité 3 de l’OMS",
        "resume" => "Du 6 au 9 juillet 2026, huit experts de l’OMS ont évalué les fonctions réglementaires de l’Agence béninoise du médicament et des autres produits de santé (ABMed). La restitution, en présence du ministre de la Santé, a relevé des avancées notables qui rapprochent le Bénin du niveau de maturité 3, synonyme d’un système de réglementation fonctionnel, stable et intégré.",
        "source" => "Ministère de la Santé", "url" => "https://new.sante.gouv.bj/article/actualites/reglementation-pharmaceutique-le-benin-aux-portes-du-niveau-de-maturite-3",
    ],
    [
        "id" => "paludisme-drones",
        "groupe" => "sante", "theme" => "paludisme", "date" => "2026-06-30",
        "titre" => "Paludisme : des drones pour traiter les gîtes larvaires dans six communes",
        "resume" => "Lancé le 30 juin 2026 à Cotonou, le projet « Action intégrée pour la prévention du paludisme », financé par le Japon à hauteur de 2,3 millions de dollars, mobilise des drones pulvérisateurs de larvicides, la cartographie et l’intelligence artificielle à Cotonou, Abomey-Calavi, Ouidah, Tchaourou, Djougou et Copargo.",
        "source" => "Gouvernement du Bénin", "url" => "https://www.gouv.bj/article/3570/lutte-contre-paludisme-demarrage-pulverisation-drone-dans-communes-benin/",
    ],
    [
        "id" => "combler-les-ecarts-1re-cohorte",
        "groupe" => "sante", "theme" => "rh", "date" => "2026-06-26",
        "titre" => "« Combler les écarts » : la première cohorte d’agents de santé achève sa mission",
        "resume" => "Après deux ans de déploiement, la première cohorte du projet a terminé sa mission le 24 juin 2026. Selon le bilan relayé par la presse, plus de 182 000 consultations ont été réalisées et 130 centres de santé ont été médicalisés.",
        "source" => "Prime News Monde", "url" => "https://www.primenewsmonde.bj/2026/06/26/projet-combler-les-ecarts-plus-de-182-000-consultations-et-130-centres-medicalises-grace-a-la-premiere-cohorte/",
    ],
    [
        "id" => "urgences-vitales-gratuite",
        "groupe" => "sante", "theme" => "politique", "date" => "2026-06-03",
        "titre" => "Urgences vitales : une prise en charge désormais gratuite dans les hôpitaux publics",
        "resume" => "Le Conseil des ministres du 3 juin 2026 a instauré la gratuité de la prise en charge des urgences vitales dans les hôpitaux publics, sans paiement préalable. Une enveloppe d’un milliard de francs CFA finance des stocks de médicaments et d’intrants dédiés dans les services d’urgence.",
        "source" => "Baatonu Info", "url" => "https://www.baatonu.info/2026/06/04/benin-sante-prise-en-charge-gratuite-des-urgences-vitales-renforcee-dans-les-hopitaux-publics/",
    ],
    [
        "id" => "campagne-mild-2026",
        "groupe" => "sante", "theme" => "paludisme", "date" => "2026-05-11",
        "titre" => "Campagne MILD 2026 : des moustiquaires imprégnées distribuées dans les ménages",
        "resume" => "Organisée tous les trois ans par le Programme national de lutte contre le paludisme, la distribution de masse de moustiquaires imprégnées d’insecticide à longue durée d’action se déploie par étapes. Dans le Zou, elle a été lancée le 11 mai 2026, avec un passage des relais communautaires de maison en maison.",
        "source" => "Prime News Monde", "url" => "https://www.primenewsmonde.bj/2026/05/18/distribution-de-moustiquaires-impregnes-au-benin-le-gouvernement-dans-une-dynamique-continue-de-lutte-contre-la-malaria/",
    ],
    [
        "id" => "abmed-cosmetiques",
        "groupe" => "sante", "theme" => "medicament", "date" => "2026-05-05",
        "titre" => "L’ABMed interdit douze produits cosmétiques dépigmentants",
        "resume" => "Par communiqué du 5 mai 2026, l’ABMed a interdit la commercialisation et l’utilisation de douze produits éclaircissants sur tout le territoire, en raison de risques d’infections, de lésions cutanées graves et de cancer de la peau. La population est invitée à signaler tout produit suspect.",
        "source" => "Les 4 Vérités", "url" => "https://www.les4verites.bj/labmed-interdit-la-commercialisation-de-12-produits-cosmetiques-eclaircissants/",
    ],
    [
        "id" => "recensement-diplomes-etrangers",
        "groupe" => "sante", "theme" => "rh", "date" => "2026-04-30",
        "titre" => "Recensement des diplômés en santé formés dans des établissements privés étrangers",
        "resume" => "Le 30 avril 2026, le ministère de la Santé a lancé le recensement des titulaires de diplômes de formations en santé obtenus dans des établissements privés étrangers, une étape préalable à l’examen de l’équivalence de ces diplômes.",
        "source" => "Banouto", "url" => "https://www.banouto.bj/societe/article/20260505-benin-le-recensement-des-titulaires-de-diplomes-de-formations-en-sante-des-etablissements-prives-etrangers-lance",
    ],
);

usort($actualites, function ($a, $b) {
    return strcmp($b['date'], $a['date']);
});

if (!function_exists('sb_date_fr')) {
    function sb_h($s)
    {
        return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
    }

    /* Typographie française : espaces insécables devant « : ; ? ! » et dans les guillemets */
    function sb_typo($s)
    {
        $s = preg_replace('/ ([:;?!»])/u', "\u{00A0}$1", $s);
        return preg_replace('/« /u', "«\u{00A0}", $s);
    }

    function sb_date_fr($iso)
    {
        $mois = ["janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", "septembre", "octobre", "novembre", "décembre"];
        list($y, $m, $d) = array_map('intval', explode('-', $iso));
        return ($d === 1 ? '1er' : $d) . ' ' . $mois[$m - 1] . ' ' . $y;
    }

    /* Carte d'actualité ; $variante = "carte" ou "une" */
    function sb_news_card($a, $themes, $variante = 'carte')
    {
        $t = isset($themes[$a['theme']]) ? $themes[$a['theme']] : array("label" => "Santé", "icon" => "fa-newspaper");
        $tag = $variante === 'une' ? 'h3' : 'h4';
?>
        <article class="sb-news sb-news--<?= $variante ?> sb-news--<?= sb_h($a['theme']) ?>" id="<?= sb_h($a['id']) ?>" data-theme="<?= sb_h($a['theme']) ?>">
            <div class="sb-news-visual" aria-hidden="true">
                <i class="fas <?= $t['icon'] ?> sb-news-ghost"></i>
                <i class="fas <?= $t['icon'] ?>"></i>
                <?php if ($variante === 'une') { ?><span class="sb-news-flag"><i class="fas fa-bolt"></i> À la une</span><?php } ?>
            </div>
            <div class="sb-news-body">
                <div class="sb-news-meta">
                    <span class="sb-news-theme"><?= sb_h($t['label']) ?></span>
                    <time datetime="<?= sb_h($a['date']) ?>"><?= sb_date_fr($a['date']) ?></time>
                </div>
                <<?= $tag ?> class="sb-news-title">
                    <a href="<?= sb_h($a['url']) ?>" target="_blank" rel="noopener"><?= sb_h(sb_typo($a['titre'])) ?></a>
                </<?= $tag ?>>
                <p class="sb-news-excerpt"><?= sb_h(sb_typo($a['resume'])) ?></p>
                <div class="sb-news-foot">
                    <span class="sb-news-source"><i class="far fa-newspaper"></i> <?= sb_h($a['source']) ?></span>
                    <span class="sb-news-more">Lire l’article <i class="fas fa-arrow-up-right-from-square"></i></span>
                </div>
            </div>
        </article>
<?php
    }
}
