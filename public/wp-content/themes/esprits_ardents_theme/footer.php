</div>
    
    
    </body>
    <?php wp_footer()?>
    <footer class="piedDePage">
        <div class="footer__container">
        <div class="footer__content">
    <?php
        //Requête et boucle d'affichage des articles avec ACF
        $posts = get_posts(array(
            'posts_per_page' => -1,
            'post_type'	=> 'infos',
            'post_status' => 'publish',
            'orderby' => 'the_title',
            'order' => 'ASC',
        ));
        if(have_posts()){
            foreach ($posts as $post){?>
            <h3><?php echo get_field("nom_et_prenom");?></h3>
            <p><?php echo get_field("numero_de_telephone");?></p>
            <p><?php echo get_field("courriel")?></p>
            <p><?php echo get_field("adresse")?></p>
            <?php }
        }?>
        <i class="fa-brands fa-instagram fa-2x" style="padding:0 5px 0 5px"></i>
        <i class="fa-brands fa-facebook fa-2x"  style="padding:0 5px 0 5px"></i>
        </div>
        <div class="footer__content">
        <img src="<?php echo get_template_directory_uri()?>/liaisons/images/marlo_plan.jpg" alt="Plan du parking">
    </div>
    
    </div>
    </footer>
</html>
