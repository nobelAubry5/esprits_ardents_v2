<?php
/*Template name: Qui suis-je */
get_header(); //Appel de l'inclusion d'entête de page
echo "page-profil.php";
?>
<main class="page">
    <div class="profil__layout">
        <div class="profil__img">
            <img src="<?php echo get_template_directory_uri()?>/liaisons/images/marie-claude.webp" alt="Logo du site" class="nav_container-img"> 
        </div>
        <div class="profil__text">
            <h2>Marie-Claude L'Or</h2>
            <h3>Massothérapeute spécialisée</h3>
            <h3>Membre de l’association Le Réseau des massothérapeutes professionnels du Québec</h3>
            <p>
                L’être humain dans toutes ses dimensions me fascine, m’inspire, m’intrigue depuis toujours.
                Et en curieuse terrienne, je ne cesse d’explorer par le biais de nouvelles formations différents aspects de la santé:
                Méditation, danse, Qi Gong, Taï Chi, Shintaïdo, PCI (Psycho-corporel intégré), poésie, hakomi , yoga, divers ateliers de développement personnel, peinture…etc J’ai une affinité toute particulière avec les huiles essentielles. Je suis en formation continue.
            </p>    
        </div>
    </div>
    <h1 class="card__layout_accueil-title">Articles</h1>
        <div class="article__layout">
        
        <?php
        //Requête et boucle d'affichage des articles avec ACF
        $posts = get_posts(array(
            'posts_per_page' => -1,
            'post_type'	=> 'articles',
            'post_status' => 'publish',
            'orderby' => 'the_title',
            'order' => 'ASC',
        ));
        if(have_posts()){
            foreach ($posts as $post){?>
                       <h2><a href="<?php echo $post-> guid;?>"><?php echo $post-> post_title;?></a></h2>
                                    <p><?php echo get_field("extrait_article");?></p>
                                    <button class="button-3">Lire plus</button>
                                    <hr>
            <?php }
        }?>
           
        </div>
    
    <div class="pagination">
    <div class="pagination-item"><a href="#">1</a></div>
    <div class="pagination-item"><a href="#">2</a></div>
    <div class="pagination-item"><a href="#">3</a></div>
    <!-- Add more pagination items as needed -->
</div>
</main>

<?php get_footer()?>