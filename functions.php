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

    function register_my_menus() {
      register_nav_menus(
        array(
          'principal' => __( 'Principal' ),
          'bas' => __( 'Bas' ) 
        )
      );
    }
  
  // Retire la marge au dessu de la barre admin de wordpress
  function remove_admin_login_header() {
      remove_action('wp_head', '_admin_bar_bump_cb');
  }
  add_action('get_header', 'remove_admin_login_header');


    add_action( 'init', 'register_my_menus' );

    remove_filter( 'the_content', 'wpautop' );

    
    // Ajoute un filtre pour ajouter des meta query a l'API REST
    function add_meta_query_to_rest_api($args, $request) {
      $meta_key = $request->get_param('meta_key');
      $meta_value = $request->get_param('meta_value');
  
      if ($meta_key) {
          $meta_query = array('key' => $meta_key);
  
          if ($meta_value) {
              $meta_query['value'] = $meta_value;
          }
  
          $args['meta_query'] = array($meta_query);
      }
  
      return $args;
  }
  add_filter('rest_post_query', 'add_meta_query_to_rest_api', 10, 2);

// Pour enlever la page Inscription des resultats de recherche
  function exclude_page_from_search($query) {
    if ($query->is_search) {
        $query->set('post_type', 'post');
    }
    return $query;
}
add_filter('pre_get_posts','exclude_page_from_search');

// Pour enlever le post galerie de la recherche
function exclude_specific_post_from_search($query) {
  if ($query->is_search) {
      $exclude_post = get_page_by_path('galerie', OBJECT, 'post');
      if(!empty($exclude_post)) {
          $query->set('post__not_in', array($exclude_post->ID));
      }
  }
  return $query;
}
add_filter('pre_get_posts','exclude_specific_post_from_search');

// Ajout du script js pour la front-page
function enqueue_my_script() {
  if (is_front_page()) {
      wp_enqueue_script('my-script', get_template_directory_uri() . '/js/front.js', array('jquery'), '1.0', true);
  }
}
add_action('wp_enqueue_scripts', 'enqueue_my_script');

