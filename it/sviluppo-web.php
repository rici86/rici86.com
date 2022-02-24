<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Il mio portfolio web | Coder, Crafter, Creative </title>

    <!-- Meta tags  -->
    <meta name="description" content="Front-end developer per lavoro, crafter e Irish dance nerd per passione" />
	
    <meta property="article:author" content="https://www.facebook.com/rici86" />
    <meta property="og:title" content="Rici86 - Coder, Crafter, Creative" />
    <meta property="og:description" content="Front-end developer per lavoro, crafter e Irish dance nerd per passione" />
    <meta property="og:site_name" content="Rici86" />
    <meta property="og:image" content="../src/img/spirit-of-the-forest.jpg" />
	
	<link rel="shortcut icon" href="../src/img/logofavicon.png" type="imag/png" />

    <!-- Css  -->
    <link href="../src/css/main.css" rel="stylesheet">
    <link href="../src/fontawesome/css/all.css" rel="stylesheet">

    <!-- slick slider  -->
    <link rel="stylesheet" type="text/css" href="../src/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="../src/slick/slick-theme.css"/>

</head>

<body>
    <div id="main-container">
        <?php require_once 'include/nav.php';?>

        <a href="../en/about.php" title="English" class="lang-switcher">
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
                        <br>Quello del Comune di Zavattarello, di cui mi sono occupata per più di dieci anni e del quale ho realizzato due restyling. 
                        <br>Il sito dell'Associazione Culturale Anemos, il mio primo sito responsive. 
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
                            <img src="../src/portfolio/alessandralocatelli.jpg" alt="" class="img-responsive">
                            <div class="sito-description">
                                <div>
                                    <p class="sito-titolo">Alessandra Locatelli</p>
                                    <p class="sito-date">2016</p>
                                </div>
                                <p class="sito-url">www.alessandralocatelli.it</p>
                                
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
            arrows: false,
            dots: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            swipe: true,
            swipeToSlide: true,
            pauseOnHover: true
        });
    </script>

    <!-- <?php require_once 'include/end.php';?> -->

</body>
</html>