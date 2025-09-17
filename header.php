<?php
// Détermine la page active (utilisé pour surligner le lien actif)
$currentPage = basename($_SERVER['PHP_SELF']);
?>



<!-- Header -->
<header class="site-header">
    <!-- Bande 1 : Avatar + Nom -->
    <div class="header-top">
        <img src="photo.png" alt="Photo" class="photo">
        <span class="site-name">Héloïse Gachet</span>
    </div>

    <!-- Bande 2 : Navigation -->
    <nav class="site-nav">
        <a href="index.php" class="<?= $currentPage == 'index.php' ? 'active' : '' ?>">About</a>
        <span class="separator">|</span>
        <a href="CV.php" class="<?= $currentPage == 'CV.php' ? 'active' : '' ?>">CV</a>
        <span class="separator">|</span>
        <a href="presentations.php" class="<?= $currentPage == 'presentations.php' ? 'active' : '' ?>">Presentations</a>
        <span class="separator">|</span>
        <a href="publications.php" class="<?= $currentPage == 'publications.php' ? 'active' : '' ?>">Publications</a>
        <span class="separator">|</span>
        <a href="teaching.php" class="<?= $currentPage == 'teaching.php' ? 'active' : '' ?>">Teaching</a>
    </nav>
</header>