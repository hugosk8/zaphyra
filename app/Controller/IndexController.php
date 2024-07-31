<?php

namespace App\Controller;

use Core\Download\Download;
use Core\Recaptcha\Recaptcha;

class IndexController extends AppController
{

    protected $event;
    protected $article;
    protected $categorie;

    public function __construct()
    {
        parent::__construct();
        $this->loadModel('event');
        $this->loadModel('article');
        $this->loadModel('categorie');
    }

    public function index()
    {
        $this->render('front/index');
    }

    public function products()
    {
        $categorie = $this->categorie->GetBySlug($this->url[2]);
        if ($categorie == false) {
            header('Location: ' . URL . 'home');
        }
        $products = $this->product->GetByCtagorieId($categorie->id);
        $this->render('front/product', compact('categorie', 'products'));
    }

    public function evenements()
    {
        $events = $this->event->EventDESCDate();
        $this->render('front/evenements', compact('events'));
    }

    public function prestations()
    {
        $this->render('front/prestations');
    }

    public function blog()
    {
        if(isset($_GET['id'])) {
            $article = $this->article->find($_GET['id']);
            if($article === false) {
                header('Location: '. URL .'blog');
            }
            $this->render('front/article', compact('article'));
            exit();
        }
        $categories = $this->categorie->all();
        $articles = $this->article->AllAndCat();
        $this->render('front/blog', compact('categories','articles'));
    }

    public function les_pierres()
    {
        $this->render('front/les-pierres');
    }

    public function les_chakras()
    {
        $this->render('front/les-chakras');
    }

    public function les_couleurs()
    {
        $this->render('front/les-couleurs');
    }

    public function soin_aurique() {
        $title = "Le soin aurique";
        $tarif = "- Soin aurique ( 60 min ) : 65 €";
        $description = '
                <br><br>
                Procédé particulier créé par le créateur de Zaphyra il vise à débloquer les mémoires limitantes de la personne, récentes ou anciennes. Grâce à une immersion dans le champ aurique, le praticien obtient une perception globale et précise des points localisés faisant obstacle à la fluidité de la circulation énergétique. Le ralentissement peut être d’origine mental, énergétique ou émotionnel.
                <br><br>
                Les niveaux énergétique et émotionnel sont visés par le soin. Outre l’intervention pour alléger la tension, cela permet la mise en lumière – et en conscience – des blocages engendrés dans notre fonctionnement quotidien. Le choix devient alors possible de changer certains comportements pour obtenir des résultats différents, plus en adéquation avec la personne que nous sommes réellement aujourd’hui.
        ';
        $variables = [
            'presta_title' => $title,
            'tarif' => $tarif,
            'description' => $description
        ];
        $this->render('front/single_prestation', $variables);
    }

    public function coaching_de_vie() {
        $title = "Coaching de vie";
        $tarif = "- Coaching ( 60 min ) : 65 €";
        $description = '
                <br><br>
                Définir des buts et améliorer le bien-être par leur atteinte sont les objectifs du coaching de vie. Un accompagnement est mis en place au travers de différentes étapes rendant la progression plus douce et facile.
                <br><br>
                Il s’agit de restructurer notre vision globale pour la mettre en adéquation avec la réalité existante et le chemin que nous souhaitons emprunter. Les écueils trouvent leur origine dans les croyances et dans le passé : lâcher prise et adopter de nouveaux réflexes de fonctionnement sont les clés pour se tourner vers une nouvelle vie !
                <br><br>
                Grâce au soutien du coach, une prise de recul et une ouverture deviennent possible afin de tendre vers la compréhension des interactions avec le monde extérieur et des freins intérieurs à la réussite. Une implication sur le long terme permet d’atteindre ses objectifs et bien souvent de les modifier suite à des prises de conscience de nos réelles envies.
        ';
        $variables = [
            'presta_title' => $title,
            'tarif' => $tarif,
            'description' => $description
        ];
        $this->render('front/single_prestation', $variables);
    }

    public function soin_reiki() {
        $title = "Le soin réiki";
        $tarif = "- Séance (1h) : 45 €";
        $description = '
                <br><br>
                Effectuer un soin réiki consiste à puiser dans l’énergie universelle qui nous entoure pour la restituer par les mains sur les différents centres d’énergie du corps (27 sont visés). Le résultat tend vers un équilibrage et une harmonisation de l’énergie, pour une détente et un mieux-être immédiats.
                <br><br>
                Le réiki est une énergie douce qui pourra, au fil de séances régulières, renforcer notre énergie individuelle et réveiller les capacités de guérison intrinsèques à chacun, en cas de besoin. Le praticien n’interfère par aucune intention particulière mais laisse plutôt le réiki interagir avec notre énergie. Le ressenti intuitif de points de blocage pourra toutefois l’amener à insister sur certaines zones. Un moment d’échange suit généralement la séance, permettant de recueillir les ressentis respectifs.
        ';
        $variables = [
            'presta_title' => $title,
            'tarif' => $tarif,
            'description' => $description
        ];
        $this->render('front/single_prestation', $variables);
    }

    public function decouverte_de_sois() {
        $title = "La découverte de soi";
        $tarif = "- Découverte de soi 1 jour : 160€";
        $description = '
                <br><br>
                Dialoguez avec votre inconscient et découvrez vos trésors enfouis !
                <br><br>
                Vous vous fréquentez depuis toujours, mais connaissez-vous pour autant tous les aspects de votre personnalité, tout votre potentiel et vos talents particuliers ? Savez-vous ce qui dirige vos actes sans même que vous n’en ayez conscience?
                <br><br>
                Il se peut que certaines croyances ou limitations que vous vous imposez – pas toujours de façon justifiée – vous portent à croire que certaines de vos aspirations ne sont pas faites pour vous. L’origine peut en être un contexte familial, des épreuves de vie ou simplement un manque de confiance en vous. La peur de réussir est parfois aussi puissante que la peur d’échouer !
                <br><br>
                Au travers de multiples exercices basés notamment sur l’art-thérapie, ce stage encourage votre créativité afin de partir à la rencontre de vous-mêmes pour vous redécouvrir sous un jour nouveau. La prise de conscience des entraves qui vous freinent vous offrira l’opportunité de les écarter, afin de progresser vers votre pleine réalisation et celle de vos rêves.
        ';
        $variables = [
            'presta_title' => $title,
            'tarif' => $tarif,
            'description' => $description
        ];
        $this->render('front/single_prestation', $variables);
    }

    public function chemin_du_chevalier() {
        $title = "Le chemin du Chevalier";
        $tarif = "- Chemin du chevalier 2 jours : 300€";
        $description = '
                <br><br>
                Révélez votre véritable valeur grâce aux épreuves du chemin du Chevalier !
                <br><br>
                Ce stage unique et novateur met en lumière vos forces et faiblesses dans la vie, ainsi que vos modes de communication avec les autres. Au travers de la légende arthurienne et de l’identification symbolique à ses personnages fantastiques, vous ferez évoluer votre aventure par vos propres choix.
                <br>
                Vous ne serez pas seul !<br>
                <ul>
                    <li>
                        Le Maître d’Armes vous aidera à redécouvrir votre force et votre courage en
                        vous guidant dans les défis proposés.
                    </li>
                    <li>
                        L’Oracle vous permettra de découvrir l’influence des astres qui vous
                        accompagnent grâce à l’étude du ciel de votre naissance.
                    </li>
                </ul>
                Renouer avec vos émotions parfois enfouies et limitantes, comprendre la nécessité de vos idéaux et la fragilité de vos certitudes sont autant d’étapes qui vous conduiront au Chevalier qui sommeille en vous !
        ';
        $variables = [
            'presta_title' => $title,
            'tarif' => $tarif,
            'description' => $description
        ];
        $this->render('front/single_prestation', $variables);
    }

    public function voie_du_pelerin() {
        $title = "La voie du pèlerin";
        $tarif = "- Chemin du pèlerin : 300€";
        $description = '
                <br><br>
                Prenez du recul sur votre vie et réalisez votre voie !
                <br><br>
                Chacun peut identifier des situations qui se répètent dans son quotidien ou sur de plus longues périodes. Elles sont généralement dues à nos modes de fonctionnement répondant à l’adage « en agissant de la même manière, n’attends pas un résultat différent ».
                <br><br>
                Souvent l’impression est présente (et frustrante), de n’être pour rien dans le cycle des répétitions. Les évènements présentent des similitudes avec le passé, des personnes entrent dans notre vie avec lesquelles nos interactions révèlent les mêmes défauts qu’autrefois. Il n’est pas toujours simple d’identifier l’origine du phénomène.
                <br><br>
                C’est ce que vous offre la voie du Pèlerin : la possibilité de mettre en lumière vos réflexes de fonctionnement, votre manière d’appréhender la vie et d’interagir avec les autres. Une fois ces clés identifiées, vous aurez la possibilité de transcender vos mises en place, pour sortir du labyrinthe et avancer enfin sur la voie que vous souhaitez.
        ';
        $variables = [
            'presta_title' => $title,
            'tarif' => $tarif,
            'description' => $description
        ];
        $this->render('front/single_prestation', $variables);
    }

    public function voie_des_sens() {
        $title = "La voie des Sens";
        $tarif = "- La voie des sens : 120 €";
        $description = '
                <br><br>
                Tel un enfant, (ré)apprenez à découvrir le monde au travers de vos 5 sens !
                <br><br>
                La vie moderne impose un rythme effréné et c’est par grand nombre d’automatismes que nous agissons la plupart du temps. Au point d’en oublier que chaque jour est une chance de ressentir de nouvelles sensations grâce aux 5 sens dont la nature nous a dotés.
                <br><br>
                La voie des Sens offre une reconnexion à la vue, à l’ouïe, au toucher, au goût et à l’odorat par de multiples exercices poussant à sortir de sa zone de confort. L’abandon à l’incertitude centre notre attention complète et dévouée aux ressentis de l’instant. L’occasion également de tester nos résistances à la nouveauté et de dépasser nos limitations !
                <br><br>
                Organisé sur une journée ou en séjour résidentiel, ce stage vous assure des moments à part – de vrais moments de retrouvailles avec la Vie simple et concrète qui vous anime à l’origine. La complicité du groupe renforce les possibilités et vous soutient dans les moments de lâcher-prise.
                <br>
                Oser vivre, quelle bonne idée !
        ';
        $variables = [
            'presta_title' => $title,
            'tarif' => $tarif,
            'description' => $description
        ];
        $this->render('front/single_prestation', $variables);
    }

    public function initiation_au_reiki() {
        $title = "Initiation au réiki";
        $tarif = '
            <span class="title">1 degré : </span>
            <span>165€</span><br>
            <span class="title">2 degré : </span>
            <span>265€</span><br>
            <span class="title">2 degré techniques avancées : </span>
            <span>120€</span><br>
            <span class="title">3 degré : </span>
            <span>395€</span><br>
            <span class="title">Maitrise (nous consulter) : </span>
        ';
        $description = '
                <br><br>
                Méthode de transmission d’énergie par les mains, le réiki consiste à se connecter à l’énergie qui nous entoure afin de la canaliser pour soi-même ou vers une autre personne. Littéralement, réiki signifie « Energie de Vie Universelle ».
                <br><br>
                Le Dr Mikao Usui est à l’origine de cette discipline qui peut être reçue et pratiquée par tous. Fondée à partir d’anciens écrits bouddhistes, elle fut répandue au Japon au XIXe siècle avant de s’imposer également aux Etats-Unis et en Europe.
                <br><br>
                La pratique du réiki s’adresse en premier lieu à votre propre bien-être, dans le cadre de la régulation naturelle de votre énergie intérieure et de l’apaisement de vos maux. Il concourt à un équilibre global et à l’épanouissement personnel, réduit l’impact des aléas de la vie quotidienne et vous éveille à la vie énergétique de votre corps. Pratiqué sur les autres (et sur les animaux), il participe à leur propre guérison et apaisement.
                <br><br>
                Dans le cadre du stage vous seront transmis les principes théoriques d’utilisation ainsi que les instructions pour réaliser les soins. Des moments privilégiés avec les maîtres réiki sont prévus, afin de vous reconnecter à cette source essentielle par des moments d’initiation.
                <br><br>
                Plusieurs niveaux sont accessibles :
                <ul>
                    <li>
                        Le réiki 1 vous permet de réaliser des soins sur vous-mêmes et les autres.
                    </li>
                    <li>
                        Le réiki 2 augmente votre puissance et fournit des outils complémentaires
                        par
                        le biais de symboles pour le traitement de diverses situations.
                    </li>
                    <li>
                        Le réiki 3 accroît votre puissance de canalisation et étend votre champ de
                        conscience.
                    </li>
                    <li>
                        La maîtrise réiki est nécessaire afin de devenir maître et d’enseigner à
                        votre
                        tour la pratique.
                    </li>
                </ul>
        ';
        $variables = [
            'presta_title' => $title,
            'tarif' => $tarif,
            'description' => $description
        ];
        $this->render('front/single_prestation', $variables);
    }

    public function intuition_et_symbolique_par_le_tarot() {
        $title = "Intuition et symbolique par le tarot";
        $tarif = "- Intuition et voyance 2 jours : 220 €";
        $description = '
                <br><br>
                L’intuition est perçue depuis l’Antiquité comme un outil puissant orientant les choix individuels ou le destin des nations. Utilisée seule ou enrichie de la symbolique du tarot, elle aide chacun à tracer son propre chemin.
                <br><br>
                Prenez contact avec votre intuition au travers d’exercices pratiques, renforcez votre confiance en elle – et en vous – afin d’apprendre à l’utiliser dans tous les domaines de votre vie.
                <br><br>
                Au cours du stage, un oracle choisi vous accompagnera et vous apprendrez les différents tirages classiques du tarot. La pratique en groupe vous permettra de valider vos intuitions et de déjouer les pièges de votre mental.
                <br><br>
                Être à l’écoute de soi et de sa vérité est une clé essentielle de la réussite !
        ';
        $variables = [
            'presta_title' => $title,
            'tarif' => $tarif,
            'description' => $description
        ];
        $this->render('front/single_prestation', $variables);
    }

    public function radiesthesie() {
        $title = "Radiesthésie";
        $tarif = "- Energie de l’habitat ( 2 jours ) : 220 €";
        $description = '
                <br><br>
                Vous pensez que le pendule peut rendre de grands services, et vous avez raison. Utilisé pour valider un choix, rééquilibrer les énergies ou découvrir les champs magnétiques en géobiologie, c’est un outil puissant plébiscité depuis des siècles.
                <br><br> L’atelier, centré sur l’utilisation du pendule en énergétique, vous permettra également de mesurer votre taux vibratoire. Différents axes de travail peuvent être abordés en fonction des participants ou du thème choisi :
                <ul>
                    <li>
                        Le rééquilibrage énergétique
                    </li>
                    <li>
                        Les ondes de forme
                    </li>
                    <li>
                        Les vies karmiques, etc.
                    </li>
                </ul>
                Les principes théoriques et les protocoles d’utilisation vous seront enseignés, afin de vous rendre autonome pour une pratique de base. Vous pourrez par la suite vous perfectionner en participant à différents stages thématiques.
        ';
        $variables = [
            'presta_title' => $title,
            'tarif' => $tarif,
            'description' => $description
        ];
        $this->render('front/single_prestation', $variables);
    }

    public function lithotherapie() {
        $title = "Lithothérapie";
        $tarif = "
            - Stage energie des cristaux  ( 2 jours ) : 220 €
            <br>
            &nbsp;&nbsp;(22 pierres de base fournies)
        ";
        $description = '
                <br><br>
                L’énergie naturelle des minéraux, leur rayonnement, apporte au corps humain des bienfaits rapidement perceptibles par quiconque en réalise l’expérience. Chaque pierre recèle des propriétés spécifiques qui vont entrer en résonnance avec différentes parties du corps.
                <br><br>
                Le stage de lithothérapie enseigne les vertus des pierres et apprend à les classifier selon l’énergie qu’elles portent et le type d’influence qu’elles ont sur le corps. Les couleurs ont leur importance en ce domaine, et certaines pierres ont des spécificités plus générales comme le cristal par exemple. Les interactions peuvent varier d’un individu à l’autre selon la réceptivité personnelle à un type d’énergie, aussi vous pourrez découvrir vos minéraux fétiches parmi un grand nombre de pierres proposées.
                <br><br>
                Le premier niveau de formation apprend à réaliser des soins sur soi ou sur les autres, à recharger et à purifier les minéraux. Le deuxième niveau permet, grâce à la réalisation de mandalas, de créer des champs d’énergie cohérents visant à améliorer l’énergie de lieux ou de situations.
        ';
        $variables = [
            'presta_title' => $title,
            'tarif' => $tarif,
            'description' => $description
        ];
        $this->render('front/single_prestation', $variables);
    }

    public function perception_energetique() {
        $title = "Perceptions énergétiques";
        $tarif = "- Stage de perception énergétique : 120 €";
        $description = '
                <br><br>
                Ouvrir son champ de conscience à l’énergie qui nous entoure permet une meilleure adaptation aux situations et aux personnes que nous croisons. S’ouvrir à son énergie intérieure est tout aussi essentiel, pour détecter nos circuits d’énergie et en améliorer la fluidité.
                <br><br>
                Vous découvrirez au travers de ce stage, quels sont les principes fondamentaux qui dirigent la perception et quelle préparation personnelle est nécessaire pour en optimiser l’efficacité (lâcher-prise, ancrage, etc.). Des exercices pratiques vous permettront ensuite de découvrir votre perception en accord avec votre personnalité et votre sensibilité à l’énergie, et d’affiner progressivement la lecture des informations vous parvenant.
                <br><br>
                Vivre en conscience vos perceptions énergétiques est une grande richesse – comme l’ajout d’un sixième sens – mais surtout une discipline offrant une marge de progression importante. Si l’expérience s’acquiert par nature avec le temps, des clés vous seront fournies durant le stage aptes à faciliter votre compréhension.
                <br>
                Accédez à une nouvelle dimension de vous-mêmes !
        ';
        $variables = [
            'presta_title' => $title,
            'tarif' => $tarif,
            'description' => $description
        ];
        $this->render('front/single_prestation', $variables);
    }

    public function contact()
    {
        $this->render('front/contact');
        unset($_SESSION['MailStatus']);
    }

    public function download()
    {
        new Download($this->article, $_GET['id'], 'image3', 'assets/img/');
    }
}
