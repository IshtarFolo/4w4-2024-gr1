<!-- Importation du header.php -->
<?php get_header(); ?>

<!-- Début du site sous le menu principal -->
<section class="entete__header">
    <h1 class="clr-secondaire-100">Horizon Voyage</h1>
    <button class="bouton__header bck-secondaire-300 clr-primaire-400"></button>
</section>
<!-- Vague ici! -->
<?php get_template_part('gabarits/vagues'); ?>
<!-- Fin de la vague -->
</div>
<!-- FIN HEADER -->

<div id="acceuil" class="global bck-primaire-200">
    <section>
        <h2>Résultats de la recherche</h2>
        <div class="destination">
            <!-- Boucle php pour afficher articles dans la table posts à partir de la base de données -->
            <!-- index -->
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
            ?>
                    <div class="carte bck-primaire-100">
                        <h3><?php the_title(); ?></h3>
                        <p><?php echo wp_trim_words(the_content(), 50); ?></p>
                        <a href="<?php echo get_permalink(); ?>">Suite</a>
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