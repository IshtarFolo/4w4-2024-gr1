<!-- Importation du header.php -->
<?php get_header(); ?>

<!-- Début du site sous le menu principal -->
<section class="entete__header">
    <h1 class="clr-primaire-100">Horizon Voyage</h1>
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
        <div class="destination">
            <!-- Boucle php pour afficher articles dans la table posts à partir de la base de données -->
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
                    $titre = get_the_title();

            ?>
                    <div class="carte bck-primaire-100">
                        <h3><?php echo $titre; ?></h3>
                        <p><?php the_content(); ?></p>
                    </div>
                <?php endwhile; ?>
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

<!-- FOOTER -->
<div id="footer" class="global bck-primaire-200">
    <footer>
        <h2>Footer</h2>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde, aperiam dolorem est quam repellendus tenetur sit ipsum natus voluptas fugit, dignissimos dolorum corrupti pariatur dolor! Repellendus accusantium voluptatem eos rerum.
            Cum perspiciatis expedita adipisci voluptates harum vitae, corporis placeat soluta aliquid in velit nam animi repellat molestiae. Laboriosam sit fugiat doloremque fuga expedita enim aperiam dolorem, explicabo error odio iure!
            Distinctio odit quibusdam vel voluptatem quasi architecto placeat veniam facilis vitae, neque expedita sequi natus omnis alias ipsa labore deserunt. Suscipit qui tenetur a tempora itaque incidunt ea nesciunt velit?</p>
        <a href="#">&#8593</a>

        <p>par Xavier Arbour</p>
    </footer>
</div>
<!-- FIN FOOTER -->
</body>

</html>