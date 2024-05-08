<?php
/*Template name: Herboristerie */
get_header(); //Appel de l'inclusion d'entête de page
echo "page-herboristerie.php";
?>

<main class="mx-auto max-w-xs md:max-w-lg lg:max-w-5xl xl:max-w-6xl">
        <div>
            <h1><?php the_title()?></h1>
        </div>
        <p>
           <?php  the_content() ?>
        </p>
        <div class="layout__herboristerie">
    <?php
    //Requête et boucle d'affichage des articles avec ACF
    $posts = get_posts(array(
        'posts_per_page' => -1,
        'post_type'    => 'herboristeries',
        'post_status' => 'publish',
        'orderby' => 'the_title',
        'order' => 'ASC',
    ));
    if(have_posts()){
        foreach ($posts as $post){?>
            <div class="card__container">
                <a href="<?php echo $post-> guid;?>" class="card__herboristerie">
                    <?php $image_info=get_field("image_du_produit");
                    if($image_info!=null){?>
                        <div class="image__container">
                            <img src="<?php echo $image_info['sizes']['thumbnail'];?>" class="img__herboristerie" alt="<?php echo $image_info["alt"];?>">
                        </div>
                    <?php }?>
                    <div class="card__footer">
                    
                        <span><?php echo $post-> post_title;?></span>
                    </div>
                </a>
            </div>
        <?php }
    }?>
</div>

</main>
<?php get_footer()?>