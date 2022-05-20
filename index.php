<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Rici86 | Coder, Crafter, Creative e anche un po' Nerd </title>

    <!-- Meta tags  -->
    <meta name="description" content="Front-end developer per lavoro, crafter e Irish dance nerd per passione" />
	
    <meta property="article:author" content="https://www.facebook.com/rici86" />
    <meta property="og:title" content="Rici86 - Coder, Crafter, Creative e anche un po' Nerd" />
    <meta property="og:description" content="Front-end developer per lavoro, crafter e Irish dance nerd per passione" />
    <meta property="og:site_name" content="Rici86" />
    <meta property="og:image" content="src/img/rici86-sara-rossi.jpg" />
	
    <link rel="canonical" href="https://www.rici86.com" />

	<link rel="shortcut icon" href="src/img/logofavicon.png" type="imag/png" />

    <!-- Css  -->
    <link href="src/css/main.css?v=1.11" rel="stylesheet">
    <link href="src/fontawesome/css/all.css" rel="stylesheet">

    <?php require_once 'include/analytics.php';?>

</head>
<body>
    <header class="home-header">
        <a href="index-eng.php" title="English">
            <img src="src/img/eng.png" alt="English" class="lang">
        </a>
    </header>
    <section class="home-container" id="main-content" aria-label="Rici86">
        <div class="home-left">            
            <img src="src/img/logo-esteso-bianco.png" alt="Rici86" class="logo">

            <p>Coder, Crafter, Creative e anche un po' Nerd</p>

            <?php require_once 'include/code-bio.php';?>

            <?php require_once 'include/social-icons.php';?>
            
            <div class="menu">
                <a href="it/su-di-me.php" class="button button-main">Su di me</a>
                <a href="it/sviluppo-web.php" class="button button-main">Sviluppo web</a>
                <a href="it/eventi.php" class="button button-main">Eventi</a>
                <a href="it/danza-irlandese.php" class="button button-main">Danza irlandese</a>
                <a href="it/scrittura.php" class="button button-main">Scrittura</a>
                <a href="it/fai-da-te.php" class="button button-main">Fai-da-te</a>
            </div>
        </div>
        <figure class="home-right">
            <img src="src/img/rici86-sara-rossi.jpg" alt="" class="img-responsive photo">
        </figure>  
    </section>
    
</body>
</html>