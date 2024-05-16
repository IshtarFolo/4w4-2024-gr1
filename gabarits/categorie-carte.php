<?php 
    /**
     * Template part pour creer une carte
    */
?>
            <div class="carte bck-primaire-100">
                <h3><?php the_title(); ?></h3>
                <p><?php echo wp_trim_words(get_the_content(), 10); ?></p>
                <?php the_category(); ?>
                <?php the_post_thumbnail("full"); ?> 
                <!-- Ajoute un lien vers l'article selctionné -->
                <a href="<?php the_permalink(); ?>">Suite</a>
            </div>