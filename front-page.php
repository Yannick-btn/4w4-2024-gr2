<?php

/**
 * Modele de base pour index.php
 */
?>
<?php get_header(); ?>
<h2>Front-page.php</h2>
<div id="entete" class="global">
    <div class="entete__header">
        <h1 class="bgc-text"><?php echo get_bloginfo('name'); ?></h1>
        <h2 class="bgc-text"><?php echo get_bloginfo('description'); ?></h2>
        <h3 class="bgc-text">TIM - Collège de Maisonneuve</h3>
        <button class="entete__button">Événements</button>
    </div>
    <?php get_template_part("gabarits/vague"); ?>
</div>
<div id="accueil" class="global">
    <?php  ?>
    <section class="accueil__section">
        <h2>Accueil</h2>
        <div class="section__cours">

            <?php if (have_posts()) :
                while (have_posts()) : the_post();?>
                    <div class="carte">
                        <h4> <?php the_title() ?> </h4>
                        <p> <?php echo wp_trim_words(get_the_content(), 10); ?> </p>
                        <p> <a href="<?php echo get_permalink(); ?>">La suite</a> </p>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>

        </div>
    </section>

</div>
<div id="galerie" class="global diagonal">
    <section class="galerie__section">
        <h2>Galerie (h2)</h2>
    </section>
</div>
<div id="evenement" class="global">
    <section class="evenement__section">
        <h2>Événement</h2>
        <blockquote class=" general__quote quote_einstein">
            “La possession de merveilleux moyens de production n’a pas apporté la liberté, mais le souci et la famine.”
            - Albert Einstein
        </blockquote>
        <button class="entete__button">Appuyer pour des chocolats</button>
    </section>
    <?php get_template_part("gabarits/vague"); ?>
</div>
<?php get_footer(); ?>
