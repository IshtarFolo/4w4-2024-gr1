<!-- Importation du header.php -->
<?php get_header(); ?>

<!-- Début du site sous le menu principal -->
<section class="entete__header">
    <h1 class="clr-primaire-400"><?php echo get_bloginfo("name"); ?></h1>
    <h2 class="clr-primaire-300"><?php echo get_bloginfo("description"); ?></h2>
    <button class="bouton__header bck-primaire-200 clr-primaire-400">Acheter un billet</button>
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
            <?php if (have_posts()) :
                while (have_posts()) : the_post(); ?>
                    <div class="carte bck-primaire-100">
                        <h3><?php the_title(); ?></h3>
                        <p><?php echo wp_trim_words(get_the_content(), 10); ?></p>
                        <?php the_category(); ?>
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
        <h2 class="clr-primaire-100">Évènements</h2>
        <blockquote class="bck-primaire-200 clr-primaire-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum aut repellat possimus molestias, est harum ducimus velit fugit a tenetur architecto inventore sapiente cupiditate soluta totam nam deleniti minus suscipit?</blockquote>
    </section>
</div>

<div id="galerie" class="global bck-primaire-100">
    <section>
        <h2>Catégories</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo qui eligendi magnam impedit. Odit, reiciendis fugiat. Deleniti, corrupti facere veniam nihil, atque voluptatum voluptate ipsam labore repudiandae rerum pariatur consequuntur?</p>
        
        <!-- Les catégories -->
        <div class="categories">
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
                            $first_10_words = array_slice($description_words, 0, 10);
                            echo implode(" ", $first_10_words) . "...";
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