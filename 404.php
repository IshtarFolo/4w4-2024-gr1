<!-- Importation du header.php -->
<?php get_header(); ?>
<?php get_search_form(); ?> 
<!-- Fin header -->

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
<!-- Fin contenu principal -->

<!-- FOOTER -->
<div id="footer_404" class="global bck-primaire-100">
    <footer>
        <?php get_search_form(); ?> 
        <?php wp_nav_menu(array("theme_location" => "bas")); ?>
        <a href="#" class="bouton-retour bck-primaire-300 clr-primaire-100">&#8593</a>

        <p>par Xavier Arbour</p>
    </footer>
</div>
<!-- FIN FOOTER -->
</body>

</html>