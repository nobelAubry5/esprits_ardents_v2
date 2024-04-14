<?php
get_header();
echo "single-massages.php";
?>
<main class="page__single">
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
        <div>
            
        <?php  //remplacer cette balise pas le code de l'étape 3 ici! ?>
            <p class="single__texte">
                <?php echo get_field("description_massage") ?>
            </p>
        </div>
    </div>

</main>

<?php get_footer()?>