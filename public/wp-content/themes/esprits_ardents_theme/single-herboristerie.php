<?php
get_header();
echo "single-herboristerie.php";
?>
<main class="mx-auto max-w-xs md:max-w-lg lg:max-w-5xl xl:max-w-6xl">
    <section class="container__herboristerie">
<h1 class="container__title-herboristerie">
<?php the_title() ?>
</h1>
<div class="container__content-herboristerie">
<p>
<?php echo get_field("description_du_produit")?>
</p>
</div>
<div class="container__img-container">
<?php $image_info=get_field("image_du_produit");
                if($image_info!=null){?>
                    <picture>
                        <source media="(min-width: 800px)" srcset="<?php echo $image_info['sizes']["large"];?>">
                        <source media="(min-width: 601px)" srcset="<?php echo $image_info['sizes']["medium"];?>">
                        <img src="<?php echo $image_info['sizes']['thumbnail'];?>" alt="<?php echo $image_info["alt"];?>">
                    </picture>
            <?php }?>
</div>
    </section>
    
        
</main>

<?php get_footer()?>