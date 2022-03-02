<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Il mio portfolio web | Rici86: Coder, Crafter, Creative </title>

    <!-- Meta tags  -->
    <meta name="description" content="Front-end developer per lavoro, crafter e Irish dance nerd per passione" />
	
    <meta property="article:author" content="https://www.facebook.com/rici86" />
    <meta property="og:title" content="Rici86 - Coder, Crafter, Creative" />
    <meta property="og:description" content="Front-end developer per lavoro, crafter e Irish dance nerd per passione" />
    <meta property="og:site_name" content="Rici86" />
    <meta property="og:image" content="../src/img/spirit-of-the-forest.jpg" />
	
	<link rel="shortcut icon" href="../src/img/logofavicon.png" type="imag/png" />

    <!-- slick slider  -->
    <link rel="stylesheet" type="text/css" href="../src/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="../src/slick/slick-theme.css"/>

    <!-- Css  -->
    <link href="../src/css/main.css?v=1.11" rel="stylesheet">
    <link href="../src/fontawesome/css/all.css" rel="stylesheet">

    <?php require_once '../include/analytics.php';?>
</head>

<body>
    <div id="main-container">
        <?php require_once 'include/nav.php';?>

        <a href="../en/web-development.php" title="English" class="lang-switcher">
            <img src="../src/img/eng.png" alt="English" class="lang">
        </a>

        <main class="with-shape-divider">
            <section class="main-row">
                <div class="card">
                    <h1 class="card-title">Siti web</h1>
                    <p>
                        Ho iniziato con un piccolo sito dedicato a una delle mie passioni ai tempi del liceo, poi ho cominciato a realizzare siti web per conoscenti e amici. Dopo un paio d'anni, sono venuti a chiedermi collaborazioni più o meno durature anche aziende e altre realtà.
                    </p>
                    <p>
                        Ristoranti, piccole aziende, artisti, enti pubblici, associazioni, negozi, squadre sportive... ho perso il conto di tutti i progetti che ho realizzato. 
                    </p>
                    <p>
                        Prediligo HTML e CSS, con tutti i contorni del caso, ma non disdegno l'uso di CMS quando serve. Wordpress è quello che ho usato di più, ma non il solo.  
                    </p>
                    <p>
                        I siti di cui sono più orgogliosa? 
                        <br>Quello del Comune di Zavattarello, di cui mi sono occupata per più di dieci anni e del quale ho realizzato due restyling. É anche il mio miglior risultato in termini di strategia SEO.
                        <br>Il sito dell'Associazione Anemos, il mio primo sito responsive. 
                        <br>Anche il sito di MI GAMES League Beach Volley, il primo template Wordpress che ho quasi totalmente ridisegnato. 
                        <br>Ovviamente il sito dedicato ai <a href="fai-da-te.php">lavori di fai-da-te di famiglia</a>, #LRCrafts!
                    </p>

                    <?php require_once '../include/code-icons.php';?>
                </div>
                <div class="">
                    <div class="slider-siti">
                        <div class="box-sito">
                            <img src="../src/portfolio/bottondoro.png" alt="" class="img-responsive">
                            <div class="sito-description">
                                <div>
                                    <p class="sito-titolo">Bottondoro - Vestiti spensierati</p>
                                    <p class="sito-date">2021</p>
                                </div>
                                <p class="sito-url">www.bottondoro.eu</p>
                                
                            </div>
                        </div>
                        <div class="box-sito">
                            <img src="../src/portfolio/lrcrafts.png" alt="" class="img-responsive">
                            <div class="sito-description">
                                <div>
                                    <p class="sito-titolo">#LRCrafts - If you can think it you can make it</p>
                                    <p class="sito-date">2021 - <?php echo date("Y"); ?></p>
                                </div>
                                <p class="sito-url">www.lrcrafts.it</p>
                                
                            </div>
                        </div>
                        <div class="box-sito">
                            <img src="../src/portfolio/sinergo.png" alt="" class="img-responsive">
                            <div class="sito-description">
                                <div>
                                    <p class="sito-titolo">Sinergo Enterprise</p>
                                    <p class="sito-date">2020 - <?php echo date("Y"); ?></p>
                                </div>
                                <p class="sito-url">www.sinergo.it</p>
                                
                            </div>
                        </div>
                        <div class="box-sito">
                            <img src="../src/portfolio/techseed.png" alt="" class="img-responsive">
                            <div class="sito-description">
                                <div>
                                    <p class="sito-titolo">Techseed S.R.L.</p>
                                    <p class="sito-date">2020 - <?php echo date("Y"); ?></p>
                                </div>
                                <p class="sito-url">www.techseed.it</p>
                                
                            </div>
                        </div>
                        <div class="box-sito">
                            <img src="../src/portfolio/amadeus.png" alt="" class="img-responsive">
                            <div class="sito-description">
                                <div>
                                    <p class="sito-titolo">Amadeus Magazine</p>
                                    <p class="sito-date">2019</p>
                                </div>
                                <p class="sito-url">www.amadeusmagazine.it</p>
                                
                            </div>
                        </div>
                        <div class="box-sito">
                            <img src="../src/portfolio/watchdigest.png" alt="" class="img-responsive">
                            <div class="sito-description">
                                <div>
                                    <p class="sito-titolo">Watch Digest</p>
                                    <p class="sito-date">2019</p>
                                </div>
                                <p class="sito-url">www.watchdigest.it</p>
                                
                            </div>
                        </div>
                        <div class="box-sito">
                            <img src="../src/portfolio/riders.png" alt="" class="img-responsive">
                            <div class="sito-description">
                                <div>
                                    <p class="sito-titolo">Riders Magazine</p>
                                    <p class="sito-date">2018 - 2019</p>
                                </div>
                                <p class="sito-url">www.ridersmagazine.it</p>
                                
                            </div>
                        </div>
                        <div class="box-sito">
                            <img src="../src/portfolio/torneosportilia.png" alt="" class="img-responsive">
                            <div class="sito-description">
                                <div>
                                    <p class="sito-titolo">Torneo Sportilia</p>
                                    <p class="sito-date">2018</p>
                                </div>
                                <p class="sito-url">www.torneosportilia.it</p>
                                
                            </div>
                        </div>
                        <div class="box-sito">
                            <img src="../src/portfolio/jetprogram.jpg" alt="" class="img-responsive">
                            <div class="sito-description">
                                <div>
                                    <p class="sito-titolo">Jet Program</p>
                                    <p class="sito-date">2016 - 2017</p>
                                </div>
                                <p class="sito-url">www.jetprogram.net</p>
                                
                            </div>
                        </div>
                        <div class="box-sito">
                            <img src="../src/portfolio/alessandralocatelli.jpg" alt="" class="img-responsive">
                            <div class="sito-description">
                                <div>
                                    <p class="sito-titolo">Alessandra Locatelli, Mortara (Pv)</p>
                                    <p class="sito-date">2016</p>
                                </div>
                                <p class="sito-url">www.alessandralocatelli.it</p>                                
                            </div>
                        </div>
                        <div class="box-sito">
                            <img src="../src/portfolio/anemos.jpg" alt="" class="img-responsive">
                            <div class="sito-description">
                                <div>
                                    <p class="sito-titolo">Associazione Anemos, Ispra (Va)</p>
                                    <p class="sito-date">2015 - 2016</p>
                                </div>
                                <p class="sito-url">www.anemosispra.it</p>                                
                            </div>
                        </div>
                        <div class="box-sito">
                            <img src="../src/portfolio/ricinnamon.jpg" alt="" class="img-responsive">
                            <div class="sito-description">
                                <div>
                                    <p class="sito-titolo">Ricinnamon Video Productions, Melegnano (Mi)</p>
                                    <p class="sito-date">2015 </p>
                                </div>
                                <p class="sito-url">www.ricinnamon.com</p>                                
                            </div>
                        </div>
                        <div class="box-sito">
                            <img src="../src/portfolio/zavattarello.jpg" alt="" class="img-responsive">
                            <div class="sito-description">
                                <div>
                                    <p class="sito-titolo">Comune di Zavattarello (Pv)</p>
                                    <p class="sito-date">2007 - 2020</p>
                                </div>
                                <p class="sito-url">www.zavattarello.org</p>                                
                            </div>
                        </div>
                    </div>
                    
                </div>
            </section>
            
            <?php require_once '../include/shape-divider.php';?>

        </main>

        <?php require_once 'include/footer.php';?>

    </div>

    <!-- slick slider  -->
    <script type="text/javascript" src="../src/jquery-3.6.0.slim.min.js"></script>
    <script type="text/javascript" src="../src/slick/slick.min.js"></script>
    <script>
        $('.slider-siti').slick({
            rows: 1,
            infinite: true,
            autoplay: false,
            arrows: true,
            dots: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            swipe: true,
            swipeToSlide: true,
            pauseOnHover: true,
            lazyLoad: 'ondemand'
        });
    </script>

    <!-- <?php require_once 'include/footer.php';?> -->

</body>
</html>