<?php
function ajouter_schema_vieuxmoulin(): void
{
    if (is_front_page() || is_home()) {
        ?>
        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "NGO",
                "name": "SRG Le Vieux Moulin",
                "url": "https://www.levm.be",
"logo": "<?php echo get_template_directory_uri(); ?>/resources/img/favicon/favicon-96x96.png",
                "description": "C'est un centre qui accueille et s'occupe de jeunes entre 0 et 18 ans retirés de leur famille par la justice.",
                "address": {
                    "@type": "PostalAddress",
                    "streetAddress": "Rue des Vennes 1 Strainchamps",
                    "addressLocality": "Fauvillers",
                    "postalCode": "6637",
                    "addressCountry": "BE"
                },
                "contactPoint": {
                    "@type": "ContactPoint",
                    "telephone": "+32-63-60-11-50",
                    "contactType": "service social",
                    "availableLanguage": ["fr"]
                },
                "email": "mailto:srglevieuxmoulin@levm.be",
                "sameAs": [
                    "https://www.facebook.com/profile.php?id=61551842080809"
                ]
            }
        </script>
        <?php
    }
}

add_action('wp_head', 'ajouter_schema_vieuxmoulin');
?>
