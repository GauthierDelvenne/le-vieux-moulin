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
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <title><?= wp_title('·', false, 'right') . get_bloginfo('name') ?></title>
    <link rel="stylesheet" type="text/css" href="<?= vieuxmoulin_asset('css'); ?>">
<!--    <link rel="icon"-->
<!--          type="image/png"-->
<!--          sizes="32x32"-->
<!--          href="/wp-content/themes/vieuxmoulin/resources/img/...">-->
    <script src="<?= vieuxmoulin_asset('js') ?>" defer></script>

    <?php wp_head(); ?>

</head>
<body>
<header class="header">
    <h1 aria-level="1" class="hidden"><?= get_bloginfo('name') ?></h1>
</header>
<main>