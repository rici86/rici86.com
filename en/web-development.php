<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>My portfolio | Rici86: Coder, Crafter, Creative </title>

    <!-- Meta tags  -->
    <meta name="description" content="Front-end developer as a living, crafter and Irish dance nerd for passion" />
	
    <meta property="article:author" content="https://www.facebook.com/rici86" />
    <meta property="og:title" content="Rici86 - Coder, Crafter, Creative" />
    <meta property="og:description" content="Front-end developer as a living, crafter and Irish dance nerd for passion" />
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

        <a href="../it/sviluppo-web.php" title="Italiano" class="lang-switcher">
            <img src="../src/img/ita.png" alt="Italiano" class="lang">
        </a>

        <main class="with-shape-divider">
            <section class="main-row">
                <div class="card">
                    <h1 class="card-title">Web sites</h1>
                    <p>
                        I started with a small website about one of my high school passions, then I began making websites for friends. After a couple of years, companies and the like came to me for collaborations.
                    </p>
                    <p>
                        Restaurants, small companies, artists, institutions, associations, shops, sport teams... I lost count of all the projects I developed.
                    </p>
                    <p>
                        I favour working with HTML and CSS, with all related languages, but I also work with CMS when needed. Wordpress is the one I used most, but not the only one.
                    </p>
                    <p>
                        The projects I'm more proud of?
                        <br>The website of the Municipality of Zavattarello: I managed it for more than ten years, restyling it twice. It's also my best SEO strategy ever. 
                        <br>The portal for the Anemos Association was my first responsive website. 
                        <br>I have to mentions also the MI GAMES League Beach Volley website, the first Wordpress template I almost completely redesigned.
                        <br>Obviously I'm proud of the website dedicated to <a href="crafts.php">our family crafts</a>, #LRCrafts!
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

        <?php require_once 'include/footer.php';?>
        <?php require_once '../include/torna-su.php';?>

    </div>

</body>
</html>