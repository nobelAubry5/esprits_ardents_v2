<?php
get_header();
echo "single-massages.php";
?>
<main class="page">
    <h2 class="title__single"><?php the_title() ?></h2>
    <?php the_post();?>
    <div class="single__container">
        <div>
            <?php $image_info=get_field("image_massage");
                if($image_info!=null){?>
                    <picture>
                        <source media="(min-width: 800px)" srcset="<?php echo $image_info['sizes']["large"];?>">
                        <source media="(min-width: 601px)" srcset="<?php echo $image_info['sizes']["medium"];?>">
                        <img src="<?php echo $image_info['sizes']['thumbnail'];?>" alt="<?php echo $image_info["alt"];?>">
                    </picture>
            <?php }?>
        </div>
        <div class="container__single-text">
            
        <?php  //remplacer cette balise pas le code de l'étape 3 ici! ?>
            <div class="single__texte">
                <?php echo get_field("description_massage") ?>
                </div>
        </div>
    </div>
    <p>
           <?php  the_content() ?>
        </p>
        <div class="card__layout">
        <?php
        //Requête et boucle d'affichage des articles avec ACF
        $posts = get_posts(array(
            'posts_per_page' => -1,
            'post_type'	=> 'massages',
            'post_status' => 'publish',
            'orderby' => 'the_title',
            'order' => 'ASC',
        ));
        if(have_posts()){
            foreach ($posts as $post){?>
                <div class="card__massage">
                    <div class="card__container">
                        <?php $image_info=get_field("image_massage");
                        if($image_info!=null){?>
                            <picture>
                                <source media="(min-width: 800px)" srcset="<?php echo $image_info['sizes']["large"];?>">
                                <source media="(min-width: 601px)" srcset="<?php echo $image_info['sizes']["medium"];?>">
                                <img src="<?php echo $image_info['sizes']['thumbnail'];?>" class="card__img" alt="<?php echo $image_info["alt"];?>">
                            </picture>
                        <?php }?>
                  
                        <div class="card__text">
                            <h2 class="card__title"><a href="<?php echo $post-> guid;?>"><?php echo $post-> post_title;?></a></h2>
                            
                            <?php if(has_excerpt()){?>
                                <p class="card__paragraph">
                                    <?php the_excerpt();?>
                                </p>
                            <?php } ?>
                            <button class="button-3" role="button">Voir plus</button>
                        </div>
                    </div>
                </div>
            <?php }
        }?>
        </div>

</main>

<?php get_footer()?>