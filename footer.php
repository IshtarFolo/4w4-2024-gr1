<!-- Template du footer -->
<!-- Ce gabarit est appelé à la fin de chacun des modèles de thèmes -->

<div id="footer" class="global bck-primaire-200">
    <footer>
        <div class="entete-footer">
            <img class="logo-footer" src="http://localhost:8085/4w4-2024-gr1/wp-content/uploads/2024/04/voyage4.png" alt="">
            <h2>Nous Joindre</h2>
        </div>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde, aperiam dolorem est quam repellendus tenetur sit ipsum natus voluptas fugit, dignissimos dolorum corrupti pariatur dolor! Repellendus accusantium voluptatem eos rerum.
            Cum perspiciatis expedita adipisci voluptates harum vitae, corporis placeat soluta aliquid in velit nam animi repellat molestiae. Laboriosam sit fugiat doloremque fuga expedita enim aperiam dolorem, explicabo error odio iure!
            Distinctio odit quibusdam vel voluptatem quasi architecto placeat veniam facilis vitae, neque expedita sequi natus omnis alias ipsa labore deserunt. Suscipit qui tenetur a tempora itaque incidunt ea nesciunt velit?</p>
            <?php wp_nav_menu(array("theme_location" => "bas")); ?>
            <a href="#" class="bouton-retour bck-primaire-300 clr-primaire-100">&#8593</a>

        <p>par Xavier Arbour</p>
        <a class="adresse_Github" href="https://github.com/IshtarFolo/4w4-carrousel/tree/tp2">Github</a>
    </footer>
</div>
<!-- FIN FOOTER -->

<!-- Ajout des wp_enqueue_scripts/style -->
<?php wp_footer(); ?>
</body>
</html>