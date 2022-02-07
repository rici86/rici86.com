<?php
    $activePage = basename($_SERVER['PHP_SELF'], ".php");
?>
<nav>
    <img src="../src/img/logobianco.png" alt="Rici86" class="logo">
    <div class="navbar">
        <a href="su-di-me.php" class="button button-main <?= (in_array($activePage, ['su-di-me'])) ? 'active':''; ?>">Su di me</a>
        <a href="sviluppo-web.php" class="button button-main">Sviluppo web</a>
        <a href="eventi.php" class="button button-main">Eventi</a>
        <a href="scrittura.php" class="button button-main">Scrittura</a>
        <a href="fai-da-te.php" class="button button-main">Fai-da-te</a>
    </div>
    <a href="index-eng.html" title="English" class="">
        <img src="../src/img/eng.png" alt="English" class="lang">
    </a>
</nav>