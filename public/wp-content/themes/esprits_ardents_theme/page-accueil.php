<?php
/*Template name: Accueil */
get_header(); //Appel de l'inclusion d'entête de page
echo "page-accueil.php";
?>

    <main class="page">

        <?php //var_dump($post); //Ce que reçoit la page?>

        <div>
            <h2><?php the_title() //fonction native WP?></h2>
            <h2><?php //echo $post->post_title  //Façon alternative en utilisant la variable $post?></h2>
        </div>
        <div>
        <p>
           <?php  the_content() ?>
           <?php  //echo $post->post_content; ?>
        </p>
        </div>
        <div class="layout__temoignages">
        <?php
        //Requête et boucle d'affichage des articles avec ACF
        $posts = get_posts(array(
            'posts_per_page' => -1,
            'post_type'	=> 'temoignages',
            'post_status' => 'publish',
            'orderby' => 'the_title',
            'order' => 'ASC',
        ));
        if(have_posts()){
            foreach ($posts as $post){?>
                <div class="card__temoignages">
                    <div class="card__container">
                        <div class="card__text">
                                <p class="card__paragraph">
                                    <?php echo get_field("texte_temoignage");?>
                                </p>
                            <h2 class="card__title"><?php echo get_field("nom_de_la_personne");?></h2>
                        </div>
                    </div>
                </div>
            <?php }
        }?>
        </div>
    </main>

<?php get_footer()?>