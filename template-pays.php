<?php

/** 
 * Template name: Pays
 * 
 */
?>
<?php get_header(); ?>

<!-- Début du site sous le menu principal -->
<section class="entete__header">
    <h1 class="clr-secondaire-100"><?php echo get_bloginfo("name"); ?></h1>
    <h2 class="clr-secondaire-100"><?php echo get_bloginfo("description"); ?></h2>
    <?php get_search_form(); ?>
</section>
<!-- Vague ici! -->
<?php get_template_part('gabarits/vagues'); ?>
<!-- Fin de la vague -->
</div>

<div id="acceuil" class="global bck-primaire-200">
    <section class="site__main">
        <?php
            if (have_posts()) : the_post(); ?>
                <h1><?= get_the_title(); ?></h1>
                <?php echo the_content() ?> 
            <?php endif; 
        ?>
        
        <?php echo do_shortcode('[pays]'); ?>
    </section>

    <!-- Vague ici!-->
    <?php get_template_part('gabarits/vagues'); ?>
    <!-- Fin de la vague -->
</div>

<!-- Importation du footer.php -->
<?php get_footer(); ?>