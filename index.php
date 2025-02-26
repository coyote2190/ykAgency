<?php get_header(); ?>

<main>
    <section class="welcome">
        <div class="container">
            <h1>Avec YKLIC, j'accompagne votre entreprise dans son développement grâce à : un site web sur mesure, une identité visuelle forte, un référencement optimisé et des outils de gestion innovants.</h1>
        </div>
    </section>

    <section class="me">
        <div class="container">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/me-yklic.png" alt="Yklic" />
            <div>
                <h2>Moi c'est Yannick Khalfouni. Je suis basé sur la métrople lilloise et je vous propose de vous accompagner sur vos projets web, du front au back pour un résultat optimal !</h2>
                <div class="link">
                    <a href="mailto:yklicfr@gmail.com">Contactez-moi !</a>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow.png" alt="arrow link" />    
                </div>
            </div>
    </section>

    <section class="clients">
        <div class="container">
            <h2>Ils me font confiance</h2>
            <div>
                <a href="https://aqua2000.fr/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/aqua2000_logo-noir.png" alt="logo Aqua 2000" /></a>
                <a href="https://talent-france.fr/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/talent-france-noir.png" alt="logo Talent France" /></a>
                <a href="https://www.bold.family/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/bold-noir.png" alt="logo Bold" /></a>
                <a href="https://www.ssid.fr/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/SSID_logo-noir.png" alt="logo Ssid" /></a>
            </div>
    </section>
</main>

<?php get_footer(); ?>
