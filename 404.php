<!-- Importation du header.php -->
<?php get_header(); ?>

    <!-- Début du site sous le menu principal -->
    <section class="entete__header">
        <h1 class="clr-secondaire-100"><?php echo get_bloginfo("name"); ?></h1>
        <h2 class="clr-secondaire-100"><?php echo get_bloginfo("description"); ?></h2>
        <?php get_search_form(); ?> 
        <button class="bouton__header bck-secondaire-300 clr-secondaire-100"></button>
    </section>
    <!-- Vague ici! -->
    <?php get_template_part('gabarits/vagues'); ?>
    <!-- Fin de la vague -->
    </div>
<!-- Fin header -->

<!-- 404 -->

<!-- Contenu principal -->
<div id="erreur_404" class="global bck-primaire-200">
    <section>
        <h2>Erreur 404:</h2>
        <p>La page que vous cherchez n'existe pas. Veuillez vérifier l'URL ou retourner à la page d'accueil.</p>
        <h4><?php get_bloginfo("name"); ?></h4>
        <h5><?php get_bloginfo("url");?></h5>

        <a href="<?php echo get_bloginfo("url");?>" class="bck-primaire-300"><?php echo get_bloginfo("name"); ?></a>
        <?php get_search_form(); ?>     
    </section>
    <div>
        <img src="http://localhost:8085/4w4-2024-gr1/wp-content/uploads/2024/04/logo404.png" alt="" class="logo_404">

        <div id="menu_404">
        <ul class="menu-items">
            <li><a href="#">Aventure</a></li>
            <li><a href="#">Populaire</a></li>
            <li><a href="#">Croisière</a></li>
            <li><a href="#">Pleine Nature</a></li>
            <li><a href="#">Zen</a></li>
            <li><a href="#">Sports</a></li>
            <li><a href="#">Repos</a></li>
            <li><a href="#">Culturel</a></li>
        </ul>
    </div>
</div>
</div>
<!-- Fin contenu principal -->

<!-- FOOTER -->
<?php get_template_part("footer"); ?> 
<!-- FIN FOOTER -->
</body>

</html>