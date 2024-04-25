    <!-- Importation du header.php -->
    <?php get_header(); ?>

    <!-- Début du site sous le menu principal -->
    <section class="entete__header">
        <h1 class="clr-secondaire-100">Horizon Voyage</h1>
        <button class="bouton__header bck-secondaire-300 clr-secondaire-100"></button>
    </section>
    <!-- Vague ici! -->
    <?php get_template_part('gabarits/vagues'); ?>
    <!-- Fin de la vague -->
    </div>
    <!-- FIN HEADER -->

    <div id="acceuil" class="global bck-primaire-200">
        <section>
            <div class="destination">

                <!-- Boucle php pour afficher articles dans la table posts à partir de la base de données -->
                <!-- single -->
                <?php if (have_posts()) : the_post(); ?>
                    <div class="carte bck-primaire-100">
                        <?php the_post_thumbnail("full"); ?> 
                        <h2><?php the_title(); ?></h2>
                        <p><?php the_content(); ?></p>
                        <!-- Lien pour revenir au menu principal -->
                    </div>
                <?php endif; ?>
            </div>
            <!-- Fin de la boucle php -->
        </section>
    </div>
    <!-- Importation du footer.php -->
    <?php get_footer(); ?>