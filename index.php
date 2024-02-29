<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thème du groupe 1</title>

    <!-- Php pour refaire le lien avec stylesheets -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/normalize.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@500&display=swap" rel="stylesheet">
</head>

<body>
    <!-- HEADER -->
    <div id="entete" class="global">
        <header>
            <ul>
                <a href="#">Header</a>
                <a href="#acceuil">Acceuil</a>
                <a href="#evenements">Évènements</a>
                <a href="#galerie">Galerie</a>
                <a href="#footer">Footer</a>
            </ul>
            <h1>Thème du groupe 1 (h1)</h1>
            <button></button>
        </header>
        <!-- Vague -->
        <div class="vague">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
            </svg>
        </div>
        <!-- Fin vague -->
    </div>
    <!-- FIN HEADER -->

    <div id="acceuil" class="global">
        <section>
            <h2>Acceuil (h2)</h2>
            <h3>test h3</h3>
                <div class="cours">
                <!-- Boucle php pour afficher articles dans la table posts -->
                <?php 
                    /*if(have_posts()){
                        while(have_posts()){
                            the_post();
                            the_title('<h3>', '</h3>');
                            // Trim words pour limiter a 30 mots
                            echo wp_trim_words(get_the_content(), 30); //Ou The_content();
                        }
                    }*/
                    /* 
                        Norme php avec Wordpress 
                    */
                    if(have_posts()) :
                        while(have_posts()) : the_post(); 
                        $titre = get_the_title();
                        $sigle = substr($titre,0,7);
                        $titreCours = substr($titre,7,-6);

                        $debut = strpos($titre, '(');
                        $fin = strpos($titre, ')');
                        $longueur = $fin - $debut -1;

                        $duree = substr($titre, $debut + 1, $longueur);
                        ?>
                            <div class="carte">
                                <p><?php echo $sigle; ?></p>
                                <h3><?php echo $titreCours; ?></h3>  
                                <p><?php echo $duree ?></p>
                                <p><?php echo wp_trim_words(get_the_content(), 30);?></p>
                            </div>
                        <?php endwhile; ?>            
                        <?php endif; ?>
                    </div>
                <!-- Fin de la boucle php -->
                
        </section>
    </div>
    <div id="evenements" class="global diagonale">
        <section>
            <h2>Évènements (h2)</h2>
            <h4>test h4</h4>
            <blockquote>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum aut repellat possimus molestias, est harum ducimus velit fugit a tenetur architecto inventore sapiente cupiditate soluta totam nam deleniti minus suscipit?</blockquote>
        </section>
    </div>

    <div id="galerie" class="global">
        <section>
            <h2>Galerie (h2)</h2>
            <h5>test h5</h5>
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
        <!-- Vague -->
        <div class="vague">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
            </svg>
        </div>
        <!-- Fin vague -->
    </div>

    <!-- FOOTER -->
    <div id="footer" class="global">
        <footer>
            <h2>Footer (h2)</h2>
            <h6>test h6</h6>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde, aperiam dolorem est quam repellendus tenetur sit ipsum natus voluptas fugit, dignissimos dolorum corrupti pariatur dolor! Repellendus accusantium voluptatem eos rerum.
            Cum perspiciatis expedita adipisci voluptates harum vitae, corporis placeat soluta aliquid in velit nam animi repellat molestiae. Laboriosam sit fugiat doloremque fuga expedita enim aperiam dolorem, explicabo error odio iure!
            Distinctio odit quibusdam vel voluptatem quasi architecto placeat veniam facilis vitae, neque expedita sequi natus omnis alias ipsa labore deserunt. Suscipit qui tenetur a tempora itaque incidunt ea nesciunt velit?</p>
            <a href="#">&#8593</a>
        </footer>
    </div>
    <!-- FIN FOOTER -->
</body>

</html>