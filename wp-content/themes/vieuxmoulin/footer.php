</main>
<footer class="footer">
    <div class="footer__logo">
        <a href="#">Retour en haut</a>
    <svg class="logo" width="86" height="86" viewBox="0 0 86 86">
        <use xlink:href="#logo"></use>
    </svg>
    </div>
    <nav class="footer__nav" aria-label="Navigation secondaire">
        <h2 aria-level="2" class="footer_nav_title">Navigation</h2>
        <ul class="footer__nav__container">
            <?php foreach (dw_get_navigation_links('footer') as $link): ?>
                <li class="nav__item">
                    <a href="<?= $link->href; ?>" class="nav__link"><?= $link->label; ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>
    <section class="footer__contact">
    <h2 aria-level="2" class="footer__contact__title">Contact</h2>
        <ul class="footer__contact__container">
            <li class="contact_item"><a href="mailto:srglevieuxmoulin@levm.be">srglevieuxmoulin@levm.be</a></li>
            <li class="contact_item"><a href="tel:063601150">063/60.11.50</a></li>
            <li class="contact_item"><a href="https://www.facebook.com/profile.php?id=61551842080809">Facebook</a></li>
        </ul>
    </section>
    <section class="footer__info">
        <h2 aria-level="2" class="footer__info__title">Information</h2>
        <ul class="footer__info__container">
            <li class="info_item">Rue des Vennes 1 Strainchamps</li>
            <li class="info_item">6637 Fauvillers</li>
            <li class="info_item">BE93 7965 5262 8667</li>

        </ul>
    </section>
    <?php wp_footer(); ?>
</footer>
</body>
</html>