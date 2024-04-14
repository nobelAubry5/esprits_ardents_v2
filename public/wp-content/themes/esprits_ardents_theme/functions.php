<?php
/* Ajout d'un emplacement de menu */
if (function_exists('register_nav_menus')){
    register_nav_menus(
        array(
            'principal' => 'Menu principal'
        )
    );
}
?>

<?php
    if(function_exists('add_theme_support')){
        add_theme_support('post-thumbnails');
    }
?>

<?php 
remove_filter('the_content', 'wpautop');
remove_filter('the_excerpt', 'wpautop');
?>
<?php
//Déclaration des témoignages
function agence_temoignages_custom_post() {

    //On rentre les différentes dénominations de notre article personnalisé type
    //qui seront affichées dans l'interface administrative...
    $labels = array(
        // Le nom au pluriel
        'name'                => _x( 'Temoignages', 'Post Type General Name'),
        // Le nom au singulier
        'singular_name'       => _x( 'Temoignages', 'Post Type Singular Name'),
        // Le libellé affiché dans le menu
        'menu_name'           => __( 'Temoignages'),
        //Les différents libellés de l'interface administrative
        'all_items'           => __( 'Tous nos temoignages'),
        'view_item'           => __( 'Voir nos temoignages'),
        'add_new_item'        => __( 'Ajouter une nouveau temoignage'),
        'add_new'             => __( 'Ajouter'),
        'edit_item'           => __( 'Editer un temoignage'),
        'update_item'         => __( 'Modifier un temoignage'),
        'search_items'        => __( 'Rechercher un temoignage'),
        'not_found'           => __( 'Non trouvé'),
        'not_found_in_trash'  => __( 'Non trouvé dans la corbeille')
    );

    //On peut définir ici d'autres options pour notre type d'article personnalisé
    $args = array(
        'label'               => __( 'Nos temoignages'),
        'description'         => __( 'Tous sur nos temoignages'),
        'labels'              => $labels,
        'supports'            => array( 'title', 'excerpt', 'author', 'thumbnail',
            'comments', 'revisions', 'custom-fields'),
        'hierarchical'        => false,
        'public'              => true,
        'has_archive'         => true,
        'rewrite'			  => array( 'slug' => 'temoignage')
    );

    // On enregistre notre type d'article personnalisé qu'on nomme ici "massages" et ses arguments
    register_post_type( 'temoignages', $args );
}

add_action( 'init', 'agence_temoignages_custom_post', 0 );
?>
<?php
//Déclaration des massages
function agence_massages_custom_post() {

    //On rentre les différentes dénominations de notre article personnalisé type
    //qui seront affichées dans l'interface administrative...
    $labels = array(
        // Le nom au pluriel
        'name'                => _x( 'Massages', 'Post Type General Name'),
        // Le nom au singulier
        'singular_name'       => _x( 'Massages', 'Post Type Singular Name'),
        // Le libellé affiché dans le menu
        'menu_name'           => __( 'Massages'),
        //Les différents libellés de l'interface administrative
        'all_items'           => __( 'Tous nos massages'),
        'view_item'           => __( 'Voir nos massages'),
        'add_new_item'        => __( 'Ajouter une nouveau massage'),
        'add_new'             => __( 'Ajouter'),
        'edit_item'           => __( 'Editer un massage'),
        'update_item'         => __( 'Modifier un massage'),
        'search_items'        => __( 'Rechercher un massage'),
        'not_found'           => __( 'Non trouvé'),
        'not_found_in_trash'  => __( 'Non trouvé dans la corbeille')
    );

    //On peut définir ici d'autres options pour notre type d'article personnalisé
    $args = array(
        'label'               => __( 'Nos massages'),
        'description'         => __( 'Tous sur nos massages'),
        'labels'              => $labels,
        'supports'            => array( 'title', 'excerpt', 'author', 'thumbnail',
            'comments', 'revisions', 'custom-fields'),
        'hierarchical'        => false,
        'public'              => true,
        'has_archive'         => true,
        'rewrite'			  => array( 'slug' => 'massages')
    );

    // On enregistre notre type d'article personnalisé qu'on nomme ici "massages" et ses arguments
    register_post_type( 'massages', $args );
}

add_action( 'init', 'agence_massages_custom_post', 0 );
?>

<?php
//Déclaration des témoignages
function agence_infos_custom_post() {

    //On rentre les différentes dénominations de notre article personnalisé type
    //qui seront affichées dans l'interface administrative...
    $labels = array(
        // Le nom au pluriel
        'name'                => _x( 'Informations personnelles', 'Post Type General Name'),
        // Le nom au singulier
        'singular_name'       => _x( 'Informations personnelles', 'Post Type Singular Name'),
        // Le libellé affiché dans le menu
        'menu_name'           => __( 'Informations personnelles'),
        //Les différents libellés de l'interface administrative
        'all_items'           => __( 'Toutes nos informations personnelles'),
        'view_item'           => __( 'Voir nos informations personnelles'),
        'add_new_item'        => __( 'Ajouter une nouvelle information personnelles'),
        'add_new'             => __( 'Ajouter'),
        'edit_item'           => __( 'Editer une information personnelle'),
        'update_item'         => __( 'Modifier une information personnelle'),
        'search_items'        => __( 'Rechercher une information personnelle'),
        'not_found'           => __( 'Non trouvé'),
        'not_found_in_trash'  => __( 'Non trouvé dans la corbeille')
    );

    //On peut définir ici d'autres options pour notre type d'article personnalisé
    $args = array(
        'label'               => __( 'Nos informations personnelles'),
        'description'         => __( 'Tous sur nos informations personnelles'),
        'labels'              => $labels,
        'supports'            => array( 'title', 'excerpt', 'author', 'thumbnail',
            'comments', 'revisions', 'custom-fields'),
        'hierarchical'        => false,
        'public'              => true,
        'has_archive'         => true,
        'rewrite'			  => array( 'slug' => 'infos')
    );

    // On enregistre notre type d'article personnalisé qu'on nomme ici "massages" et ses arguments
    register_post_type( 'infos', $args );
}

add_action( 'init', 'agence_infos_custom_post', 0 );
?>
<?php
function my_acf_google_map_api( $api ){
    $api['key'] = 'AIzaSyBJzM29dtfvRgsAcXssZFBWfH82bAbb-ZE';
    return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');
?>