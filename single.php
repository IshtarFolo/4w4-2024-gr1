    <!-- Importation du header.php -->
    <?php get_header(); ?>

    <!-- Début du site sous le menu principal -->
    <section class="entete__header">
        <h1>Horizon Voyage</h1>
        <button class="bouton__header bck-secondaire-300 clr-primaire-400"></button>
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
                <?php if (have_posts()) : the_post(); ?>
                    <div class="carte bck-primaire-100">
                        <h2><?php the_title(); ?></h2>
                        <p><?php the_content(); ?></p>
                        <!-- Lien pour revenir au menu principal -->
                    </div>
                <?php endif; ?>
            </div>
            <!-- Fin de la boucle php -->

        </section>
    </div>

    <div id="galerie" class="global bck-primaire-100">
        <section>
            <h2>Galerie</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo qui eligendi magnam impedit. Odit, reiciendis fugiat. Deleniti, corrupti facere veniam nihil, atque voluptatum voluptate ipsam labore repudiandae rerum pariatur consequuntur?</p>
            <section id="conteneur-images">
                <div class="image"></div>
                <div class="image"></div>
                <div class="image"></div>
                <div class="image"></div>
                <div class="image"></div>
                <div class="image"></div>
            </section>
            <button>voir plus</button>
        </section>
        <!-- Vague ici!-->
        <?php get_template_part('gabarits/vagues'); ?>
        <!-- Fin de la vague -->
    </div>

    <!-- Importation du footer.php -->
    <?php get_footer(); ?>