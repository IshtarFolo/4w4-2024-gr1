<!-- Importation du header.php -->
<?php get_header(); ?>
<!-- Fin header -->

<!-- Contenu principal -->
<div id="erreur_404" class="global bck-primaire-200">
    <section>
        <h2>Erreur 404:</h2>
        <p>La page que vous cherchez n'existe pas. Veuillez vérifier l'URL ou retourner à la page d'accueil.</p>
        <h4><?php get_bloginfo("name"); ?></h4>
        <h5><?php get_bloginfo("url");?></h5>

        <a href="<?php echo get_bloginfo("url");?>"><?php echo get_bloginfo("name"); ?></a>
    </section>
</div>
<!-- Fin contenu principal -->

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