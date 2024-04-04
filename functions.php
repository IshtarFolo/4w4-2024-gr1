<?php
    add_theme_support('menus');
    add_theme_support('custom-logo');
    add_theme_support( 'post-thumbnails' );

    // Écouteur d'action pour ajouter des scripts et des styles
    // Comme get_event_listener, mais pour WordPress
    function _4W4_modifie_requete_principal( $query ) {
        if ( $query->is_home() && $query->is_main_query() && ! is_admin() ) {
          // Fait apparaitre, en premier, les categories populaires
          $query->set( 'category_name', 'populaire' );
          $query->set( 'orderby', 'title' );
          $query->set( 'order', 'ASC' );
          }
         }

    add_action( 'pre_get_posts', '_4W4_modifie_requete_principal' );
    add_theme_support( 'post-thumbnails' );

    remove_filter( 'the_content', 'wpautop' );