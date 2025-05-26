<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description"
          content="Site de la SRG du vieux moulin,il met en avant la vie au sein du foyer">
    <meta name="author" content="Delvenne Gauthier">
    <meta name="keywords" content="SRG, Vieux moulin, enfants, Service résidentiel généraux, foyer, don, bénévole">
    <meta name="robots" content="noindex">
    <title><?= wp_title('·', false, 'right') . get_bloginfo('name') ?></title>
    <link rel="stylesheet" type="text/css" href="<?= vieuxmoulin_asset('css'); ?>">
    <link rel="icon" type="image/png" href="/wp-content/themes/vieuxmoulin/resources/img/favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="/wp-content/themes/vieuxmoulin/resources/img/favicon/favicon.svg" />
    <link rel="shortcut icon" href="/wp-content/themes/vieuxmoulin/resources/img/favicon/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="/wp-content/themes/vieuxmoulin/resources/img/favicon/apple-touch-icon.png" />
    <meta name="apple-mobile-web-app-title" content="VM" />
    <link rel="manifest" href="/wp-content/themes/vieuxmoulin/resources/img/favicon/site.webmanifest" />
    <script src="<?= vieuxmoulin_asset('js') ?>" defer></script>
    <?php wp_head(); ?>
</head>
<body>
<?php
require __DIR__ . '/resources/svg/sprite.php'
?>
<header class="header">
    <h1 aria-level="1" class="hidden"><?= get_bloginfo('name') ?></h1>
    <div class="header__logo">
        <a href="<?= home_url(); ?>">Vers la page d’accueil</a>
    <svg class="logo" width="86" height="86" viewBox="0 0 86 86">
        <use xlink:href="#logo"></use>
    </svg>
    </div>
    <nav class="header__nav" aria-label="Menu principal">
        <input type="checkbox" id="burger" role="button" aria-label="Ouvrir le menu" aria-expanded="false" aria-controls="menu">
        <ul id="menu" class="header__nav__container">
            <?php foreach (dw_get_navigation_links('header') as $link): ?>
                <li class="nav__item">
                    <a href="<?= $link->href; ?>" class="nav__link"><?= $link->label; ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>
</header>

<main>