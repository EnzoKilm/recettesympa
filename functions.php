<?php
// This function enqueues the Normalize.css for use. The first parameter is a name for the stylesheet, the second is the URL. Here we
// use an online version of the css file.
function add_normalize_CSS() {
    wp_enqueue_style( 'normalize-styles', "https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css");
}

// Register a new sidebar simply named 'sidebar'
function add_widget_Support() {
    register_sidebar( array(
        'name'          => 'Sidebar',
        'id'            => 'sidebar',
        'before_widget' => '<div>',
        'after_widget'  => '</div><hr/>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => "D'autres recettes",
        'id'            => 'sidebar-random',
        'before_widget' => '<hr/>',
        'after_widget'  => '<hr/>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ) );
}
// Hook the widget initiation and run our function
add_action( 'widgets_init', 'add_Widget_Support' );

// Register a new navigation menu
function add_Main_Nav() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
  }
  // Hook to the init action hook, run our navigation menu function
  add_action( 'init', 'add_Main_Nav' );

add_filter( 'default_content', 'my_editor_content' );
function my_editor_content( $content ) {

    $content = "<hr/><a href='LIEN ARTICLE'>PHOTO DU PLAT ICI</a><h3>Informations</h3>
    <span><p>Difficulté : <i class='fas fa-star'></i><i class='far fa-star'></i><i class='far fa-star'></i>
    Prix : <i class='fas fa-money-bill-alt'></i> <i class='far fa-money-bill-alt'></i> <i class='far fa-money-bill-alt'></i>
    Temps : <i class='fas fa-clock'></i> <i class='far fa-clock'></i> <i class='far fa-clock'></i>
    Nombre de personnes : <i class='fas fa-user'> x NOMBRE PERSONNES</p></span>
    <h3>Ingrédients</h3>
    <ul><li>LISTE INGRÉDIENTS</li></ul>
    <h3>Étapes</h3>
    <ol><li>LISTE ÉTAPES</li></ol>";

    return $content;
}

?>