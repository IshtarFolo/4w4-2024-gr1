<!-- Template du footer -->
<!-- Ce gabarit est appelé à la fin de chacun des modèles de thèmes -->
<div id="footer" class="global bck-primaire-400">
<?php get_template_part('gabarits/vagues'); ?>

    <footer>
        <div class="entete-footer">
            <img class="logo-footer" src="http://localhost:8085/4w4-2024-gr1/wp-content/uploads/2024/04/voyage4.png" alt="">
            <h2>Nous Joindre</h2>
        </div>
        <div class="sociaux">
            <img class="logo-sociaux" src="http://localhost:8085/4w4-2024-gr1/wp-content/uploads/2024/05/instagram.png" alt="">
            <img class="logo-sociaux" src="http://localhost:8085/4w4-2024-gr1/wp-content/uploads/2024/05/twitter.png" alt="">
            <img class="logo-sociaux" src="http://localhost:8085/4w4-2024-gr1/wp-content/uploads/2024/05/facebook.png" alt="">
            <img class="logo-sociaux" src="http://localhost:8085/4w4-2024-gr1/wp-content/uploads/2024/05/linkedin.png" alt="">
        </div>
            <?php wp_nav_menu(array("theme_location" => "bas")); ?>
            <a href="#" class="bouton-retour bck-primaire-300 clr-primaire-100">&#8593</a>
        <div class="recherche">
            <?php get_search_form(); ?> 
        </div>

        <a class="adresse_Github" href="https://github.com/IshtarFolo/4w4-carrousel/tree/tp2">Github</a>
        <p>par Xavier Arbour</p>
    </footer>
</div>
<!-- FIN FOOTER -->

<!-- Ajout des wp_enqueue_scripts/style -->
<?php wp_footer(); ?>
</body>
</html>