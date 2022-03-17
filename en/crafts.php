<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>#LRCrafts, our family crafts | Rici86: Coder, Crafter, Creative </title>

    <!-- Meta tags  -->
    <meta name="description" content="Front-end developer as a living, crafter and Irish dance nerd for passion" />
	
    <meta property="article:author" content="https://www.facebook.com/rici86" />
    <meta property="og:title" content="Rici86 - Coder, Crafter, Creative" />
    <meta property="og:description" content="Front-end developer as a living, crafter and Irish dance nerd for passion" />
    <meta property="og:site_name" content="Rici86" />
    <meta property="og:image" content="../src/img/spirit-of-the-forest.jpg" />
	
	<link rel="shortcut icon" href="../src/img/logofavicon.png" type="imag/png" />

    <!-- slick slider  -->
    <!-- <link rel="stylesheet" type="text/css" href="../src/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="../src/slick/slick-theme.css"/> -->

    <!-- Css  -->
    <link href="../src/css/main.css?v=1.11" rel="stylesheet">
    <link href="../src/fontawesome/css/all.css" rel="stylesheet">
    
    <?php require_once '../include/analytics.php';?>
</head>

<body>
    <div id="main-container">
        <?php require_once 'include/nav.php';?>

        <a href="../it/fai-da-te.php" title="Italiano" class="lang-switcher">
            <img src="../src/img/ita.png" alt="Italiano" class="lang">
        </a>

        <main class="with-shape-divider">
            <section class="main-row">
                <div class="card">
                    <h1 class="card-title">DIY passion</h1>
                    <p>
                        I've always shared my do-it-yourself passion with my family, my husband in particular. More than once we happened to be speaking with friends or colleagues about one of the crafts we made, and most of the time we didn't have a photo to show. Several things are on my Instagram profile, but that's far from complete.
                    </p>
                    <p>
                        From this first need, I had the idea of developing a website about our free-time passion. 
                        <br>Well, since I also have a pasison for <a href="writing.php">writing</a>, I was happy to have a place for my texts, with plenty of topics to cover.
                    </p>
                    <p>
                        We feature news that dive deep into the beghind-the-scenes of our crafts, more than what social media allow. There's a gallery of our works to browse by category or, by time, with details about each single piece. 
                    </p>
                    <p>
                        Our goal is to tell our crafters' path: new ideas, challenges, errors, tips, successes. There're also tutorials about the techniques we master deeply.
                    </p>
                    <p>
                        We have also a few social media to share our content and the making-of live. You can find #LRCrafts on Pinterest, Instagram, Facebook and, lastly created but not less important, YouTube.
                    </p>

                    <div class="horizontal-center">
                        <a href="https://www.lrcrafts.it" class="button button-main">#LRCrafts.it</a>
                    </div>
                </div>
                <div class="">
                    <img src="../src/img/foto/2019-crafts.jpg" alt="" class="img-responsive photo">
                </div>
            </section>

            <?php require_once '../include/shape-divider.php';?>

        </main>
        
       <!-- slick slider  -->
        <!-- <script type="text/javascript" src="../src/jquery-3.6.0.slim.min.js"></script>
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
        </script> -->

        <?php require_once 'include/footer.php';?>
        <?php require_once '../include/torna-su.php';?>

    </div>

</body>
</html>