<?php
/**
 * Template name: Inscription
 *
 */
?>
<?php get_header(); ?>

<!-- Début du site sous le menu principal -->
<section class="entete__header">
    <h1 class="clr-secondaire-100"><?php echo get_bloginfo("name"); ?></h1>
    <h2 class="clr-secondaire-100"><?php echo get_bloginfo("description"); ?></h2>
    <?php get_search_form(); ?> 
    <a class='bouton__header bck-secondaire-300 clr-primaire-400' href="http://localhost:8085/4w4-2024-gr1/inscription/">Inscriptions</a>
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
        <?php the_content(); ?>
    <?php endif; ?>
</section>

    <!-- Vague ici!-->
    <?php get_template_part('gabarits/vagues'); ?>
    <!-- Fin de la vague -->
</div>

<!-- Importation du footer.php -->
<?php get_footer(); ?>
