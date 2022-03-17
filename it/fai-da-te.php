<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Fai-da-te, i progetti di famiglia #LRCrafts | Rici86: Coder, Crafter, Creative </title>

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
                    <h1 class="card-title">Passione fai-da-te</h1>
                    <p>
                        Condivido da sempre la passione per il fai-da-te con la mia famiglia, mio marito in particolare. É capitato spesso di trovarci a parlare con gli amici o i colleghi di questo o quel progetto che abbiamo realizzato, e di non avere mai a disposizione una foto da mostrare. Molto è condiviso sul mio profilo Instagram, ma non è certo esaustivo. 
                    </p>
                    <p>
                        Da questa prima esigenza è nata l'idea di realizzare un sito web dedicato alla nostra passione del tempo libero. 
                        <br>Io, poi, che ho anche <a href="scrittura.php">la passione della scrittura</a>, ho trovato un luogo in cui riversare i miei testi, avendo a disposizione una quantità pressoché infinita di argomenti da trattare.
                    </p>
                    <p>
                        Alle news che raccontano le nostre opere in modo più approfondito di quanto i social lo consentano, si affianca una galleria di progetti finiti, da poter navigare in ordine cronologico, per categoria o esplorare nel dettaglio di ogni singolo pezzo. 
                    </p>
                    <p>
                        L'obiettivo è raccontare il nostro percorso artigianale: le nuove idee, le sfide, gli errori, i consigli, i successi. Proponiamo anche tutorial delle nostre tecniche più rodate. 
                    </p>
                    <p>
                        Non mancano i social media, in cui condividere i nostri contenuti e dove poter raccontare i dietro-le-quinte in maniera più immediata. Ci trovate quindi con le nostre creazioni anche su Pinterest, Instagram, Facebook e, ultimo in ordine cronologico ma non meno importante, YouTube.
                    </p>

                    <div class="horizontal-center">
                        <a href="https://www.lrcrafts.it" class="button button-main">#LRCrafts.it</a>
                    </div>
                </div>
                <div class="">
                    <img src="../src/img/foto/2019-crafts.jpg" alt="" class="img-responsive photo">
                </div>
            </section>
            
            <!-- <section class="main-row main-row-invert">
                <div class="images">
                    <?php require_once '../include/slider-crafts.php';?>                    
                </div>
                <div class="card">
                    <h2 class="card-title">#LRCrafts: "Se puoi pensarlo, puoi farlo"</h2>
                    
                    <p>
                        Il nostro motto è 
                    </p>
                    <blockquote>"Se puoi pensarlo, puoi farlo"</blockquote>
                </div>

            </section> -->
            
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