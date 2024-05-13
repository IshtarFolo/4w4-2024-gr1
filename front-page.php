<!-- Importation du header.php -->
<!-- FRONT-PAGE -->
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
        <h2>Acceuil</h2>
        <h3>Les destinations par catégories</h3>
        <div class="destination">

            <!-- Boucle php pour afficher articles dans la table posts à partir de la base de données -->
            <!-- front -->
            <?php 
            if (have_posts()) :
                while (have_posts()) : the_post(); 
            ?>
                    <div class="carte bck-primaire-100">
                        <h3><?php the_title(); ?></h3>
                        <p><?php echo wp_trim_words(get_the_content(), 10); ?></p>
                        <?php the_category(); ?>
                        <?php the_post_thumbnail("full"); ?> 
                        <!-- Ajoute un lien vers l'article selctionné -->
                        <a href="<?php the_permalink(); ?>">Suite</a>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <!-- Fin de la boucle php -->

    </section>
</div>
<div id="evenements" class="global diagonale clr-agencement-primaire">
    <section>
        <h2 class="clr-primaire-100">Recherche par continents</h2>
        <?php echo do_shortcode('[em_destination]'); ?> 
    </section>
</div>

<div id="galerie" class="global bck-primaire-100">
    <section>
        <h2>Catégories</h2>
        <p>Ici, vous retrouverez tous les types de destinations à portée de click!</p>
        
        <!-- Les catégories -->
        <div class="categories">
            <!-- Boucoe php pour créer les catégories -->
            <?php
            $categories = get_categories();
            foreach ($categories as $category) {
            ?>
                <div class="carte bck-primaire-200">
                    <h3><?php echo $category->name; ?></h3>
                    <p><?php echo $category->count . ' destinations'; ?></p>
                    <p>
                        <?php 
                            $description_words = explode(" ", $category->description);
                            $premiers_10_mots = array_slice($description_words, 0, 10);
                            echo implode(" ", $premiers_10_mots) . "...";
                        ?> 
                    </p>
                    <a class="clr-primaire-400" href="<?php echo get_category_link($category->term_id); ?>">Voir les destinations</a>
                </div>
            <?php
            }
            ?>
        </div>
        <!-- Fin des catégories -->
    
    </section>
    <!-- Vague ici!-->
    <?php get_template_part('gabarits/vagues'); ?>
    <!-- Fin de la vague -->
</div>

<!-- Importation du footer.php -->
<?php get_footer(); ?>