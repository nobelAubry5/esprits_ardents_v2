<?php
/*Template name: Accueil */
// get_header(); //Appel de l'inclusion d'entête de page
// echo "page-accueil.php";
?>
<div class="hero-container">
    <img src="<?php echo get_template_directory_uri()?>/liaisons/images/hero_img.jpg" alt="Background Image" class="background-image"> 
    <div class="overlay-content">
        <h1>Les Esprits Ardents</h1>
        <h2>Dites Oui à la vie</h2>
        <h3>Faites peau neuve avec une session en massothérapie! Participez activement à votre équilibre!</h3>
        <button>Prendre un rendez-vous</button>
    </div>
    <img src="<?php echo get_template_directory_uri()?>/liaisons/images/hero_massage.jpg" alt="Foreground Image" class="foreground-image"> 
</div>
    <main class="page">

        <?php //var_dump($post); //Ce que reçoit la page?>

        

</div>


        <div>
        <p>
           <?php  the_content() ?>
           <?php  //echo $post->post_content; ?>
        </p>
        </div>
<div class="card__container-accueil">
    <h1 class="card__layout_accueil-title">Nos massages</h1>
        <div class="card__layout_accueil">
            
        <?php
        //Requête et boucle d'affichage des articles avec ACF
        $posts = get_posts(array(
            'posts_per_page' => 3,
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
</div>
<h1 class="card__layout_accueil-title">Témoignages</h1>
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
                        <div class="testimony__container">
                            <i class="fa-solid fa-quote-left fa-xl"></i>
                            <span class="testimony__text">
                                    <?php echo get_field("texte_temoignage");?>
                            </span>
                            <div class="testimony__containerName">
                                <div class="testimony__name"><?php echo get_field("nom_de_la_personne");?></div>
                            </div>
                        </div>
                    
            <?php }
        }?>
           
        </div>
    </main>

<?php get_footer()?>