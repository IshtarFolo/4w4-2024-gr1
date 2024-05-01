<!-- Importation du header.php -->
<!-- INDEX -->
<?php get_header(); ?>

<!-- Début du site sous le menu principal -->
<section class="entete__header">
    <h1 class="clr-secondaire-100"><?php echo get_bloginfo("name"); ?></h1>
    <h2 class="clr-secondaire-100"><?php echo get_bloginfo("description"); ?></h2>
    <?php get_search_form(); ?> 
    <button class="bouton__header bck-secondaire-300 clr-primaire-400"></button>
</section>
<!-- Vague ici! -->
<?php get_template_part('gabarits/vagues'); ?>
<!-- Fin de la vague -->
</div>
<!-- FIN HEADER -->

<div id="acceuil" class="global bck-primaire-200">
    <section>
        <h2><?php single_cat_title(); ?> </h2>
        <div class="destination">
            <!-- Boucle php pour afficher articles dans la table posts à partir de la base de données -->
            <!-- index -->
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
                    $titre = get_the_title();
                    $contenu = get_the_content();
                    $contenu_trimmer = wp_trim_words($contenu, 30, '...');
            ?>
                    <div class="carte bck-primaire-100">
                        <h3><?php echo $titre; ?></h3>
                        <p><?php echo $contenu_trimmer; ?></p>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <!-- Fin de la boucle php -->

    </section>
</div>

<!-- Importation du footer.php -->
<?php get_footer(); ?>
</body>

</html>