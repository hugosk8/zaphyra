<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-53V2KTC');
    </script>
    <!-- End Google Tag Manager -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="à venir">
    <meta name="description" content="<?= (isset($metaDescription)) ? $metaDescription : "Bienvenue chez 0001" ?>">
    <title>Zaphyra : <?= ($title) ? $title : '' ?></title>

    <!-- favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/favicon/site.webmanifest">

    <?php /*
    <!-- Fonts URL -->
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700%7CPlayfair+Display:400,500,600,700,800,900%7CWork+Sans:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    */ ?>
    
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="css/front/bootstrap.min.css">
    <link rel="stylesheet" href="css/front/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="css/front/bootstrap-select.min.css">
    <link rel="stylesheet" href="css/front/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/front/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="css/front/magnific-popup.css">
    <link rel="stylesheet" href="css/front/owl.carousel.min.css">
    <link rel="stylesheet" href="css/front/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/front/animate.css">
    <link rel="stylesheet" href="css/front/hover-min.css">
    <link rel="stylesheet" href="css/front/muzex-icons.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/front/style.css">
    <link rel="stylesheet" href="css/front/responsive.css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-TZWKVVQP3T"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-TZWKVVQP3T');
    </script>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-53V2KTC" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div class="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div><!-- /.preloader -->
    <div class="page-wrapper" id="wrapperPage">

        <div class="topbar-one">
            <div class="container">
                <div class="topbar-one__left">
                    <!--<p>Look at the Calender for the Upcoming Exhibitions.</p>-->
                </div><!-- /.topbar-one__left -->
                <div class="topbar-one__right">
                    <!--<a href="#"><i class="far fa-clock"></i> Mon - Sat 9.00 - 18.00</a> LES HORAIRES-->
                    <a href="#"><i class="fa fa-phone-alt"></i> 03 20 87 20 69</a>
                    <!--<a href="#" class="thm-btn topbar__btn">Buy Tickets</a> /.thm-btn -->
                </div><!-- /.topbar-one__right -->
            </div><!-- /.container -->
        </div><!-- /.topbar-one -->

        <nav class="main-nav-one stricky">
            <div class="container">
                <div class="inner-container">
                    <div class="logo-box">
                        <a href="index.php">
                            <img src="assets/zaphyra/logo190_60.png" alt="logo Zaphyra" width="143">
                        </a>
                        <a href="#" class="side-menu__toggler"><i class="muzex-icon-menu"></i></a>
                    </div><!-- /.logo-box -->
                    <div class="main-nav__main-navigation">
                        <ul class="main-nav__navigation-box">
                            <li class="">
                                <a href="<?= URL ?>index">Accueil</a>
                            </li>
                            <li class="dropdown">
                                <a href="<?= URL ?>prestations">Nos prestations</a>
                                <ul>
                                    <li><a href="<?= URL ?>prestations">Toutes les prestations</a></li>
                                    <li class="title">Consultations individuelles</li>
                                    <li><a href="<?= URL ?>soin_aurique">Le soin aurique</a></li>
                                    <li><a href="<?= URL ?>coaching_de_vie">Le coaching de vie</a></li>
                                    <li><a href="<?= URL ?>soin_reiki">Le soin réiki</a></li>
                                    <li class="title">Stages de développement personnel</li>
                                    <li><a href="<?= URL ?>decouverte_de_sois">La découverte de soi</a></li>
                                    <li><a href="<?= URL ?>chemin_du_chevalier">Le chemin du Chevalier</a></li>
                                    <li><a href="<?= URL ?>voie_du_pelerin">La voie du Pèlerin</a></li>
                                    <li><a href="<?= URL ?>voie_des_sens">La voie des Sens</a></li>
                                    <li class="title">Stages de formation</li>
                                    <li><a href="<?= URL ?>initiation_au_reiki">Initiation au réiki</a></li>
                                    <li><a href="<?= URL ?>intuition_et_symbolique_par_le_tarot">Intuition et symbolique par le tarot</a></li>
                                    <li><a href="<?= URL ?>radiesthesie">Radiesthésie</a></li>
                                    <li><a href="<?= URL ?>lithotherapie">Lithothérapie</a></li>
                                    <li><a href="<?= URL ?>perception_energetique">Perceptions énergétiques</a></li>
                                </ul>
                            </li>
                            <li class="">
                                <a href="<?= URL ?>evenements">Évènements</a>
                            </li>
                            <li class="">
                                <a href="<?= URL ?>blog">Blog</a>
                            </li>
                            <li class="dropdown">
                                <a>Ressources</a>
                                <ul>
                                    <li><a href="<?= URL ?>les_chakras">Les chakras</a></li>
                                    <li><a href="<?= URL ?>les_couleurs">Les couleurs</a></li>
                                    <li><a href="<?= URL ?>les_pierres">Les pierres</a></li>
                                </ul>
                            </li>
                            <li><a href="<?= URL ?>contact">Contact</a></li>
                        </ul>
                    </div><!-- /.main-nav__main-navigation -->
                </div><!-- /.inner-container -->
            </div><!-- /.container -->
        </nav><!-- /.main-nav-one -->

        <?= $content ?>

        <footer class="site-footer">
            <div class="site-footer__upper">
                <div class="container">
                    <div class="row" id="rowFooter">

                        <div class="col-lg-3" id="colFooter">
                            <div class="footer-widget footer-widget__contact">
                                <h3 class="footer-widget__title">ZAPHYRA</h3><!-- /.footer-widget__title -->
                                <p id="p-footer">FORME : SARL</p>
                                <p id="p-footer">SIRET : 48366001500015</p>
                                <p id="p-footer">CAPITAL : 9810 €</p>
                                <p id="p-footer">APE : 9609Z</p>
                                <p id="p-footer">DATE : 01/09/2005</p>
                                <p id="p-footer">TVA : FR28483660015</p>
                                <p id="p-footer">SIEGE : 45 rue d’Artois 59000 Lille</p>

                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-lg-3 -->
                        <div class="col-lg-3" id="colFooter">
                            <div class="footer-widget footer-widget__contact">
                                <h3 class="footer-widget__title">HEBERGEMENT OVH</h3><!-- /.footer-widget__title -->
                                <p id="p-footer">FORME : SAS</p>
                                <p id="p-footer">SIRET : 42476141900045</p>
                                <p id="p-footer">CAPITAL : 10000000 €</p>
                                <p id="p-footer">APE : 6202A</p>
                                <p id="p-footer">DATE : 12/11/99</p>
                                <p id="p-footer">TVA : FR22424761419</p>
                                <p id="p-footer">SIEGE : 2 rue Kellermann 59100 Roubaix</p>

                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-lg-3 -->
                        <div class="col-lg-3" id="colFooter3">
                            <div class="footer-widget footer-widget__contact">
                                <h3 class="footer-widget__title">DEV & CREATION 0001 COMMUNICATION</h3>
                                <!-- /.footer-widget__title -->
                                <p id="p-footer">FORME : SAS</p>
                                <p id="p-footer">SIRET : 88227000200018</p>
                                <p id="p-footer">CAPITAL :500 €</p>
                                <p id="p-footer">APE : 7022Z</p>
                                <p id="p-footer">DATE : 05/05/2020</p>
                                <p id="p-footer">TVA : FR 21 882270002 </p>
                                <p id="p-footer">SIEGE : 10 PLACE JAQUES FEBVRIER 59000 LILLE</p>

                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-lg-3 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.site-footer__upper -->
            <div class="site-footer__bottom">
                <div class="container">
                    <div class="inner-container" id="inner-container-footerBas">
                        <div class="site-footer__bottom-links">
                            <a href="www.0001.fr" target="blank">
                                <img src="assets/LOGOFOOTER2.png" id="logo0001" alt="0001 COMMUNICATION">
                            </a>
                            <a href="https://www.0001.fr/" target="blank">0001.fr </a>
                            <a href="https://www.0001.fr/" target="blank id=" footer2020"> © 2020</a>
                        </div><!-- /.site-footer__bottom-links -->
                    </div><!-- /.inner-container -->
                </div><!-- /.container -->
            </div><!-- /.site-footer__bottom -->
        </footer><!-- /.site-footer -->

        <div class="search-popup">
            <div class="search-popup__overlay custom-cursor__overlay">
                <div class="cursor"></div>
                <div class="cursor-follower"></div>
            </div><!-- /.search-popup__overlay -->
            <div class="search-popup__inner">
                <form action="#" class="search-popup__form">
                    <input type="text" name="search" placeholder="Type here to Search....">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div><!-- /.search-popup__inner -->
        </div><!-- /.search-popup -->

        <div class="side-content__block">
            <div class="side-content__block-overlay custom-cursor__overlay">
                <div class="cursor"></div>
                <div class="cursor-follower"></div>
            </div><!-- /.side-content__block-overlay -->
            <div class="side-content__block-inner ">
                <a href="index.html">
                    <img src="assets/zaphyra/logo190_60.png" alt="logo Zaphyra" width="143">
                </a>
                <div class="side-content__block-about">
                    <h3 class="side-content__block__title">À propos de nous</h3><!-- /.side-content__block__title -->
                    <p class="side-content__block-about__text">Texte à venir </p><!-- /.side-content__block-about__text -->
                </div><!-- /.side-content__block-about -->
                <hr class="side-content__block-line" />
                <div class="side-content__block-contact">
                    <h3 class="side-content__block__title">Contact</h3><!-- /.side-content__block__title -->
                    <ul class="side-content__block-contact__list">
                        <li class="side-content__block-contact__list-item">
                            <i class="fa fa-map-marker"></i>
                            45 Rue d'Artois, 59000 Lille
                        </li><!-- /.side-content__block-contact__list-item -->
                        <li class="side-content__block-contact__list-item">
                            <i class="fa fa-phone"></i>
                            <a href="contact.html">03 20 87 20 69</a>
                        </li><!-- /.side-content__block-contact__list-item -->
                        <li class="side-content__block-contact__list-item">
                            <i class="fa fa-envelope"></i>
                            <a href="contact.html">contact@zaphyra.fr</a>
                        </li><!-- /.side-content__block-contact__list-item -->
                        <li class="side-content__block-contact__list-item">
                            <i class="fa fa-clock"></i>
                            <pre id="pre-contact">Semaine :      10:00-19:00</pre>
                            <pre id="pre-contact">Dimanche-Lundi :      Fermé</pre>
                        </li><!-- /.side-content__block-contact__list-item -->
                    </ul><!-- /.side-content__block-contact__list -->
                </div><!-- /.side-content__block-contact -->
                <p class="side-content__block__text site-footer__copy-text"><a href="index.html">Zaphyra</a> <i class="fa fa-copyright"></i> 2020 Tous droits réservés</p>
            </div><!-- /.side-content__block-inner -->
        </div><!-- /.side-content__block -->

        <div class="side-menu__block">

            <a href="#" class="side-menu__toggler side-menu__close-btn"><i class="fa fa-times"></i>
                <!-- /.fa fa-close --></a>

            <div class="side-menu__block-overlay custom-cursor__overlay">
                <div class="cursor"></div>
                <div class="cursor-follower"></div>
            </div><!-- /.side-menu__block-overlay -->
            <div class="side-menu__block-inner ">

                <a href="index.html" class="side-menu__logo"><img src="assets/zaphyra/logo2.svg" alt="logo Zaphyra" width="143"></a>
                <nav class="mobile-nav__container">
                    <!-- content is loading via js -->
                </nav>
                <p class="side-menu__block__copy">
                    <a href="https://www.0001.fr" target="blank">0001.fr </a>
                    <a href="https://www.0001.fr" id="footer2020" target="blank"> © 2020</a>
                <div class="side-menu__social">
                    <a href="https://www.facebook.com/zaphyra.lille" target="blank"><i class="fab fa-facebook-f"></i></a>
                </div>
            </div><!-- /.side-menu__block-inner -->
        </div><!-- /.side-menu__block -->

        <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

        <!-- Template JS -->

        <script src="js/front/jquery.min.js"></script>
        <script src="js/front/bootstrap.bundle.min.js"></script>
        <script src="js/front/bootstrap-datepicker.min.js"></script>
        <script src="js/front/bootstrap-select.min.js"></script>
        <script src="js/front/isotope.js"></script>
        <script src="js/front/jquery.ajaxchimp.min.js"></script>
        <script src="js/front/jquery.counterup.min.js"></script>
        <script src="js/front/jquery.magnific-popup.min.js"></script>
        <script src="js/front/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="js/front/jquery.validate.min.js"></script>
        <script src="js/front/owl.carousel.min.js"></script>
        <script src="js/front/TweenMax.min.js"></script>
        <script src="js/front/waypoints.min.js"></script>
        <script src="js/front/wow.min.js"></script>
        <script src="js/front/jquery.lettering.min.js"></script>
        <script src="js/front/jquery.circleType.js"></script>

        <!-- Custom Scripts -->
        <script src="js/front/theme.js"></script>
</body>

</html>