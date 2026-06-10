

<?php
get_header();
?>

    <main id="primary" class="site-main">
        <section class="banner">
            <video autoplay muted loop poster="<?php echo get_template_directory_uri() . '/assets/images/banner.png'; ?> ">
                <source
                src="<?php echo get_stylesheet_directory_uri() . '/assets/video/Studio-koukaki.mp4'; ?>"
                type="video/mp4">
            </video>
            <div id="logo-parallaxe" data-100-bottom="@class:logo-parallaxe is-visible" data-start="@class:logo-parallaxe" class="logo-parallaxe"></div>
        </section>
        <section id="story" class="story animate-on-scroll">
                <h2><span class="animate-on-scroll">L'histoire</span></h2>
            <article id="" class="story__article">
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>

            <?php get_template_part( 'template-parts/characters', 'none' );?>
            <article id="place">
                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/big_cloud.png'; ?>" data-bottom="transform:translateX(900px)" data-top="transform:translateX(600px)">
                <img class="petit-nuage" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/little_cloud.png'; ?>" data-bottom="transform:translateX(700px)" data-top="transform:translateX(400px)">
                <div>
                    <h3>Le Lieu</h3>
                    <p><?php echo get_theme_mod('place'); ?></p>
                </div>
            </article>
        </section>

        <section id="studio" class="studio animate-on-scroll">
            <h2><span class="animate-on-scroll">Studio Koukaki</span></h2>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
        </section>
		
		<?php get_template_part( 'template-parts/oscars', 'none' );?>
	
    </main><!-- #main -->

<?php
get_footer();