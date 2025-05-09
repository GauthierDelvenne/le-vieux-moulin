</main>
<footer class="footer">
    <nav class="footer__nav" aria-label="Navigation secondaire">
        <h2 aria-level="2" class="footer_nav_title">Navigation secondaire</h2>
        <ul class="footer__nav__container">
            <?php foreach (dw_get_navigation_links('footer') as $link): ?>
                <li class="nav__item">
                    <a href="<?= $link->href; ?>" class="nav__link"><?= $link->label; ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>
    <?php wp_footer(); ?>
</footer>
</body>
</html>